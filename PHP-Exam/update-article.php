<?php
$ch = curl_init();

$data = [
    'image' => $_POST['image'],
    'title' => $_POST['title'],
    'link' => $_POST['link'],
    'content' => $_POST['content'],
	'status' => $_POST['status']
];

// Set URL and options
curl_setopt($ch, CURLOPT_URL, "http://localhost/php-exam/api.php?update=article&id=".$_POST['id']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the request and fetch response
$response = curl_exec($ch);

// Check for errors
if ($response === false) {
    echo "cURL Error: " . curl_error($ch);
} else {
    // Decode and display the response
    $result = json_decode($response, true);
    echo true;
}

// Close cURL session
curl_close($ch);
?>