<?php
	session_start();
	include 'db.php';
	
	$sql = "SELECT id, ip_info FROM visitor_ips WHERE ip_info IS NOT NULL";
	$result = $conn->query($sql);

	while ($row = $result->fetch_assoc()) {
		$id = $row['id'];
		$ip_info = $row['ip_info'];

		// Try decoding JSON
		$json = json_decode($ip_info, true);

		// Check if JSON was valid and contains required fields
		if ($json && isset($json['country'], $json['regionName'], $json['city'])) {
			$country = $conn->real_escape_string($json['country']);
			$state   = $conn->real_escape_string($json['regionName']);
			$city    = $conn->real_escape_string($json['city']);

			// Update row
			$update = "UPDATE visitor_ips 
					   SET country='$country', state='$state', city='$city' 
					   WHERE id = $id";

			$conn->query($update);
		}
	}

	echo "Visitor IP records updated successfully.";
	$conn->close();
?>