<?php
// Capture the visitor's IP address
$visitor_ip = $_SERVER['REMOTE_ADDR'];

// For additional security, check for proxies
if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	$visitor_ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // Proxy IP
}

// Capture the current page URL
$page_visited = $_SERVER['REQUEST_URI'];

function getUserIP() {
    // Get client IP address
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Direct / Unknown';
$ip = getUserIP();
$api_url = "http://ip-api.com/json/{$ip}";

// Get IP details from API
$response = file_get_contents($api_url);
$json = json_decode($response, true);

if ($json && isset($json['country'], $json['regionName'], $json['city'])) 
{
	$country = $conn->real_escape_string($json['country']);
	$state   = $conn->real_escape_string($json['regionName']);
	$city    = $conn->real_escape_string($json['city']);
}
else
{
	$country = '';
	$state = '';
	$city = '';
}


// Insert the IP address into the database
$stmt = $conn->prepare("INSERT INTO visitor_ips (ip_address, url, ip_info, referrer, country , state , city) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $visitor_ip, $page_visited, $response, $referrer, $country, $state, $city);

// Execute the query
if ($stmt->execute()) {
	
} else {
}

// Close the statement and connection
$stmt->close();	
?>