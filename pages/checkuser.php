<?php
session_start();
$mysqli = new mysqli('sql101.infinityfree.com','if0_36248559','nO1j6JW0tEz8lUt','if0_36248559_server');

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Receive user input
$user = $_POST['username'];
$passwd = $_POST['password'];

$query = "SELECT * FROM mainTable WHERE username = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("s", $user);
$stmt->execute();
$result = $stmt->get_result();
//$row = $result->fetch_assoc();
// Check if the username exists
if ($result->num_rows === 1) {
    // Retrieve the password hash
    $row = $result->fetch_assoc();
    $stored_password_hash = $row['password'];
    $_SESSION['home']=$row['homedir'];
    // Compare passwords
    if (password_verify($passwd, $stored_password_hash)) {
	    $_SESSION['logged_user'] = $user;
	    header("Location: ../main.php");
    }
    else{
        $out=password_verify($passwd, $stored_password_hash);
	    echo "Something wrong<br>";
        echo "stored password is:".$passwd."<br>";
        echo "stored password hash is:".$stored_password_hash."<br>";
        echo False."<br>"." and its type is :".gettype($out);
        //echo True;
        echo "homedir: {$_SESSION['home']}"."<br>";
        //echo "logged user is:".$_SESSION['logged_user'];
	    echo "<script type='text/javascript'>window.open('media.html','_blank');</script>";
    }
}
else{
	echo "User doesnot exist...";
	echo "<script type='text/javascript'>window.open('media.html','_blank');</script>";
}
?>

