<?php
    include("admin_header.php");//redirect to login page to secure the welcome page without login access.
?>
<html>
<head><title></title>
<style>
input[type=text], select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 10%;
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
  padding: 0px 30px;
}
</style></head>
<th colspan="4" align="center" > 

		<br><center>	<h1>REMOVE COORDINATOR</h1>
		</th>
	</tr>
	<body>
	<form action="" method="POST">
	<tr>
		<td>
			<select name="usn">
	  
	  				</thead>
<?php
        include("db_conection.php");
        $view_data="select name from coordinator where category='user'";//select query for viewing users.
        $run=mysqli_query($link,$view_data);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            
            $usn2=$row[0];
			
        ?>
							<tr>
							<!--here showing results in the table -->
								
								<option><?php  echo $usn2;  ?></option>
								
								
							</tr>

        <?php } ?>

					</table>				
	  </select>
		</td>
		
		<td ><BR><br>
		<input type="submit" name="search" value='DELETE'>
		</td>
	</tr>	
	</table></center> 	<br>
<?php

	include ("db_conection.php");
	
	
	if(isset($_POST['search']))
	{
		$name=$_POST['usn'];
		
		$sql = "delete from coordinator where name='$name'";
		$result = $link-> query($sql);
		
		echo"Record updated";
	
	}
	?>
	</form>


</body>
</html>
<?php
include("admin_footer.php");
?>

