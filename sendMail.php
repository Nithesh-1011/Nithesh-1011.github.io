<?php
// Example for sendMail.php
$response = array('success' => false);

if (isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
    // Process and send the email, set success to true on successful email sending
    // For now, just a dummy success
    $response['success'] = true;
}

header('Content-Type: application/json');
echo json_encode($response);
?>
