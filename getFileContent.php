<?php
if(isset($_GET['filename'])) {
  $filename = $_GET['filename'];
  $filepath = "http://ashwinpillaimes.free.nf/server/data/{$_SESSION[['logged_user']}/pages/{$filename}";

  // Check if file exists
  if(file_exists($filepath)) {
    // Read file content
    $fileContent = file_get_contents($filepath);
    echo "<pre>{$fileContent}</pre>"; // Display file content
  } else {
    echo "File not found.";
  }
} else {
  echo "Filename not specified.";
}
?>
