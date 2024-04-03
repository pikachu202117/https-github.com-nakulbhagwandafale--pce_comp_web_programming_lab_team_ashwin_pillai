<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
// Handle the POST request and save content to a file (you can customize this part)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $postData = json_decode(file_get_contents("php://input"), true);

  if (isset($postData['content'])) {
    $content = $postData['content'];
    $dir = $_SESSION['home']."/pages/".$_SESSION['title'].".html";
    file_put_contents($dir, $content);

    // Respond with a simple JSON message
    echo json_encode(['message' => 'Content saved successfully']);
  } else {
    // Handle invalid request
    header('HTTP/1.1 400 Bad Request');
    echo json_encode(['error' => 'Invalid request']);
  }
}
?>
