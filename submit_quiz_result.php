<?php
session_start();
include 'db.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'error' => 'Invalid request method']);
    exit();
}

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'error' => 'Not signed in']);
    exit();
}

if (!isset($_POST['score'])) {
    echo json_encode(['success' => false, 'error' => 'Score not provided']);
    exit();
}

$user_id = intval($_SESSION['user_id']);
$score = intval($_POST['score']);
$chapter = isset($_POST['chapter']) ? $_POST['chapter'] : 'introduction-to-ai-1';

$stmt = $conn->prepare("INSERT INTO quiz_results (user_id, chapter, score, submitted_at) VALUES (?, ?, ?, NOW())");
$stmt->bind_param('isi', $user_id, $chapter, $score);
if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $stmt->error]);
}
exit();
