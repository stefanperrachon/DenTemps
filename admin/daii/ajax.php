<?php

	//database settings
	require("../../connect.php");
	
	$notes = mysql_real_escape_string($_POST['notes']);
	$id = $_POST['id'];
	$name = mysql_real_escape_string($_POST['name']);
	$office_location = $_POST['office_location'];
 
  $q = mysql_query("UPDATE daii_temp_need SET notes ='$notes', name = '$name', office_location = '$office_location' WHERE id='$id'");
	

?>