<?php
require_once __DIR__ . '/env.php';

$host = env('DB_HOST');
$user = env('DB_USER');
$pass = env('DB_PASS');
$db   = env('DB_NAME');

$conn = new mysqli($host, $user, $pass, $db);

// Check the connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
?>