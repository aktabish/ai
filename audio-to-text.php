<?php
require_once __DIR__ . '/env.php';
$apiKey = env('ASSEMBLYAI_API_KEY');
/*$audio_url = 'https://ailearner.free.nf/audio2.mp3'; // Must be a direct URL

$data = json_encode([
    'audio_url' => $audio_url
]);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.assemblyai.com/v2/transcript');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'authorization: ' . $apiKey,
    'content-type: application/json'
]);

$result = curl_exec($ch);
curl_close($ch);

echo $result;*/

$transcriptId = 'b2846e1a-d6eb-428a-9f64-c41d758320c7';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.assemblyai.com/v2/transcript/' . $transcriptId);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'authorization: ' . $apiKey
]);

$response = curl_exec($ch);
curl_close($ch);

echo $response;

?>
