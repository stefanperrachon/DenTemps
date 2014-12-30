<!DOCTYPE html>
<html lang="en">


<body>
<div id="info_php">
<?php
require("../connect.php");

if (isset($_POST['id'])){
	$id = $_POST['id'];


	
	$query = mysql_query("select * from fd_perm_need WHERE id = '$id'"); // change table name for duplicate
	while($row = mysql_fetch_assoc($query)){ 
	
	echo" Please fill out all fields to request details on the assignment: <br>";
	echo '<div id="need_loc_date">';
	echo  $row['office_location'];
	echo"</div>";
	echo" for ";
	echo '<div id="need_loc_date">';
	echo $row['duration'];  //change this if it is a perm req
	echo"</div>";
	echo"<br>";
	echo"We will contact you if assignment is still available.";
	echo"<br> ";
	
	}
	

	} else{
	echo"not working";
}

?>

</div>

</body>
</html>