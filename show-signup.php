<?php
	session_start();
	include 'db.php';
	
	// Fetch all stored IP addresses from the database
	$result = $conn->query("SELECT * FROM users ORDER BY id DESC limit 1000");

	// Display stored IPs
	echo "<h1>Signup Users</h1>";
	echo "<table border='1'>";
	echo "<tr><th>ID</th><th>User Name</th><th>Email</th><th>Date Time</th><th>Country</th><th>State</th><th>City</th></tr>";
	while ($row = $result->fetch_assoc()) {
		$data = json_decode($row['ip_info'], true);
		$highlightDate = date('Y-m-d 00:00:00');
		$dateTime = date('Y-m-d H:i:s', strtotime($row['signup_date'] . ' +12 hours'));
		if($dateTime > $highlightDate )
		{
			$style = 'style= "background-color : grey; color : white; font-weight : bold;"';
		}
		else
		{
			$style = '';
		}
		echo "<tr $style><td>" . $row['id'] . "</td><td>" . $row['username'] . "</td><td>" . $row['email'] . "</td><td>" . $dateTime . "</td><td>" . $row['country'] . "</td><td>" . $row['state'] . "</td><td>" . $row['city'] . "</td></tr>";
	}
	echo "</table>";

	// Close the connection
	$stmt->close();
	$conn->close();
?>