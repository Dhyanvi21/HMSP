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
  background-color:rgb(255,255,255);opacity:0.6; 
}
.about{
height:px;
  padding:20px;
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
 
hr.new {
  border: 5px solid yellow;
  border-radius: 5px;
}
#a {
  border-radius: 100px 100px;
  background-color: #f2f2f2;
  padding: 0px 30px;
}


.ml2 {
  font-weight: 900;
  font-size: 3.5em;
}

.ml2 .letter {
  display: inline-block;
  line-height: 1em;
}
.ml5 {
  position: relative;
  font-weight: 300;
  font-size: 1.8em;
  color: #402d2d;
}

.ml5 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.1em;
  padding-right: 0.05em;
  padding-bottom: 0.15em;
  line-height: 1em;
}

.ml5 .line {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  margin: auto;
  height: 3px;
  width: 100%;
  background-color: #402d2d;
  transform-origin: 0.5 0;
}

.ml5 .ampersand {
  font-family: Baskerville, serif;
  font-style: italic;
  font-weight: 400;
  width: 1em;
  margin-right: -0.1em;
  margin-left: -0.1em;
}

.ml5 .letters {
  display: inline-block;
  opacity: 0;
}
</style>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	
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



























<center>
<h1 class="ml2">HACKATHON 1.0</h1></center>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script>// Wrap every letter in a span
var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml2 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 950,
    delay: (el, i) => 70*i
  }).add({
    targets: '.ml2',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
  
  
  
 
  </script>
  
						<BR>

<div id="a">
<br><center>
				<body><h1 class="ml5">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <span class="letters letters-left"><b>-: Problem </b></span>
    
    <span class="letters letters-right"><b>Statements :-</b></span>
    <span class="line line2"></span>
  </span>
</h1>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
		<script> anime.timeline({loop: true})
  .add({
    targets: '.ml5 .line',
    opacity: [0.5,1],
    scaleX: [0, 1],
    easing: "easeInOutExpo",
    duration: 700
  }).add({
    targets: '.ml5 .line',
    duration: 600,
    easing: "easeOutExpo",
    translateY: (el, i) => (-0.625 + 0.625*2*i) + "em"
  }).add({
    targets: '.ml5 .ampersand',
    opacity: [0,1],
    scaleY: [0.5, 1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=600'
  }).add({
    targets: '.ml5 .letters-left',
    opacity: [0,1],
    translateX: ["0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=300'
  }).add({
    targets: '.ml5 .letters-right',
    opacity: [0,1],
    translateX: ["-0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=600'
  }).add({
    targets: '.ml5',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });</script>		</body>
				<?php
include("db_conection.php");
 ?><html><center><b><?php
   
  $check_user="select * from prob ";
  $run=mysqli_query($link,$check_user);
  
  
  if(mysqli_num_rows($run)>0){ 
$query2="select ps from prob where id='0'";
		  $result2=mysqli_query($link,$query2);
		  $data2=mysqli_fetch_assoc($result2);
		  $code=$data2['ps'];		
		$part_id=$code;
		$msg2=" $part_id ";
		echo "$msg2"; echo'<br>';
		while($row=mysqli_fetch_array($result2))//while look to fetch the result and store in a array $row.
        {
			$part_id=$row[0];
			echo $part_id; ?><html><br><?php
  }}
	else{
		echo "Problem Statements will be revealed on 10-jul-21"; 
  print ' at 06:30PM';
  
	}
  ?></b></center><br></div><hr class="new">
                 
<div class="content">			
  <body>
<div class="container">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/a.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>4</h3>
          <p>Hackathon is fun!!</p>
        </div>
      </div>

      <div class="item">
        <img src="img/b.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>3</h3>
          <p>Hackwithin 48hrs</p>
        </div>
      </div>
    
      
	 
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div></div><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: red;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: green;
  text-align: center;
  cursor: pointer;
  width: 30%;
}

.button:hover {
  background-color: grey;
}
#b {
   border-radius: 30px 30px;
  background-color: #F2F3F4 ;
  padding: 20px 30px;
}

</style>
</head>
<body>
<div class="about">
<h2>BE READY TO EXPLORE YOURSELF TO REACH HIGH</h2>
<p>Teams can build Web, Mobile or Desktop applications...</p></div>
<br>
<div id="b"><form action="ss.php" method="post">
<div class="row">
  <div class="column">
    <div class="card">
      <img src="img/i.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2><B>HACKORANK 1.0</B></h2>
        <b><p class="title">GM INSTITUTE OF TECHNOLOGY</p>
        <p>Problem Statement will be released on the day of Hackathon<br>
		and team has to choose one and work on it for 48 hours.</p>
        <p>hackorank@example.com</p></b>
		<input type="hidden" name="pwd" value="hackathon1">
        <p><input class="button" type="submit" name="hackathon" value="REGISTER" ><br><br></p>
      </div>
    </div>
  </div>
</form><form action="ss.php" method="post">
  <div class="column">
    <div class="card">
      <img src="img/i.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2><B>HACKATHON 2.0</B></h2>
        <b><p class="title">JAIN INSTITUTE OF TECHNOLOGY</p>
        <p>Problem Statement will be released on the day of Hackathon<br>
		and team has to choose one and work on it for 36 hours.</p>
        <p>hackathon@example.com</p></b>
		<input type="hidden" name="pwd" value="hackathon2">
        <p><input class="button" type="submit" name="hackathon2" value="REGISTER" ><br><br></p>
      </div>
    </div>
  </div>
  </form><form action="ss.php" method="post">
  <div class="column">
    <div class="card">
      <img src="img/i.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2><B>HACKERTEAM 3.O</B></h2>
       <b> <p class="title">HACKATHON ACADEMY</p>
        <p>Problem Statement will be released on the day of Hackathon<br>
		and team has to choose one and work on it for 20 hours.</p>
        <p>hackerteam@example.com</p></b>
		<input type="hidden" name="pwd" value="hackathon">
        <p><input class="button" type="submit" name="hackathon1" value="REGISTER" ><br><br></p>
      </div>
    </div>
  </div>
</div>
</div></form>
</body>
</html>

<div class='about'>	<hr class="new">				
<h1>NOTE: </h1>
<h3>MAXIMUM 5 members in each team of the same college.</h3>
<h3>Teams can build Web, Mobile or Desktop applications.</h3>
<h3>Problem Statement will be released on the day of Hackathon and team has to choose one 
	and work on it for 48 hours. </h3>
<h1>ENTRY FEE:</h1>
<h3>250rs per Team </h3>
<br></div><hr class="new">
<br><br>
					
					
       	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Sticky Kit -->
	<script src="js/sticky-kit.min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>
  
<script>
window.onscroll = function() {myFunction()};data:image/pjpeg;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQH/2wBDAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQH/wAARCABAAEADASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD+riiiiv1A5wooooAKKKKACiiigAooooAK4vx78Sfh58K/D83iz4nePPBvw68L28iwz+I/HXibRfCehxTOrNHC+q69e2Fis0io5jhM/mSBW2K2DXZO6xo0jsERFZ3djhVVQSzMTwAoBJJ4AGTX8wf7GnwY0f8A4LIfHb44/tm/tX3GteNPgN8NviNqHwt/Z4+Bh1nVdK8I6ZaWVpYa9JPrdvpd3Y3Tva+H9W8J3+rpaS2x8WeJNXv5takbSNIstEk7cJhYVoV69epKlhsNGDqShBTqTnVly06VKLlCLnNqTblJRjGMpO+iYfvn8N/2vf2VfjBrkXhf4WftH/BH4geJ7hpBbeGvCfxO8Ha14iu/KRpZGs9DstXl1S7jSNHdpba0ljCIzF8KSPouvyr8G/s1f8Ek9B+L3w08Z/CsfsyeEPjH4F8X2cngNvhv8WPDWka7ceJbkzaJDok3hjR/FxtfEt1qT376amm3+j39+93LGlkYr0RsP1UrPEwownH2CxKi43axNOMJ3u/h5G1KNrWlo73VrJNgUUUVzAFFFFAEc0Uc8UsEyCSGaN4pY2GVeORSjow9GUlT7Gv5fv8Agnb8d/CX/BKD4vftC/sG/tfX9z8LvCutfE29+KHwO+Leu6ffHwT4x0bVLCw8Mi7utatbWeKxtda8P+GvDN3aalIDpWl61Z+JvD+v3ulatZQW1z/ULXmPxS+Cvwf+OGiQ+G/jH8L/AAD8UdCtpXuLPS/H3hPQ/FVrYXMiqj3enJrVleHTrxlRV+12Jt7nCqBKMDHdhMVCjDEYevTlUw+JVPnVOShVhOjJyp1acnGUbxvKMoyVpRk1dNJgfyiftRaJ/wAE6tH/AG8f+CaH/DCd/wDDfVNf1X9rDwlq/wAZbz4b+LfEnjO0m+2fFb4PT+D5dR1LVNZ1vRoZ5Ll/GMkdpo9zFPHmY6hAkf2Gv7Ca+d/hV+yN+y58DdT/ALc+EH7Pfwe+HWvhXjHiLwr8P/DWl+JFikQxyQr4hh07+2lgdGZWgW+ELBnyh3Nn6Iq8fjY4qOFhD6xJYanOn7XE1FUrVOerKpeTS0Uebkiry91RXQAooorzgCiiigAooooAKKKKACiiigD/2Q==

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>


</body>

</html>
