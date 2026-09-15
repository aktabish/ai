<?php
// Credentials are still hardcoded rather than pulled from env.php /
// GitHub secrets (see .ai/known-issues.md for why that was reverted) — but
// this at least picks the right set automatically, so the same db.php
// works unmodified for both `php -S` locally and the real InfinityFree
// deploy, with no manual edit needed either way.
//
// Detection: PHP's built-in dev server (`php -S ...`) reports SAPI name
// 'cli-server' — real Apache/FPM on InfinityFree never does, and this
// isn't influenced by request headers (unlike checking the Host header),
// so it can't be spoofed by a request to the live site.
if (php_sapi_name() === 'cli-server') {
    // Local development (php -S). Matches this file's own original
    // comments: WAMP-style defaults (root / empty password). Requires a
    // local MySQL server with the `ailearner` schema from data.sql loaded
    // — see .ai/workflow.md Step 5 / tests/smoke.sh.
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "ailearner";
} else {
    // Production (InfinityFree). Already permanently exposed in git
    // history regardless — see .ai/known-issues.md for the rotation TODO.
    $host = "sql107.infinityfree.com";      // or 127.0.0.1
    $user = "if0_38906098";           // your DB username (default in WAMP is 'root')
    $pass = "PvYg38fi6oz";               // your DB password (default in WAMP is empty)
    $db   = "if0_38906098_ailearner";      // name of your database
}

$conn = new mysqli($host, $user, $pass, $db);

// Check the connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
?>