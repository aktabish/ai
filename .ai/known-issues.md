# Known Issues — AI Learner

Running list of tech debt found during a full codebase review (2026-09-14).
Check items off (`[x]`) only once they're actually fixed **and deployed**,
not just patched locally. Severity: 🔴 critical · 🟠 high · 🟡 medium.

## 🔴 Critical
- [ ] Rotate the InfinityFree DB password and the AssemblyAI API key — both
      were committed in plaintext (`db.php`, `audio-to-text.php`) since the
      initial commit and remain in git history permanently. Rotation has to
      happen in the InfinityFree / AssemblyAI dashboards; nothing in this
      repo can fix it after the fact.
- [x] Move DB + API credentials out of tracked files and into `.env` /
      GitHub Actions secrets (`env.php`, `db.php`, `audio-to-text.php`,
      `.env.example`, `.github/workflows/deploy.yml`, `.htaccess` deny
      rule). **Requires 5 new repository secrets** (`DB_HOST`, `DB_USER`,
      `DB_PASS`, `DB_NAME`, `ASSEMBLYAI_API_KEY`) to be added in GitHub
      before this branch is merged to `main`, or the live site loses its DB
      connection on deploy.
- [ ] Delete `public/tfm/` (Tiny File Manager) — deployed with default
      credentials (`root` / `admin@123`, and `absar` shares the exact same
      password hash), rooted at `$_SERVER['DOCUMENT_ROOT']`. Full site
      takeover as-is; it has no legitimate role in this project.
- [ ] Add auth (or delete) `show-signup.php`, `show-contacts.php`,
      `visitors.php`, `show-quiz-result.php` — all publicly reachable,
      leaking user emails/PII, visitor IPs, and geolocation.
- [ ] `script-visit-ips.php` runs a mass `UPDATE` on `visitor_ips` and is
      reachable as a plain public GET request — move it out of the web
      root (a CLI script) or gate it.

## 🟠 High
- [ ] `signin.php`: the query only selects `id, username, email, password`,
      but the code reads `$row['name']` (should be `$row['username']`) —
      this raises an "Undefined array key" warning and leaves
      `$_SESSION['user_name']` empty for every login, so the name is never
      actually captured in session. Verified empirically: the `echo
      "Login successful. Welcome, "` that runs before `header("Location:
      ...")` does **not** block the redirect in this environment (no
      "headers already sent" observed, `display_errors` is off) — so the
      redirect itself still works, but every signed-in page that would show
      the user's name will render it blank.
- [ ] `page_visit.php` makes a blocking, uncached, no-timeout call to
      `http://ip-api.com` on **every** page load (included by ~37 pages) —
      slow page loads and a single point of failure if ip-api is slow, down,
      or rate-limits the host.
- [ ] Client IP (`HTTP_X_FORWARDED_FOR` / `HTTP_CLIENT_IP`) is trusted
      without validation in `page_visit.php` / `signup.php` — attacker
      controlled, gets stored and also used to build an outbound URL.
- [ ] `show-contacts.php` and `visitors.php` echo DB values without
      `htmlspecialchars()` — stored XSS via the contact form / referrer
      header.
- [ ] `signup.php` password length check (min 8 chars) is client-side only
      (`public/js/script.js`) — not enforced server-side; a direct POST can
      submit an empty password.

## 🟡 Medium
- [ ] No `session_regenerate_id()` after login/signup (session fixation);
      no `session_set_cookie_params()` (`httponly`/`secure`/`samesite`); no
      CSRF token on any form.
- [ ] `visitors.php` and `show-signup.php` call `$stmt->close()` on a
      variable that's never defined in either file — a PHP `Error` at the
      end of every load (page has already rendered by then, but it's a
      logged fatal on every request).
- [ ] `save-news.php` opens with the short tag `<?` and `short_open_tag` is
      `Off` — the file isn't parsed as PHP at all in production; the
      commented-out SQL logic never runs.
- [ ] `askia.php` and `chatbot.php` are byte-identical and unused — the
      live chatbot UI in `layout/footer.php` reimplements the same FAQ a
      third time, in JS. Neither PHP endpoint is called from anywhere.
- [x] `data.sql` was missing `contact_messages`, `quiz_results`, and most
      columns actually in use on `users` / `visitor_ips` — regenerated from
      real code usage and verified by loading it into a throwaway MySQL
      instance and round-tripping signup/signin/quiz/contact through it.
      Still a reconstruction, not a live dump — treat it as best-effort.
      `results` kept for now since `quiz1.php`/`view_results.php` still
      reference it, but both files are dead code (hardcoded `student1`
      user, link to a nonexistent `module1.html`/`style.css`) and
      candidates for deletion. `users.ip_info`, referenced in
      `show-signup.php`, is never written anywhere — looks like copy-paste
      from `visitors.php`; not included in the `users` schema.
- [ ] Dead files: `*-bkp.php` (×4), `how-to-write-a-prompt-3 - Copy.php`,
      `index2.html`, `index3.html`, root-level `header.php` (superseded by
      `layout/header.php`, and renders the sign-out link twice if ever
      used), `quiz1.php`, `view_results.php`.
- [ ] Ahrefs analytics script loads twice (`layout/head.php` +
      `layout/footer.php`).
- [x] No `.htaccess` rule blocking direct web access to secret-bearing
      files — fixed alongside the `.env` migration (denies `.env*`,
      `env.php`, `db.php`, the FTP sync-state file). Still open: no CSP,
      `X-Frame-Options`, `X-Content-Type-Options`, or HSTS headers.
- [ ] `ai-quiz.php` (100 questions, client-side only) never calls
      `submit_quiz_result.php` — only `introduction-to-ai-1.php` persists a
      quiz result.

## Backlog / possible future upgrades
- [ ] Wire `tests/smoke.sh` into CI against a throwaway MySQL service
      container instead of local-only (needs a plan for the external
      `ip-api.com` call in `page_visit.php` inside CI — real network call
      today, works but adds latency/flakiness risk per run).
- [ ] Replace the grep-based hardcoded-secret check in CI
      (`.github/workflows/deploy.yml`) with a dedicated scanner (e.g.
      `gitleaks`) for deeper coverage, once the historical leaked
      credentials above are rotated and no longer a live risk to worry
      about if a scan of full git history is ever added.
- [ ] Add security headers to `.htaccess` (CSP, `X-Frame-Options`,
      `X-Content-Type-Options`, HSTS).
