<?php
include("admin_header.php");
?>
<!DOCTYPE html>
<head>
<title>Mallika</title>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <link rel="stylesheet" href="fest/css/bootstrap.css">
  
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
  background-color: #111;
}
.about{

  padding:20px;
}
body {margin: 0;}
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
<body>
<br>
<div id="a">

  
 <center> <h2><B>TOTAL REGISTRATIONS: <?php 
						
						        include("db_conection.php");
                                $view_data="select count(name) as total from info ";//select query for viewing users.
                                $run=mysqli_query($link,$view_data);//here run the sql query.
						         $data=mysqli_fetch_assoc($run);
								 $view=$data;
								 echo $view['total'];
								 ?></B></h2></center>
  
  <center><h1 align="center">INFORMATION SCIENCE</h1>
						<h2>Registrations: <?php 
						
						        include("db_conection.php");
                                $view_data="select count(name) as total from info where branch='IS' ";//select query for viewing users.
                                $run=mysqli_query($link,$view_data);//here run the sql query.
						         $data=mysqli_fetch_assoc($run);
								 $view=$data;
								 echo $view['total'];
								 ?></h2></center>
						<thead>
<br>

						<br><br>
		<table>					<tr>
							    
								<th>PARTICIPANT ID</th>
								<th>NAME</th>
								<th>USN</th>
								<th>BRANCH</th>
								<th>SEM</th>
								<th>PLACE SECURED</TH>
								<th>SCORE</th>
								
							</tr>
						</div></thead>
						</html>
<?php

include("db_conection.php");

  $query="select * from info";
        $run=mysqli_query($link,$query);
        $row=mysqli_fetch_array($run);
       
	   $view_data="select part_id,name,usn,branch,sem,place,score from info where branch='IS' order by score desc";//select query for viewing users.
        $run=mysqli_query($link,$view_data);
		 while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
			$part_id=$row[0];
            $name=$row[1];
            $usn=$row[2];
			$branch=$row[3];
            $sem=$row[4];
			$place=$row[5];
			$score=$row[6];
        ?>
							<tr>
							<!--here showing results in the table -->
							    
								<td><?php echo $part_id;  ?></td>
								<td><?php echo $name;  ?></td>
								<td><?php echo $usn;  ?></td>
								<td><?php echo $branch;  ?></td>
								<td><?php echo $sem;  ?></td>
								<td><?php echo $place; ?></td>
								<td><?php echo $score;  ?></td>
							</tr>
							

        <?php } ?>

				</table><br><br>
				
				
				
				<center><h1 align="center">COMPUTER SCIENCE</h1>
						<h2>Registrations: <?php 
						
						        include("db_conection.php");
                                $view_data="select count(name) as total from info where branch='CS' ";//select query for viewing users.
                                $run=mysqli_query($link,$view_data);//here run the sql query.
						         $data=mysqli_fetch_assoc($run);
								 $view=$data;
								 echo $view['total'];
								 ?></h2></center>
						<thead>
<br>

						<br><br>
		<table>					<tr>
							    
								<th>PARTICIPANT ID</th>
								<th>NAME</th>
								<th>USN</th>
								<th>BRANCH</th>
								<th>SEM</th>
								<th>PLACE SECURED</TH>
								<th>SCORE</th>
								
							</tr>
						</div></thead>
						</html>
<?php

include("db_conection.php");

  $query="select * from info";
        $run=mysqli_query($link,$query);
        $row=mysqli_fetch_array($run);
       
	   $view_data="select part_id,name,usn,branch,sem,place,score from info where branch='CS' order by score desc";//select query for viewing users.
        $run=mysqli_query($link,$view_data);
		 while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
			$part_id=$row[0];
            $name=$row[1];
            $usn=$row[2];
			$branch=$row[3];
            $sem=$row[4];
			$place=$row[5];
			$score=$row[6];
        ?>
							<tr>
							<!--here showing results in the table -->
							    
								<td><?php echo $part_id;  ?></td>
								<td><?php echo $name;  ?></td>
								<td><?php echo $usn;  ?></td>
								<td><?php echo $branch;  ?></td>
								<td><?php echo $sem;  ?></td>
								<td><?php echo $place; ?></td>
								<td><?php echo $score;  ?></td>
							</tr>
							

        <?php } ?>

				</table><br><br>
				
				
				<center><h1 align="center">BIO TECHNOLOGY</h1>
						<h2>Registrations: <?php 
						
						        include("db_conection.php");
                                $view_data="select count(name) as total from info where branch='BT' ";//select query for viewing users.
                                $run=mysqli_query($link,$view_data);//here run the sql query.
						         $data=mysqli_fetch_assoc($run);
								 $view=$data;
								 echo $view['total'];
								 ?></h2></center>
						<thead>
