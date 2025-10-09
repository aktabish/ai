<?php
session_start();
include 'db.php';

// Fetch all quiz results from the database
$result = $conn->query("SELECT * FROM quiz_results ORDER BY submitted_at DESC");

// Display stored quiz results
echo "<h1>Quiz Results</h1>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>User ID</th><th>Chapter</th><th>Score</th><th>Submitted At</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['user_id'] . "</td>";
    echo "<td>" . htmlspecialchars($row['chapter']) . "</td>";
    echo "<td>" . $row['score'] . "</td>";
    echo "<td>" . $row['submitted_at'] . "</td>";
    echo "</tr>";
}
echo "</table>";

// Close the connection
$conn->close();
