<?php

include("admin_header.php");
?>
<html><head><style>
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
</style></head>
<br><center><h1 align="center"><?php echo $_SESSION['events']?></h1>
<h2>Registrations: <?php 
						
						        include("db_conection.php");
                                $view_data="select count(name) as total from info where events='".$_SESSION['events']."' ";//select query for viewing users.
                                $run=mysqli_query($link,$view_data);//here run the sql query.
						         $data=mysqli_fetch_assoc($run);
								 $view=$data;
								 echo $view['total'];
								 ?></h2></center>
<table>
						<thead>
							<tr>
							    <th>PARTICIPANT ID</th>
								<th>NAME</th>
								<th>USN</th>
								<th>BRANCH</th>
								<th>SEM</th>
								<th>MOBILE</th>
								
								
							</tr>
						</thead>
						</html>
<?php

include("db_conection.php");
  $events=$_POST['events'];
  $query="select * from coordinator where events='$events'";
        $run=mysqli_query($link,$query);
        $row=mysqli_fetch_array($run);
       $events=$row[3];
	   $_SESSION['events']=$events;
	   $view_data="select part_id,name,usn,branch,sem,mobile from info where events='".$_SESSION['events']."' order by score desc";//select query for viewing users.
        $run=mysqli_query($link,$view_data);
		 while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
			$part_id=$row[0];
            $name=$row[1];
            $usn=$row[2];
			$branch=$row[3];
			$sem=$row[4];
			$mobile=$row[5];
        ?>
							<tr>
							<!--here showing results in the table -->
							    <td><?php echo $part_id;  ?></td>
								<td><?php echo $name;  ?></td>
								<td><?php echo $usn;  ?></td>
								<td><?php echo $branch;  ?></td>
								<td><?php echo $sem;  ?></td>
								<td><?php echo $mobile;  ?></td>
								
								
							</tr>
							

        <?php } ?>

					</table><br><br>
					
<?php
include("user_footer.php");
?>
<br><br>
