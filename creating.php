<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Creation</title>
  <link rel="stylesheet" href="styling.css">
</head>
<body>
  <div class="container">
    <h2 class="animate__animated animate__fadeInDown">Blog Creation Form</h2>
    <form id="blogForm" class="animate__animated animate__fadeInUp" action="creating.php" method="POST">
      <div class="form-group">
        <label for="blogTitle">Blog Title:</label>
        <input type="text" id="blogTitle" name="blogTitle" required>
      </div>
      <div class="form-group">
        <label for="ageRestriction">Age Restriction:</label>
        <input type="number" id="ageRestriction" name="ageRestriction" min="0" required>
      </div>
      <div class="form-group">
        <label for="domains">Select Domains:</label>
        <select id="domains" name="domains" multiple required>
          <option value="engineering">Engineering</option>
          <option value="raspberryPi">Raspberry Pi</option>
          <option value="craft">Craft</option>
          <option value="agriculture">Agriculture</option>
          <!-- Add more options as needed -->
        </select>
      </div>
      <button type="submit" class="btn animate__animated animate__rubberBand">Submit</button>
    </form>
  </div>
</body>
</html>
<?php
$_SESSION['title'] = $_POST['blogTitle'];
$ager = $_POST['ageRestriction'];
$domain = $_POST['domains'];
if(!isset($_SESSION['logged_user'])){
        header("Location: pages/media.html");
}
else{
  $conn = new mysqli('sql101.infinityfree.com','if0_36248559','nO1j6JW0tEz8lUt','if0_36248559_server');
  if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
  }
$stmt = $conn->prepare("insert into docsTable(username,projTitle,ageRestriction,domain)values(?,?,?,?)");
   $stmt->bind_param("ssss",$_SESSION['logged_user'],$_SESSION['title'],$ager,$domain);
   $stmt->execute();
   header("Location: create.php");
}
?>
