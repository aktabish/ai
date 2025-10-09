<?php
session_start();

// Destroy all session data
session_unset();
session_destroy();

// Optional: redirect to login or home page
header("Location: /"); // or index.html
exit();
?>