<br>

						<br><br>
		<table>					<tr>
							    
								<th>PARTICIPANT ID</th>
								<th>NAME</th>
								<th>USN</th>
								<th>BRANCH</th>
								<th>SEM</th>
								<th>PLACE SECURED</TH>
								<th>SCORE</th>
								
							</tr>
						</div></thead>
						</html>
<?php

include("db_conection.php");

  $query="select * from info";
        $run=mysqli_query($link,$query);
        $row=mysqli_fetch_array($run);
       
	   $view_data="select part_id,name,usn,branch,sem,place,score from info where branch='BT' order by score desc";//select query for viewing users.
        $run=mysqli_query($link,$view_data);
		 while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
			$part_id=$row[0];
            $name=$row[1];
            $usn=$row[2];
			$branch=$row[3];
            $sem=$row[4];
			$place=$row[5];
			$score=$row[6];
        ?>
							<tr>
							<!--here showing results in the table -->
							    
								<td><?php echo $part_id;  ?></td>
								<td><?php echo $name;  ?></td>
								<td><?php echo $usn;  ?></td>
								<td><?php echo $branch;  ?></td>
								<td><?php echo $sem;  ?></td>
								<td><?php echo $place; ?></td>
								<td><?php echo $score;  ?></td>
							</tr>
							

        <?php } ?>

				</table><br><br>
				
				
				<center><h1 align="center">CIVIL ENGINEERING</h1>
						<h2>Registrations: <?php 
						
						        include("db_conection.php");
                                $view_data="select count(name) as total from info where branch='CIVIL' ";//select query for viewing users.
                                $run=mysqli_query($link,$view_data);//here run the sql query.
						         $data=mysqli_fetch_assoc($run);
								 $view=$data;
								 echo $view['total'];
								 ?></h2></center>
						<thead>
<br>

						<br><br>
		<table>					<tr>
							    
								<th>PARTICIPANT ID</th>
								<th>NAME</th>
								<th>USN</th>
								<th>BRANCH</th>
								<th>SEM</th>
								<th>PLACE SECURED</TH>
								<th>SCORE</th>
								
							</tr>
						</div></thead>
						</html>
<?php

include("db_conection.php");

  $query="select * from info";
        $run=mysqli_query($link,$query);
        $row=mysqli_fetch_array($run);
       
	   $view_data="select part_id,name,usn,branch,sem,place,score from info where branch='CIVIL' order by score desc";//select query for viewing users.
        $run=mysqli_query($link,$view_data);
		 while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
			$part_id=$row[0];
            $name=$row[1];
            $usn=$row[2];
			$branch=$row[3];
            $sem=$row[4];
			$place=$row[5];
			$score=$row[6];
        ?>
							<tr>
							<!--here showing results in the table -->
							    
								<td><?php echo $part_id;  ?></td>
								<td><?php echo $name;  ?></td>
								<td><?php echo $usn;  ?></td>
								<td><?php echo $branch;  ?></td>
								<td><?php echo $sem;  ?></td>
								<td><?php echo $place; ?></td>
								<td><?php echo $score;  ?></td>
							</tr>
							

        <?php } ?>

				</table><br><br>
				
				
				
				<center><h1 align="center">ELECTRONICS & COMMUNICATION</h1>
						<h2>Registrations: <?php 
						
						        include("db_conection.php");
                                $view_data="select count(name) as total from info where branch='EC' ";//select query for viewing users.
                                $run=mysqli_query($link,$view_data);//here run the sql query.
						         $data=mysqli_fetch_assoc($run);
								 $view=$data;
								 echo $view['total'];
								 ?></h2></center>
						<thead>
<br>

						<br><br>
		<table>					<tr>
							    
								<th>PARTICIPANT ID</th>
								<th>NAME</th>
								<th>USN</th>
								<th>BRANCH</th>
								<th>SEM</th>
								<th>PLACE SECURED</TH>
								<th>SCORE</th>
								
							</tr>
						</div></thead>
						</html>
<?php

