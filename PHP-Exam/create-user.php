<?php
$ch = curl_init();

$data = [
    'firstname' => $_POST['firstname'],
    'lastname' => $_POST['lastname'],
    'type' => $_POST['type'],
    'status' => $_POST['status']
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
    $result = json_decode($response, true);
    echo true;
}

// Close cURL session
curl_close($ch);

?>