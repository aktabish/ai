-- AI Learner — database schema
--
-- This is a best-effort reconstruction from actual application code usage
-- (every INSERT/SELECT/UPDATE across the PHP files), not a `mysqldump` of
-- the live database. If a query needs a column that isn't here, or this
-- file and the live DB ever disagree, trust a real schema dump over this
-- file and update it. See .ai/known-issues.md for open questions (e.g.
-- `users.ip_info`, which is read in show-signup.php but never written).

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    country VARCHAR(100) DEFAULT '',
    state VARCHAR(100) DEFAULT '',
    city VARCHAR(100) DEFAULT '',
    signup_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS visitor_ips (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ip_address VARCHAR(45) NOT NULL,
    url VARCHAR(255) NOT NULL,
    ip_info TEXT,
    referrer VARCHAR(255) DEFAULT '',
    country VARCHAR(100) DEFAULT '',
    state VARCHAR(100) DEFAULT '',
    city VARCHAR(100) DEFAULT '',
    visit_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message VARCHAR(500) NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS quiz_results (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    chapter VARCHAR(100) NOT NULL,
    score INT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Legacy table — only referenced by quiz1.php and view_results.php, both of
-- which are dead code (hardcoded 'student1' user, link to a nonexistent
-- module1.html/style.css) and candidates for deletion. Kept here only so
-- the schema doesn't silently disagree with what's still in the repo; see
-- .ai/known-issues.md.
CREATE TABLE IF NOT EXISTS results (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    module VARCHAR(100) NOT NULL,
    score INT NOT NULL,
    date_taken TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- NOTE: an `ai_news` table is referenced inside save-news.php, but that
-- entire file is commented-out dead code behind a short `<?` tag that PHP
-- (short_open_tag=Off) doesn't even parse — it never runs. Not included
-- here; see .ai/known-issues.md if it's ever revived.
