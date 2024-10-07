<?php

$id=0;
if (isset($_POST['id'])) {
   $id = $_POST['id'];
}

$ch = curl_init();

// Set URL and options
curl_setopt($ch, CURLOPT_URL, "http://localhost/php-exam/api.php?view=company_by_id&id=".$id);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the request and fetch response
$response = curl_exec($ch);

// Check for errors
if ($response === false) {
    echo "cURL Error: " . curl_error($ch);
} else {
    // Decode and display the response
    $article = json_encode($response, true);
    echo $response;
}

// Close cURL session
curl_close($ch);

?>