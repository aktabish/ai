<?php
	session_start();
	include 'db.php';
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $conn->real_escape_string($_POST['name']);
		$email = $conn->real_escape_string($_POST['email']);
		$message = $conn->real_escape_string($_POST['message']);
		
		$sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";

		if ($conn->query($sql) === TRUE) {
			echo "✅ Message sent successfully!";
		} else {
			echo "❌ Failed to send message.";
		}
	} else {
		echo "❌ Invalid request.";
	}

	// Close the connection
	$conn->close();
?>