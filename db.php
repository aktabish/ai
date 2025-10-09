<?php
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