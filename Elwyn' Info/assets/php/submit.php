<?php
header('Content-Type: application/json');

$response = array(
    "successMessage" => "Test message sent successfully!"
);

http_response_code(200); // Set HTTP response code to 200 (OK)
echo json_encode($response);
exit;
?>
