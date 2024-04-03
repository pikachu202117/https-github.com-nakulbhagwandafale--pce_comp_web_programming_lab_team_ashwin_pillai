<?php
session_start();
if(!isset($_SESSION['logged_user'])){
        header("Location: pages/media.html");
}
$dir = $_SESSION['home']."/pages/images/";
//mkdir($dir,0777,true);
// Check if file is uploaded successfully
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $tempFile = $_FILES['image']['tmp_name'];
    $targetFile = $dir.basename($_FILES['image']['name']); // Adjust this path as needed

    // Move the uploaded file to the desired directory
    if (move_uploaded_file($tempFile, $targetFile)) {
        // Return the URL of the uploaded image
        echo "http://ashwinpillaimes.free.nf/server/data/".$_SESSION['logged_user']."/data/pages/images/".basename($_FILES['image']['name']);
    } else {
        echo 'Error uploading file';
    }
} else {
    echo 'No file uploaded';
}
?>
