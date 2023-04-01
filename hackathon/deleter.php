<html>
<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
  confirm("Press a button!");
}
</script>
</html>
<?php

	include ("db_conection.php");
		$sql = "delete from info";
		$result = $link-> query($sql);
		$sql2="delete from results";
		$result2=$link->query($sql2);
		$sql3="delete from branch_score";
		$result3=$link->query($sql3);
		$sql4="delete from event_master";
		$result4=$link->query($sql4);
		echo "Record updated";
	header("Location: admin_menu.php");
	
	?>