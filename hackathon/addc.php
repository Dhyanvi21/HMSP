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
input[type=text], select {
  width: 70%;
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

div {
  border-radius: 100px 100px;
  background-color: #f2f2f2;
  padding: 0px 400px;
}
</style></head>
<br>
<body>
       <center><h1>ADD COORDINATOR</h1>
   <form action="addc.php" method="post">
   
 <select name="events">    
	 
 <?php
        include("db_conection.php");
        $view_data1="select * from event_master ";
        $run1=mysqli_query($link,$view_data1);

        while($row1=mysqli_fetch_array($run1))
        {
            
            $events=$row1[1];
			
        ?>
							<tr>
							<!--here showing results in the table -->
								
								<option><?php  echo $events;  ?></option>
								
								
							</tr>

        <?php } ?>

					</table>				
	  </select><br><br>
	  <select name="category">
	  <option> USER</option>
	  
	  
	  </select>
	   
	   <input type="text" name="name" placeholder="NAME" required ><br /><br />
	   <input type="text" name="usn" placeholder="USN" required><br /><br />
       <select name="branch">
    <option>Branch</option>
    <option value="IS">IS</option>
    <option value="CS">CS</option>
    <option value="MECH">MECH</option>
    <option value="CIVIL">CIVIL</option>
    <option value="EC">EC</option>
    <option value="BT">BT</option>
    <option value="MBA">MBA</option>
	</select><br /><br />
	<select name="sem">
    <option >SEM</option>
    <option value="2">2</option>
    <option value="4">4</option>
    <option value="6">6</option>
    <option value="8">8</option>
    

 </select><br /><br />
       <input type="text" placeholder="MOBILE NUMBER" name="mobile" pattern="[1-9][0-9]{9}" required><br /><br /> 
	    <input type="text" name="user_name" placeholder="USER NAME" required ><br /><br />
		 <input type="text" name="user_pass" placeholder="PASSWORD" required ><br /><br />
	   <input type="submit" name="submit" value="ADD" >
 
						
					</center>	</form>
						<body><br><br></html>
<?php
include("db_conection.php");
if(isset($_POST['submit']))
{
$events = mysqli_real_escape_string($link, $_POST['events']);
$category = mysqli_real_escape_string($link, $_POST['category']);
$name = mysqli_real_escape_string($link, $_POST['name']);
$usn = mysqli_real_escape_string($link, $_REQUEST['usn']);
$branch = mysqli_real_escape_string($link, $_REQUEST['branch']);
$sem = mysqli_real_escape_string($link, $_REQUEST['sem']);
$mobile = mysqli_real_escape_string($link, $_REQUEST['mobile']);
$user_name=mysqli_real_escape_string($link, $_REQUEST['user_name']);
$user_pass=mysqli_real_escape_string($link, $_REQUEST['user_pass']);
$check_user="select * from coordinator WHERE usn='$usn'";

    $run=mysqli_query($link,$check_user);

    if(mysqli_num_rows($run)>0){     
		echo '<script>';
		echo 'alert("USN already ASSIGNED")';
	echo '</script>';
	}
	ELSE{
$sql = "INSERT INTO coordinator (user_name,user_pass,category,events,name, usn, branch,sem, mobile) VALUES ('$user_name','$user_pass','$category','$events','$name', '$usn', '$branch','$sem','$mobile')";
  ?><center><?php mysqli_query($link,$sql) ;
   echo "$name Assigned as $events Coordinator"; 
  print ' is updated';?>
<?php
}
}
     ?>
<?php
include("user_footer.php");
?>
<br><br>