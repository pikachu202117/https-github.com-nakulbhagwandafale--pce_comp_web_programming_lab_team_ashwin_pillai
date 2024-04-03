<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>File List</title>
</head>
<body>

<h2>File List</h2>
<ul id="fileList">
  <?php
 session_start();
  // Fetch filenames from the database and display them as a list
  $servername = "sql101.infinityfree.com";
  $username = "if0_36248559";
  $password = "nO1j6JW0tEz8lUt";
  $dbname = "if0_36248559_server";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
$user=$_SESSION['logged_user'];
  $sql = "SELECT projTitle FROM docsTable where username='{$user}'";
  $result = $conn->query($sql);
  echo "<h1><center>List of Projects:</center><h1><br>";
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<li><a href='http://ashwinpillaimes.free.nf/server/data/{$_SESSION['logged_user']}/data/pages/{$row['projTitle']}.html' class='fileLink'</a>{$row['projTitle']}</li>";
    }
  } else {
    echo "0 results";
  }

  $conn->close();
  ?>
</ul>

<div id="fileContent">
  <!-- File content will be loaded here -->
</div>
<!--data-filename='{$row['projTitle']}'>{$row['projTitle']} add in anchor tag
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
  // Event listener for file links
  $(".fileLink").click(function(e) {
    e.preventDefault();

    // Get filename from data attribute
    var filename = $(this).data('filename');
    // AJAX request to fetch file content
    $.ajax({
      url: 'getFileContent.php',
      type: 'GET',
      data: { filename: filename },
      success: function(response) {
        $("#fileContent").html(response);
      },
      error: function(xhr, status, error) {
        console.error(error);
      }
    });
  });
});
</script>
-->
</body>
</html>

