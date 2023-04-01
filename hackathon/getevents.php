<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}

select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}




</style>
</head>
<body>

<?php
$q = strval($_GET['q']);

$con = mysqli_connect('localhost',"root","","event");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
echo $q;
mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM event_master WHERE event_type = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>EVENTS</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
	echo "<tr>";

  echo "<option>" . $row['events'] . "</option>";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>

</body>
</html>