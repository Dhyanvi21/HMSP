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
      <center><h1>CHANGE PASSWORD</h1>
   <form action="change_pass.php" method="post">
  <input type="text" name="uname" placeholder="USER NAME"><br /><br />
  <input type="text" name="old_pass" placeholder="OLD PASSWORD"><br /><br />
  <input type="text" name="new_pass" placeholder="NEW PASSWORD"><br /><br />
    
   <input type="submit" name="change" value="SUBMIT"><br><br>
						
						
						</form>
						<body>
						</html>
<?php
include("db_conection.php");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 if(isset($_POST['change']))
 {
$user_name = mysqli_real_escape_string($link, $_POST['uname']);	 
$old_pass = mysqli_real_escape_string($link, $_POST['old_pass']);
$new_pass = mysqli_real_escape_string($link, $_POST['new_pass']);

$query="update coordinator set user_pass='$new_pass' where user_name='$user_name' and user_pass='$old_pass' ";
$run=mysqli_query($link,$query);
echo "$new_pass";
echo " is your new password";
	
}

     ?>
<?php
include("user_footer.php");
?>
<html>
<br><br>
</html>