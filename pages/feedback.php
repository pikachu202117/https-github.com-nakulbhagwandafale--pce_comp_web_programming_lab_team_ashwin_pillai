<?php
session_start();
$name = $_POST["name"];
$message = $_POST["message"];
$priority = $_POST["priority"];
$type = $_POST["type"];
$terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_INT);
/*
if (!$terms) {
    die("Terms must be accepted");
}*/

$host = "sql101.infinityfree.com";
$dbname = "if0_36248559_server";
$username = "if0_36248559";
$password = "nO1j6JW0tEz8lUt";

$conn = new mysqli(hostname: $host, username: $username,password: $password,database: $dbname);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
    header("Location: ../main.php");
}

$sql = "INSERT INTO feedbackform (username,name, body, priority, type, terms)VALUES (?, ?, ?, ?,?,?)";
try{
$stmt = $conn->prepare($sql);
if (!$stmt) {

    die(mysqli_error($conn));
}
$user = $_SESSION['logged_user'];
$stmt->bind_param("sssssi",$user,$name,$message,$priority,$type,$terms);
$stmt->execute;
if(!mysqli_stmt_execute($stmt)){
	throw new Exception("Error submitting the form.");
}
else
	echo "Record saved.";
}

catch(Exception $e){
	echo $e->getMessage();
	header("Location: ../main.php");
}
?>
