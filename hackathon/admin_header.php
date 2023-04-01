<?php

session_start();

if(!$_SESSION['user'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}

?>
<!DOCTYPE html>
<head>
<title>admin menu</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: red;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
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
  background-color:rgb(255,255,255);opacity:0.6; ;
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
.about{

  padding:20px;
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
  padding: 14px 20px;
  margin: 8px 10;
  border: none;
  border-radius: 4px ;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

#a {
  border-radius: 100px 100px;
  background-color: #f2f2f2;
  padding: 0px 30px;
}
body {
background: linear-gradient(45deg, #FC466B, #3F5EFB);
}
</style>
<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
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
	
	
<ul>
  <li><a href="admin_menu.php"><i class="fa fa-fw fa-book"></i>ADMIN MENU</a></li>
  <li><a href="coordinators.php"><i class="fa fa-fw fa-users"></i>COORDINATORS</a></li>
  <li><a href="reg_data.php"><i class="fa fa-fw fa-th-list"></i>EVENT REGISTRATION</a></li>

  <li><a href="change_pass2.php"><i class="fa fa-fw fa-lock"></i>CHANGE PASSWORD</a></li>
  
  <li><a href="logout.php"><i class="fa fa-fw fa-share"></i>LOG OUT</a></li>
  
 <!-- <li style="float:right"><a href="deleter.php"><i class="fa fa-fw fa-remove"></i>CLEAR ALL RECORDS</a>-->
 <li style="float:right"><a href="deleter.php"><i class="fa fa-fw fa-remove"></i><button onclick="myFunction()">CLEAR ALL RECORDS</button></a></li>

<script>
function myFunction() {
  confirm("Press a button!");
}
</script>
  
  </head>


  
</ul><h1 align="center"><b>HACKATHON<b></h1>
<br>
<body>
   
    
	<div id="a">
				