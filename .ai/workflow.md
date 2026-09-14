# AI Learner Agentic Development Workflow

Context this workflow assumes: a plain procedural PHP 8 site with no framework,
no build step, and no automated test suite, deployed straight to production
(InfinityFree shared hosting) the moment a commit lands on `main`. There is no
staging environment and no approval gate between push and live — the steps
below exist to compensate for that.

## Step 1 - Understand
- Read the user requirement.
- Inspect the existing codebase.
- Identify affected files, including whether a page is routed via
  `.htaccess` (extensionless URL → matching root `*.php` file).
- Identify shared dependencies: `layout/head.php`, `layout/header.php`,
  `layout/footer.php`, `db.php`, `page_visit.php`.
- Do not modify code yet.

## Step 2 - Plan
- Create an implementation plan.
- Explain files that will be changed.
- Identify risks — call out explicitly if the change touches `db.php`,
  session/auth logic (`signin.php`, `signup.php`, `$_SESSION`), or any file
  that renders admin/user data (e.g. `show-*.php`, `visitors.php`).
- Identify how the change will be verified, since there is no test suite
  (see Step 5).

## Step 3 - Implement
- Follow existing project conventions: procedural PHP, page-per-file at the
  repo root, shared chrome via the `layout/*.php` includes, static assets
  under `public/{css,js,images}`.
- All SQL must use `mysqli` prepared statements with bound parameters —
  never string-concatenate user input into a query.
- Escape all dynamic output with `htmlspecialchars()` before echoing it into
  HTML.
- Never hardcode credentials, API keys, or tokens in a page — `db.php`
  already carries live DB credentials in git history; do not repeat that
  mistake in new files.
- Make the smallest appropriate changes. Do not rewrite unrelated code.

## Step 4 - Review
Check:
- Functional correctness
- Security — SQL injection (prepared statements used?), stored/reflected XSS
  (output escaped?), auth checks on any page that shouldn't be public,
  session fixation (`session_regenerate_id()` after login/signup), no new
  secrets committed
- Code quality
- Error handling
- Performance — anything added to `page_visit.php` or another
  include that loads on most pages must not add a slow/unbounded external
  call, since it runs on every page load
- Mobile compatibility

## Step 5 - Test
There is no automated test suite (`php -l` in CI is the only fully automated
check). This step is manual — do not skip it because CI is green.
- Run `php -l` on every changed `.php` file and fix any syntax errors.
- Run `tests/smoke.sh` locally against a test database (copy
  `.env.example` to `.env`, point it at a throwaway MySQL instance with
  `data.sql` imported) — it exercises the core pages and flags anything
  that 500s or drops a DB connection.
- Manually exercise the affected page(s) and forms end to end, including the
  signed-in and signed-out states where relevant.
- If the change touches a DB query, verify it against `data.sql` — it's a
  reconstruction from code usage (not a live dump) but is kept current; if
  it and the code ever disagree, trust a real schema check over either.
- Fix failures before proceeding.

## Step 6 - Git
- Review `git diff` in full before staging.
- Double-check nothing sensitive (credentials, tokens, `.env`-style values)
  is being added.
- Create a meaningful, scoped commit.
- This repo commits directly to `main` (no feature-branch/PR flow is in
  active use) and a push to `main` deploys to production immediately — treat
  every commit to `main` as a production release. For any change carrying
  real risk (auth, DB schema, payment/credentials-adjacent code), prefer a
  feature branch and a manual merge to `main` once verified locally.

## Step 7 - Deployment
- GitHub Actions (`.github/workflows/deploy.yml`) triggers automatically on
  every push to `main` and FTP-deploys the full working tree to InfinityFree
  — there is no separate approval or staging step, so Steps 4–6 are the only
  gate before production.
- Watch the Actions run to confirm the FTP deploy succeeded.

## Step 8 - Verify
- Check the live site at https://ailearner.free.nf.
- Verify the requested feature/fix directly in production.
- If something is broken, the fastest recovery is `git revert` + push, which
  redeploys automatically the same way.
- Report the result.
