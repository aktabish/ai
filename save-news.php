<?
	/*include 'db.php';

	// Get JSON from n8n
	$data = json_decode(file_get_contents('php://input'), true);

	// Validate required fields
	if (!empty($data['title']) && !empty($data['description']) && !empty($data['url'])) {
		$title = $conn->real_escape_string($data['title']);
		$description = $conn->real_escape_string($data['description']);
		$url = $conn->real_escape_string($data['url']);
		
		$sql = "INSERT INTO ai_news (title, description, url, created_at) VALUES ('$title', '$description', '$url', NOW())";
		
		if ($conn->query($sql) === TRUE) {
			echo json_encode(["status" => "success", "message" => "News saved successfully"]);
		} else {
			echo json_encode(["status" => "error", "message" => $conn->error]);
		}
	} else {
		echo json_encode(["status" => "error", "message" => "Missing required fields"]);
	}

	$conn->close();*/
	echo 'test';
?>