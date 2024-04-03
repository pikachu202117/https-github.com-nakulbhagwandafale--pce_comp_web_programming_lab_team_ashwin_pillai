<?php
    $user = $_POST['user'];
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

   $conn = new mysqli('sql101.infinityfree.com','if0_36248559','nO1j6JW0tEz8lUt','if0_36248559_server');
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
 $query = "SELECT password FROM mainTable WHERE username = ?";
 $stmt = $conn->prepare($query);
 $stmt->bind_param("s", $user);
 $stmt->execute();
 $result = $stmt->get_result();

   if($password == $repassword){
   if($result->num_rows === 0)
   {
    $dirpath = dirname(getcwd());
    $dirpath = $dirpath."/server/data/".$user."/data";
    $stmt = $conn->prepare("insert into mainTable(firstname,lastname,dob,contactnumber,emails,username,password,gender,homedir) values(?,?,?,?,?,?,?,?,?)");
    $stmt ->bind_param("sssssssss",$first,$last,$dob,$mobile,$email,$user,$hashed_password,$gender,$dirpath);
    $stmt->execute();
    $username = $user;
    $name = "0";
    $email = "0";
    $phone = "0";
    $bio = "0";
    $dob = "0";
    $coun = "0";
    $website = "0";
    $twit = "0";
    $face = "0";
    $google = "0";
    $link1 = "0";
    $insta = "0";

// Prepare and execute insert query
$stmt = $conn->prepare("INSERT INTO userinfo (username, name, email, phone, bio, dob, coun, website, twit, face, google, link1, insta) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssssssss", $username, $name, $email, $phone, $bio, $dob, $coun, $website, $twit, $face, $google, $link1, $insta);
$stmt->execute();

    mkdir($dirpath."/pages",0777,true);
    mkdir($dirpath."/pages/images",0777,true);
//    echo "connect ";
    $stmt->close();
    $conn->close();
    echo "<script type='text/javascript'>window.open('pages/media.html','_blank');</script>";
  }
}
else{
        echo "Enter correct username and password.";
	echo "<script type='text/javascript'>window.open('./register.html','_blank');</script>";
}
?>
