<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="../../css/form.css">
</head>
<body>
<div id="go_back_link">
<h1><a  href="index.php"><--Go back to Needs</a></h1>
</div>
<div id="replies_dec">
<div id="data_style">
<?php

require("../../connect.php");

$id = $_POST['job_name'];

   mysql_query("
   UPDATE daii_req_temp
   SET status='seen'
   WHERE need_id = '$id'");

   echo"<div id=\"need_style\">";
	$query = mysql_query("select * from daii_temp_need WHERE id = '$id'"); // change table name for duplicate
	while($row = mysql_fetch_assoc($query)){ 
	
	echo "<div id=\"office_name\">";
	echo $row['name']."</div><div id=\"need_date\"> ".date('m/d/Y', strtotime($row['date']));
	echo"</div>";
	echo  "<div id=\"replies_loc\">".$row['office_location']."</div>";
	
	
	echo "<div id=\"replies_notes\">".$row['notes']."</div>"; 
	
	}
	echo"</div>";
	echo"<div id=\"replies_style\">";
	$query = mysql_query("select * from daii_req_temp WHERE need_id = '$id' ORDER BY time DESC"); // change table name for duplicate
	while($row = mysql_fetch_assoc($query)){ 
	echo"<div id=\"replies_style_in\">";
	echo"<div id=\"replies_ident\">";
	echo"<div id=\"rep_nam\">".$row['name']."</div>";
	echo"<div>".$row['phone']."</div>";
	echo"<div id=\"rep_email\"><a href=\"mailto:".$row['email']."\">".$row['email']."</a></div>";
	echo"</div>";
	echo"<div id=\"date_time_notes\">";
	echo"<div id=\"dt_ts\">".date( 'm/d/Y g:i A (l)'  , strtotime($row['time']))."</div>";
	echo"<div id=\"notes_rep\">".$row['notes']."</div>";

	echo"</div>";
		echo"</div>";
	}
	echo"</div>";
?>
</div>
</div>

</body>
</html>