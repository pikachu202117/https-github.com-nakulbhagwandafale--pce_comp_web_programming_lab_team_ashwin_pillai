<?php
session_start();
// Database connection parameters
$servername = "sql101.infinityfree.com";
$username = "if0_36248559";
$password = "nO1j6JW0tEz8lUt";
$dbname = "if0_36248559_server";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
/*    $uname = mysqli_real_escape_string($conn, $_POST['uname']);   */
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $bio = mysqli_real_escape_string($conn, $_POST['bio']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $coun = mysqli_real_escape_string($conn, $_POST['coun']);
    $website = mysqli_real_escape_string($conn, $_POST['website']);
    $twit = mysqli_real_escape_string($conn, $_POST['twit']);
    $face = mysqli_real_escape_string($conn, $_POST['face']);
    $google = mysqli_real_escape_string($conn, $_POST['google']);
    $link1 = mysqli_real_escape_string($conn, $_POST['link1']);
    $insta = mysqli_real_escape_string($conn, $_POST['insta']);

    // Insert data into database
try{
    $sql = "update table userinfo set name='{$name}',email='{$email}',phone='{$phone}',bio='{$bio}',dob='{$dob}',coun='{$coun}',website='{$website}',twit='{$twit}',face='{$face}',google='{$google}',link1='{$link1}', insta='{$insta}' where username={$_SESSION['logged_user']}";
   $result = $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        throw new Exception("Error: " . $sql . "<br>" . $conn->error);
    }
}
catch(Exception $e){
            $sql = "INSERT INTO userinfo (username, name, email, phone, bio, dob, coun, website, twit, face, google, link1, insta)VALUES ('{$_SESSION['logged_user']}', '$name', '$email', '$phone', '$bio', '$dob', '$coun', '$website', '$twit', '$face', '$google', '$link1', '$insta')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
	header("Location: ../main.html");
    }
}
}

// Close connection
$conn->close();
?>
