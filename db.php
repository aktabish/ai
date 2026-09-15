<?php
// TEMPORARY: reverted to hardcoded credentials (2026-09-15) to remove a
// variable while chasing an unrelated hosting-level outage, and to reduce
// moving parts while the CI/secrets setup is still being stabilized. This
// value is already permanently exposed in git history regardless of where
// it lives — re-adopt env.php + repository secrets (see .env.example, git
// history around this commit) once the workflow is solid. Tracked in
// .ai/known-issues.md — do not let this linger.
$host = "sql107.infinityfree.com";      // or 127.0.0.1
$user = "if0_38906098";           // your DB username (default in WAMP is 'root')
$pass = "PvYg38fi6oz";               // your DB password (default in WAMP is empty)
$db   = "if0_38906098_ailearner";      // name of your database

$conn = new mysqli($host, $user, $pass, $db);

// Check the connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
?>