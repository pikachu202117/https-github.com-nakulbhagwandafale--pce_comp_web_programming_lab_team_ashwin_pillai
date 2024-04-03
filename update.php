<?php
error_reporting(E_ALL);
session_start();
$user = $_SESSION['logged_user'];
if(!isset($_SESSION['logged_user'])){
	header("Location: pages/media.html");
}

?>
<html>
<head>
    <style>
body {
        display: grid;
        grid-template-rows: 7% 10% 75% 0% 15%;
	width: auto;
        height: auto;
        margin: 0;
}

.section1{
  display: grid;
  background-color: #faf743;
  grid-template-columns: 10% 30% 15% 15% 15% 11% 4%;
  position: sticky;  
}

select {
      padding: 10px;
      font-size: 16px;
      border: 2px solid yellow;
      border-radius: 5px;
}

    select:focus {
      outline: none;
      border-color: #3498db; /* Change border color on focus */
    }

    /* Animation for the select box */
    select {
      transition: border-color 0.3s ease;
    }

    /* Animation for the options */
    select option {
      transition: background-color 0.3s ease, color 0.3s ease;
    }

   .opt:hover {
      background-color: red; /* Change background color on hover */
      color: white; /* Change text color on hover */
    }

button{
	color: #0099CC; 
	background: #cae3fa; 
	border: 2px solid #0099CC; 
	border-radius: 20px;
	text-decoration: none;
	text-transform: uppercase;
	border: none;
	color: black;
	padding: 11px 11px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 12px;
	margin: 4px 2px;
	transition-duration: 0.4s;
	cursor: pointer;
}

.section2 {
  display: grid;
  background-color: #67cceb;
  grid-template-columns: repeat(14,auto);
  grid-auto-rows: minmax(10px, auto);
  justify-content: space-between;
  padding: 5px 2px;
}

button:hover{
 background-color: #077ae6;
 color: white;
}

.section3 {
  background-color: #bef3f7;
  height: *;
}

.btn1{
padding:5px;
background-image:linear-gradient(to right,#027ced,#bef3f7);
color:white;
}

.btn1:hover{
background-image:linear-gradient(to left,#027ced,#bef3f7);
color:black;
border: dashed green;
}

.btn2:hover{ 
background-image:linear-gradient(to left,red,#bef3f7);
color:black;
border: dashed red;
}


.btn2{
padding:5px;
background-image:linear-gradient(to right,red,#bef3f7);
color:white;
}


.bt{
   display: grid;
  place-items: center;
  width: inherit;
  height: inherit;
  padding: 5px;
 
}
footer{
  background-color: #0a0369;
  color: white;
}
.btt{
  place-items: right;
}
.anc{
  place-items: center;
}

    </style>
  </head>
<body>
  <div class="section1">
    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Circle-icons-profile.svg" width="40px" height="40px" style="padding:5px"> 
    <div class=bt id="usergreet">Hello <?php echo $_SESSION['logged_user']; ?>, Lets DIY!!</div>
    <div class="bt btt">Select Domain:</div>
    <div class=bt>
      <select>
      <option class=opt value="Agriculture">Agriculture</option>
      <option class=opt value="Electornics">Electronics</option>
      <option value="Craft">Craft</option>

      <!-- Add more font options as needed -->
    </select>

    </div>
    <div class=bt><button class=btn1>See Code</button></div>
    <div class=bt><button class=btn2 onclick="sendToServer()">Upload</button></div>
    <a href="h.html" class=anc><img src="./help.png" width=20px height=20px style="padding:15px;"></a>
  </div>
  <div class="section2">
    <div class=bt><button onclick="document.execCommand('bold', false, null)"><strong>Bold</strong></button></div>
    <div class=bt><button onclick="document.execCommand('italic', false, null)"><em>Italic</em></button></div>
    <div class=bt><button onclick="document.execCommand('strikeThrough', false, null)"><strike>Strike</strike></button></div>
    <div class=bt><button onclick="document.execCommand('justifyCenter', false, null)">Center</button></div>
    <div class=bt><button onclick="document.execCommand('justifyLeft', false, null)">Left</button></div>
    <div class=bt><button onclick="document.execCommand('justifyRight', false, null)">Right</button></div>
    <div class=bt><input type="color" id="textColorPicker" onchange="changeTextColor(event)"></div>
    <div class=bt><input type="color" id="bgColorPicker" onchange="changeBackgroundColor(event)"></div>
    <div class=bt><input type="file" id="imageInput" accept="\image/ *" onchange="insertImage()"></div>
    
    <!-- Font Family --> 
    <div class=bt>
    <select title=Font id="fontFamilySelector" onchange="changeFontFamily(this.value)">
      <option class=opt value="Arial">Arial</option>
      <option class=opt value="Times New Roman">Times New Roman</option>
      <!-- Add more font options as needed -->
    </select>
    </div>

    <!-- Font Size -->
    <div class=bt><input type="number" id="fontSizeInput" min="1" max="7" onchange="changeFontSize(this.value)"></div>
    
    <!-- Heading Tags -->
    <div class=bt><button onclick="changeHeading('h1')">H1</button></div>
    <div class=bt><button onclick="changeHeading('h2')">H2</button></div>
    <div class=bt><button onclick="changeHeading('h3')">H3</button></div>
    
    <!-- Add more formatting buttons as needed -->
  </div>
  <form id="imageForm" enctype="multipart/form-data" style="display: none;">
    <input type="file" name="image" accept="image/ *">
  </form>
  <div class="section3" contenteditable="true" id="myEditableDiv" onkeyup="saveContent()">
        <?php
        // Read the contents of the HTML file and output it directly into the div
        $htmlContent = file_get_contents($dir);
        echo $htmlContent;
	?>
  </div>
 <footer>
  <center>
  <a href="mailto:admin@adds.com">Email:admin@adds.com</a><br />
  &copy; 2024 ADDS. All rights reserved.
  </center>
 </footer>
<script type="text/javascript" src="script1.js"></script>
</body>
</html>
