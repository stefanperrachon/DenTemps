<?php

	//database settings
	require("../../connect.php");
	
	$notes = mysql_real_escape_string($_POST['notes']);
	$id = $_POST['id'];
	$name = mysql_real_escape_string($_POST['name']);
	$office_location = mysql_real_escape_string($_POST['office_location']);
	$duration = mysql_real_escape_string($_POST['duration']);
 
  $q = mysql_query("UPDATE dds_perm_need SET notes ='$notes', name = '$name', office_location = '$office_location', duration = '$duration'  WHERE id='$id'");
	

?>