include("db_conection.php");

  $query="select * from info";
        $run=mysqli_query($link,$query);
        $row=mysqli_fetch_array($run);
       
	   $view_data="select part_id,name,usn,branch,sem,place,score from info where branch='EC' order by score desc";//select query for viewing users.
        $run=mysqli_query($link,$view_data);
		 while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
			$part_id=$row[0];
            $name=$row[1];
            $usn=$row[2];
			$branch=$row[3];
            $sem=$row[4];
			$place=$row[5];
			$score=$row[6];
        ?>
							<tr>
							<!--here showing results in the table -->
							    
								<td><?php echo $part_id;  ?></td>
								<td><?php echo $name;  ?></td>
								<td><?php echo $usn;  ?></td>
								<td><?php echo $branch;  ?></td>
								<td><?php echo $sem;  ?></td>
								<td><?php echo $place; ?></td>
								<td><?php echo $score;  ?></td>
							</tr>
							

        <?php } ?>

				</table><br><br>
				
				<center><h1 align="center">MECHANICAL ENGINEERING</h1>
						<h2>Registrations: <?php 
						
						        include("db_conection.php");
                                $view_data="select count(name) as total from info where branch='MECH' ";//select query for viewing users.
                                $run=mysqli_query($link,$view_data);//here run the sql query.
						         $data=mysqli_fetch_assoc($run);
								 $view=$data;
								 echo $view['total'];
								 ?></h2></center>
						<thead>
<br>

						<br><br>
		<table>					<tr>
							    
								<th>PARTICIPANT ID</th>
								<th>NAME</th>
								<th>USN</th>
								<th>BRANCH</th>
								<th>SEM</th>
								<th>PLACE SECURED</TH>
								<th>SCORE</th>
								
							</tr>
						</div></thead>
						</html>
<?php

include("db_conection.php");

  $query="select * from info";
        $run=mysqli_query($link,$query);
        $row=mysqli_fetch_array($run);
       
	   $view_data="select part_id,name,usn,branch,sem,place,score from info where branch='MECH' order by score desc";//select query for viewing users.
        $run=mysqli_query($link,$view_data);
		 while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
			$part_id=$row[0];
            $name=$row[1];
            $usn=$row[2];
			$branch=$row[3];
            $sem=$row[4];
			$place=$row[5];
			$score=$row[6];
        ?>
							<tr>
							<!--here showing results in the table -->
							    
								<td><?php echo $part_id;  ?></td>
								<td><?php echo $name;  ?></td>
								<td><?php echo $usn;  ?></td>
								<td><?php echo $branch;  ?></td>
								<td><?php echo $sem;  ?></td>
								<td><?php echo $place; ?></td>
								<td><?php echo $score;  ?></td>
							</tr>
							

        <?php } ?>

				</table><br><br>
				<center><h1 align="center">MBA</h1>
						<h2>Registrations: <?php 
						
						        include("db_conection.php");
                                $view_data="select count(name) as total from info where branch='MBA' ";//select query for viewing users.
                                $run=mysqli_query($link,$view_data);//here run the sql query.
						         $data=mysqli_fetch_assoc($run);
								 $view=$data;
								 echo $view['total'];
								 ?></h2></center>
						<thead>
<br>

						<br><br>
		<table>					<tr>
							    
								<th>PARTICIPANT ID</th>
								<th>NAME</th>
								<th>USN</th>
								<th>BRANCH</th>
								<th>SEM</th>
								<th>PLACE SECURED</TH>
								<th>SCORE</th>
								
							</tr>
						</div></thead>
						</html>
<?php

include("db_conection.php");

  $query="select * from info";
        $run=mysqli_query($link,$query);
        $row=mysqli_fetch_array($run);
       
	   $view_data="select part_id,name,usn,branch,sem,place,score from info where branch='MBA' order by score desc";//select query for viewing users.
        $run=mysqli_query($link,$view_data);
		 while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
			$part_id=$row[0];
            $name=$row[1];
            $usn=$row[2];
			$branch=$row[3];
            $sem=$row[4];
			$place=$row[5];
			$score=$row[6];
        ?>
							<tr>
							<!--here showing results in the table -->
							    
								<td><?php echo $part_id;  ?></td>
								<td><?php echo $name;  ?></td>
								<td><?php echo $usn;  ?></td>
								<td><?php echo $branch;  ?></td>
								<td><?php echo $sem;  ?></td>
								<td><?php echo $place; ?></td>
								<td><?php echo $score;  ?></td>
							</tr>
							

        <?php } ?>

				</table><br><br>
			

<br><br></div>
					
<?php
include("user_footer.php");
?>
