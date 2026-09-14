# AI Learner — Project Notes for Agents

Procedural PHP 8 website with no framework, no build step, and no automated
test suite, deployed straight to production on every push to `main`. Read
this before making changes. See also `.ai/workflow.md` (the process to
follow for any change) and `.ai/known-issues.md` (open tech debt).

## Stack & structure
- Plain PHP 8 (procedural), MySQLi (`db.php`), sessions (`session_start()` +
  `$_SESSION`).
- One page = one file at the repo root (e.g. `ai-course.php`). `.htaccess`
  rewrites extensionless URLs (`/ai-course`) to the matching `.php` file.
- Shared chrome: `layout/head.php`, `layout/header.php`, `layout/footer.php`
  — included by every page.
- Static assets: `public/css`, `public/js`, `public/images`.
- A Spanish translation lives under `es/` and mirrors the root pages
  (includes reference `../db.php`, `../layout/*` etc.).
- Secrets: `env('KEY')` (see `env.php`) reads from `.env` in the repo root
  (gitignored — copy `.env.example` for local dev, see there for the
  required keys). In production, GitHub Actions writes `.env` from
  repository secrets right before the FTP deploy step — **never** commit a
  real `.env` or hardcode a credential in a `.php` file. `.htaccess` denies
  direct web access to `.env`, `env.php`, and `db.php`.

## Conventions (follow these in every change)
- All SQL: `mysqli` prepared statements with bound parameters. No string
  concatenation of request input into a query.
- All dynamic output into HTML: `htmlspecialchars()`.
- New pages: copy the head/header/footer include pattern from an existing
  page (e.g. `contact.php`) rather than inventing a new layout.
- Keep changes scoped — this is a large flat file tree; don't touch
  unrelated pages "while you're in there."

## Deploy & environments
- No staging environment. Push to `main` → `.github/workflows/deploy.yml`
  runs a `checks` job (PHP lint on every `.php` file, plus a grep-based scan
  for hardcoded-looking credentials), then, only if that passes, the
  `deploy` job FTP-deploys the full tree to InfinityFree
  (`https://ailearner.free.nf`) and runs a post-deploy smoke check against a
  few live URLs.
- There is no automated test suite beyond that lint step. Run
  `tests/smoke.sh` locally (against a throwaway/test MySQL database with
  `data.sql` imported) before pushing anything that touches a form, auth
  flow, or DB query — see `.ai/workflow.md` Step 5.
- For any change touching auth, the DB schema, or an admin-facing page:
  prefer a feature branch and a deliberate merge to `main` rather than
  committing to `main` directly — a push to `main` is an instant production
  release with no review gate in between.

## Known landmines
See `.ai/known-issues.md` for the full list. Highlights:
- `public/tfm/` (a web file manager) is currently deployed with
  default/shared credentials (`root`/`absar`, both `admin@123`), rooted at
  the document root — full site takeover as-is. Pending removal; see
  `.ai/known-issues.md`. Don't add anything like it back.
- `show-signup.php`, `show-contacts.php`, `visitors.php`,
  `show-quiz-result.php`, `script-visit-ips.php` are currently
  unauthenticated pages exposing user/visitor PII (pending an auth gate —
  see `.ai/known-issues.md`). Don't use them as a reference pattern for a
  new admin page; any new admin view needs an auth check from the start.
- `data.sql` is a best-effort reconstruction from application code, not a
  live database dump. If a query needs a column that isn't in it, verify
  actual usage across the codebase (or a real schema dump) before trusting
  either source blindly.
