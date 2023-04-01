<!DOCTYPE html>
<head>
<title>HACKATHON</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #33;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: rgb(255,255,255);opacity:0.6;
}
.about{
height:px;
  padding:20px;
  color:white;
}
 .col-sm-4 {
  border: 2px solid #C70039;
  padding: 10px;
 border-radius: 50px 20px;}
  .col-sm-3 {
  border: 2px solid #C70039;
  
  padding: 10px;
  border-radius: 50px 20px;}

body {
background: linear-gradient(45deg, #FC466B, #3F5EFB);
}
 #navbar {
  overflow: hidden;
  background-color: #33;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 30%;
  background-color: #4CAF50;
  color: white;
  padding: 10px 50px;
  margin: 8px 10;
  border: none;
  border-radius: 4px ;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
p{
	color:white;
}
h{color:white;}
#a {
  border-radius: 100px 100px;
  background-color: #f2f2f2;
  padding: 0px 300px;
}	

</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	  



<!---<center><img src="img/111.jpg"></center><br>--->



<div class="w3-top">
<div class="w3-bar">
<ul>
  <li><a href="mainpage.php"><i class="fa fa-fw fa-home" class="w3-bar-item w3-button w3-padding-large"></i>HOME</a></li>
  <li><a href="ss.php"><i class="fa fa-fw fa-send"></i>REGISTRATION</a></li>
  <li><a href="login.php"><i class="fa fa-fw fa-user"></i>COORDINATOR LOGIN</a></li>
  <li><a href="results_data.php"><i class="fa fa-fw fa-search"></i>RESULTS</a></li>
  <li><a href="contact.php"><i class="fa fa-fw fa-envelope"></i>CONTACT US</a></li>
  <li style="float:right"><a href="about.html">ABOUT</a></li></ul></div></div><br><br><br>
</head>
<body>
<h1 align="center"><B>HACKATHON</B></h1>

  
  
  <body>
  


</div><div id='a'><br>
<center><h3>GET IN TOUCH</h3></center>
<form action="contact.php" method="post" align='center'>
<input type="text" name="name" style="text-transform:uppercase" placeholder="NAME" required ><br ><br >
	<input type="text" name="email"  placeholder="E-MAIL" required><br ><br >
	<input type="text" name="sub" style="text-transform:uppercase" placeholder="SUBJECT" required><br ><br >
	<textarea  name="msg" rows="4" cols="60" placeholder="MESSAGE"></textarea><br><br>
        
	   <input type="submit" name="submit" value="SUBMIT" ><br><br>
   </div>
</form>
<div class='about'>
  
 
  <h1><b>Contact Us</b></h1>
  <h3><i>COORDINATOR EMAIL - coordinator@college.com <br><br>
    COORDINATOR PHONE NO - 0123456789
</i></b></h3>


</div>
</body></html>
<?php
include("db_conection.php");
if(isset($_POST['submit']))
{
$name = mysqli_real_escape_string($link, $_POST['name']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$sub = mysqli_real_escape_string($link, $_POST['sub']);
$msg = mysqli_real_escape_string($link, $_REQUEST['msg']);

	
$sql = "INSERT INTO grevience (name,email,sub,msg) VALUES ('$name','$email','$sub','$msg')";
   mysqli_query($link,$sql) ;
   $message="Your Response submitted Successfully";
   echo '<script>';
		echo "alert('$message')";
		echo '</script>';

}

     ?>