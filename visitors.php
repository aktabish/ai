<?php
	session_start();
	include 'db.php';
	
	// Fetch all stored IP addresses from the database
	$result = $conn->query("SELECT * FROM visitor_ips ORDER BY visit_time DESC");

	// Display stored IPs
	echo "<h1>Visitor IPs</h1>";
	echo "<table border='1'>";
	echo "<tr><th>ID</th><th>IP Address</th><th>Visit Time</th><th>Page Visit</th><th>Country</th><th>State</th><th>City</th><th>Organistion</th><th>Referrer</th></tr>";
	while ($row = $result->fetch_assoc()) {
		$data = json_decode($row['ip_info'], true);
		if (stripos($data['org'], 'facebook') !== false || stripos($data['isp'], 'facebook') !== false) 
		{
			continue;
		}
		if (stripos($data['org'], 'google') !== false || stripos($data['isp'], 'google') !== false) 
		{
			continue;
		}
		$highlightDate = date('Y-m-d 00:00:00');
		$plus12 = date("Y-m-d H:i:s", strtotime($row['visit_time'] . " +12 hours"));
		if($plus12 > $highlightDate )
		{
			$style = 'style= "background-color : grey; color : white; font-weight : bold;"';
		}
		else
		{
			$style = '';
		}
		if($data)
		{
			echo "<tr $style><td>" . $row['id'] . "</td><td>" . $row['ip_address'] . "</td><td>" . $plus12 . "</td><td>" . $row['url'] . "</td><td>" . $row['country'] . "</td><td>" . $row['state'] . "</td><td>". $row['city'] ."</td><td>" . $data['isp'] . ", " . $data['org'] . "</td><td>" . $row['referrer'] . "</td></tr>";
		}
		else
		{
			echo "<tr $style><td>" . $row['id'] . "</td><td>" . $row['ip_address'] . "</td><td>" . $plus12 . "</td><td>" . $row['url'] . "</td><td></td><td></td><td></td><td></td><td>" . $row['referrer'] . "</td></tr>";
		}
	}
	echo "</table>";

	// Close the connection
	$stmt->close();
	$conn->close();
?>