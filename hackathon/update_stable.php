<?php

include("user_header.php");
?>
<html><head>
<style>
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
input[type=password], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
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

div {
  border-radius: 100px 100px;
  background-color: #f2f2f2;
  padding: 0px 300px;
}

</style>
</head>

<body> <br>
      <center><h1>UPDATE WINNERS</h1>
   <form action="update_stable.php" method="post">
   
   
   <select name="part_id">
	  <option>PARTICIPANT ID</option>
	  			
        <?php
        include("db_conection.php");
        $view_data="select part_id from info where events='".$_SESSION['events']."'";//select query for viewing users.
        $run=mysqli_query($link,$view_data);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            
            $part_id=$row[0];
			
        ?>
							<tr>
							<!--here showing results in the table -->
								
								<option><?php  echo $part_id;  ?></option>
								
								
							</tr>

        <?php } ?>

					</table>				
	  </select><br><br>
   <select name="place">
	  <option>PLACE SECURED</option>
	  <option>FIRST</option>
	  <option>SECOND</option>
	  <option>NONE</option>
	  </select><br><br>
  <input type="text" name="score" placeholder="SCORE"><br /><br />
    
   <input type="submit" name="update" value="UPDATE"><br><br>
						
						
						</form>
						<body>
						</html>
<?php
if(isset($_POST['update']))
{
	
	$part_id = mysqli_real_escape_string($link, $_POST['part_id']);
	$place = mysqli_real_escape_string($link, $_POST['place']);
	$score = mysqli_real_escape_string($link, $_POST['score']);
    $_SESSION['score']=$score;
	include("db_conection.php");
   
	if($place=="FIRST")
	{ 
       $varify="select * from info where place='FIRST' and events='".$_SESSION["events"]."'";
	   $result=mysqli_query($link,$varify);
	   $count=mysqli_num_rows($result);
	   if($count>0)
	   {
		echo '<script>';
		echo 'alert("FIRST WINNER IS already UPDATED")';
		echo '</script>';
		return;
	   }
    }
	else if($place=="SECOND")
	{ 
       $varify="select * from info where place='SECOND' and events='".$_SESSION["events"]."'";
	   $result=mysqli_query($link,$varify);
	   $count=mysqli_num_rows($result);
	   if($count>0)
	   {
		echo '<script>';
		echo 'alert("SECOND WINNER IS already UPDATED")';
		echo '</script>';
		return;
	   }
    }

   
	$query2="update info set place='$place',score='$score' WHERE part_id='$part_id' AND events='".$_SESSION["events"]."'";
	$run3=mysqli_query($link,$query2);
	$check_user="select part_id,tname,events,event_type,name,usn,branch,place,score from info WHERE part_id='$part_id' and events='".$_SESSION["events"]."' ";
    $run4=mysqli_query($link,$check_user);
	$row=mysqli_fetch_array($run4);
	$part_id=$row[0];
	$team_name=$row[1];
	$events2=$row[2];
	
	$event_type2=$row[3];
	
	$name2=$row[4];
	$usn2=$row[5];
	$branch2=$row[6];
	$place2=$row[7];
	$score2=$row[8];
	 $sql2 ="INSERT INTO team_score (team_name,team_id,score) VALUES ('$part_id','$team_name','$score2')";
	 mysqli_query($link,$sql2);
	 
	$sql = "INSERT INTO results (part_id,team_name,events,event_type,name, usn, branch,place,score) VALUES ('$part_id','$team_name','$events2','$event_type2','$name2', '$usn2', '$branch2','$place2','$score2')";
         mysqli_query($link,$sql) or die ("Error occured because ".mysqli_error);
   
	echo "$part_id"; 
	print 'is updated';
	

}

     ?>
<?php
include("user_footer.php");
?>

   