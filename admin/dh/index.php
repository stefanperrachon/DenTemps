<!DOCTYPE html>
<html lang="en">


<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/ui-lightness/jquery-ui-1.10.3.custom.css">
	<link rel="stylesheet" type="text/css" href="../../css/Lightbox_css.css">
	<link rel="stylesheet" type="text/css" href="../../css/form.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> <!--version 6-->
</head>
<body>


<div id="back_form">
	<div id="pos">Temp Needs for DH</div>
	<form id="jquery-submit">
	Date: <input type="text" id ="datefield" name="date">
	Office Location(city): <input type="text" id ="locationfield" name="office_location">
	Name of Office(Temps won't see): <input type="text" id ="namefield" name="name">
	Notes: <input type="text" id ="notesfield" name="notes">
	<input class="sub_button" type="submit" value="Submit">
	</form>
	
</div>

<div id="link_resize">
				<div class="temp_links_admin"><a class="a_class" href="../daii/index.php">DAII Temp</a></div>
				<div class="temp_links_admin"><a class="a_class" href="../daii/perm_form.php">DAII Perm</a></div>
				<div class="temp_links_admin" id="temp_pos_switch" class="temp_links"><a id="present_link" href="index.php">DH Temp</a></div>
				<div class="temp_links_admin"><a class="a_class" href="perm_form.php">DH Perm</a></div>
				<div class="temp_links_admin"><a class="a_class" href="../dds/index.php">DDS Temp</a></div>
				<div class="temp_links_admin"><a class="a_class" href="../dds/perm_form.php">DDS Perm</a></div>
				<div class="temp_links_admin"><a class="a_class" href="../fd/perm_form.php">FD Perm</a></div>
			</div>
	
				<div id="bottom_border"></div>	

<div id="needs"> </div>


<?php
require("../../connect.php");


    $id = $_POST["id_name"];
   
   mysql_query("
   UPDATE dh_temp_need 
   SET active='N'
   WHERE id = '$id'");
	
?>

<script type="text/javascript" src="../../js/jquery.js"></script>
<script type="text/javascript" src="../../js/jquery-submit.js"></script>
<script type="text/javascript" src="../../js/preload.js"></script>
<script type="text/javascript" src="../../js/delete_js.js"></script>
<script type="text/javascript" src="../../js/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="../../js/ui.js"></script>
<script type="text/javascript" src="../../js/office_name.js"></script> 
<script type="text/javascript" src="../../js/Cities.js"></script> 

</body>
</html>