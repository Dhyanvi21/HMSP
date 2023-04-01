<!DOCTYPE html>
<head>
<title>Mallika</title>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <link rel="stylesheet" href="delta/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
  width: 100%;
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

#a {
  border-radius: 100px 100px;
  background-color: #f2f2f2;
  padding: 0px 100px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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

<div class="w3-top">
<div class="w3-bar">
<ul>
  <li><a href="mainpage.php"><i class="fa fa-fw fa-home" class="w3-bar-item w3-button w3-padding-large"></i>HOME</a></li>
  <li><a href="ss.php"><i class="fa fa-fw fa-send"></i>REGISTRATION</a></li>
  <li><a href="login.php"><i class="fa fa-fw fa-user"></i>COORDINATOR LOGIN</a></li>
  <li><a href="results_data.php"><i class="fa fa-fw fa-search"></i>RESULTS</a></li>
  <li><a href="contact.php"><i class="fa fa-fw fa-envelope"></i>CONTACT US</a></li>
  <li style="float:right"><a href="about.html">ABOUT</a></li></ul></div></div><br><br>
  </head>
<body><!--<center><img src="img/111.jpg"></center><br>-->
<h1 align="center"><B>HACKATHON</B></h1>

  <br>
  
<div id="a"><br>

<table>
						<thead>
							<tr><center>
							<th><center>PARTICIPANT ID</center></th>
							<th><center>TEAM NAME</center></th>
							    
								
								
								<th><center>COLLEGE</center></th>
								
								<th><center>PLACE SECURED</center></th>
								<th><center>SCORE</center></th>
								
								
							</tr>
						</thead>
						</html>
<?php

include("db_conection.php");
  $events=$_POST['events'];
 ?><center><h2><b><?php echo "$events"; echo'<br>';?></b><h2></center><?php
  $query="select * from coordinator where events='$events'";
        $run=mysqli_query($link,$query);
		
        $row=mysqli_fetch_array($run);
       $events=$row[3];
        $_SESSION['events']=$events;
	   $view_data="select part_id,team_name,name,usn,branch,place,score from results where events='".$_SESSION['events']."' order by score desc";//select query for viewing users.
        $run=mysqli_query($link,$view_data);
		if(mysqli_num_rows($run)>0){
		 while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
			$part_id=$row[0];
			$team=$row[1];
			
			
            $name=$row[2];
            $usn=$row[3];
			$branch=$row[4];
			$place=$row[5];
			$score=$row[6];
        ?>
							<tr>
							<!--here showing results in the table -->
							    <td><?php echo $part_id;  ?></td>
								<td><?php echo $team;  ?></td>
								
								
								
								<td><?php echo $usn;  ?></td>
								
								<td><?php echo $place;  ?></td>
								<td><?php echo $score;  ?></td>
								
								
							</tr>
						<script type="module">
  import confetti from 'https://cdn.skypack.dev/canvas-confetti';
  confetti();
</script>	

        <?php }}else{
		?><center><b> <?php echo "Results Not Declared yet....!!!"; 
		print ' ';}?><b></center><br>
  
	 

					</table><br></div>
		