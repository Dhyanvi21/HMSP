<?php
include("admin_header.php");
?>
<style>input[type=submit] {
  width: 20%;
  background-color: #4CAF50;
  color: white;
  padding: 10px 50px;
  margin: 8px 10;
  border: none;
  border-radius: 4px ;
  cursor: pointer;
}input[type=submit]:hover {
  background-color: #45a049;
}</style>
				<br><center><b>WELCOME TO ADMIN SECTION</b><br><br></center><br>
				<body><CENTER><b>-: <U>REVEAL PROBLEM STATEMENTS :-</U></CENTER></b>
				<form action="admin_menu.php" method="post" >
				<center><textarea  name="msg" rows="4" cols="80" placeholder="WRITE PROBLEM STATEMENTS"></textarea></center>
				<CENTER><input type="submit" name="submit" value="UPLOAD" ></CENTER><br><br>
				</form><br><br></body>
				<?php
include("db_conection.php");
if(isset($_POST['submit']))
{
$ps= mysqli_real_escape_string($link, $_POST['msg']);
	
$sql = "INSERT INTO prob (ps) VALUES ('$ps')";
   mysqli_query($link,$sql) ;
   
} ?><html><center><?php
   
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
		echo "NO Problem Statements"; 
  print ' are Uploaded';
  
	}
  ?></center><br><br></html>
<?php


     ?> 

<?php
include("admin_footer.php");
?>