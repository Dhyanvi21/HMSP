<?php
include("admin_header.php");
?>
<html><head><style>
 #navbar {
  overflow: hidden;
  background-color: #33;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
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
  width: 100%;
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

#a {
  border-radius: 100px 100px;
  background-color: #f2f2f2;
  padding: 0px 300px;
}
</style></head>
						
			<body>	                                   
                        <table>
						
               <br><center><h1>EVENT REGISTRATIONS</h1>
			   <h2>Total Registrations: <?php 
						
						        include("db_conection.php");
                                $view_data="select count(name) as total from info";//select query for viewing users.
                                $run=mysqli_query($link,$view_data);//here run the sql query.
						         $data=mysqli_fetch_assoc($run);
								 $view=$data;
								 echo $view['total'];
	?></h2>
	
	
	
	<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("events").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("events").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getevents.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

<div id="a">  
			   <form action="reg_stable.php" method="POST">
	

  <select  onchange="showUser(this.value)">
  <option value="">Select Event</option>
  <option value="HACKATHON">HACKATHON</option>
  
  
  </select><br/><br/>
  <select id="events" name="events"><b>Events info will be listed here...</b></select>
<center>	<input type='submit' name='search' value='search'></center><br><br>
	</form>
	  				</thead></div>
						</body><br><br>
						</html>
				
<?php
include("admin_footer.php");
?>