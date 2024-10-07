<?php
$ch = curl_init();

$data = [
    'image' => $_POST['image'],
    'title' => $_POST['title'],
    'link' => $_POST['link'],
    'date' => $_POST['date'],
    'content' => $_POST['content'],
    'status' => 'For Edit'
];

// Set URL and options
curl_setopt($ch, CURLOPT_URL, "http://localhost/php-exam/api.php");
curl_setopt($ch, CURLOPT_POST, true);
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
    //$result = json_decode($response, true);
    //print_r($result);
	echo true;
}

// Close cURL session
curl_close($ch);

?>