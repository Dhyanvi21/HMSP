<?php
include("admin_header.php");
?>
<!DOCTYPE html>
<head>
<title>Mallika</title>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <link rel="stylesheet" href="fest/css/bootstrap.css">

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
  background-color: #111;
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
  padding: 0px 300px;
}
</style>
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
</head> 
</body>
</style></head>
<table>
						<br><center><h1 align="center">BRANCH POINTS</h1>
						</center>
						<div id="a"><thead>
							<tr>
							    
								
								<th><CENTER>BRANCH</CENTER></th>
								<th><CENTER>SCORE</CENTER></th>
								
							</tr>
						</thead>
						</html>
<?php

include("db_conection.php");

 
	   $view_data="SELECT team_name,sum(score) FROM team_score group by branch ORDER BY sum(score) DESC";//select query for viewing users.
        $run=mysqli_query($link,$view_data);
		 while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            
			$branch=$row[0];
           
			$score=$row[1];
        ?>
							<tr>
							<!--here showing results in the table -->
							    
								
								<td><?php echo $branch;  ?></td>
								<td><?php echo $score;  ?></td>
							</tr>
							

        <?php } ?>

					</table><br><br></div></div>
					
<?php
include("user_footer.php");
?>

   