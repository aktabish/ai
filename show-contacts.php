<?php
	session_start();
	include 'db.php';
	
	// Fetch all stored IP addresses from the database
	$result = $conn->query("SELECT * FROM contact_messages ORDER BY id DESC");

	// Display stored IPs
	echo "<h1>Contact Us</h1>";
	echo "<table border='1'>";
	echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th><th>Submit Date</th></tr>";
	while ($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['message'] . "</td><td>" . $row['submitted_at'] . "</td></tr>";
	}
	echo "</table>";

	// Close the connection
	$conn->close();
?>