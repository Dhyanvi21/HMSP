<?php

include("user_header.php");
?>
<html>
<head><title></title>
<style>

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
</style></head>
<th colspan="4" align="center" > 

		<br><center>	<h1>REMOVE PARTICIPANT</h1>
		</th>
	</tr><body>
	<form action="" method="POST">
	<tr>
		<td  align="center">
			<select name="part_id">
	  <option>PARTICIPANT ID</option>
	  				</thead>
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
	  </select>
		</td>
		
		<td ><br><br>
		<input type='submit'  name="search" value='DELETE'><br><br>
		</td>
	</tr>	
	</table></center> 	
<?php

	include ("db_conection.php");
	
	
	if(isset($_POST['search']))
	{
		$part_id=$_POST['part_id'];
		
		$sql = "delete from info where part_id='$part_id'";
		$result = $link-> query($sql);
		
		echo "Record updated";
	header("Location: part_stable.php");
	}
	?>
	</form>


</body>
</html>
<?php
include("user_footer.php");
?>

