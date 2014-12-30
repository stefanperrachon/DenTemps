<!DOCTYPE html>
<html lang="en">


<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/ui-lightness/jquery-ui-1.10.3.custom.css">
	<link rel="stylesheet" type="text/css" href="../../css/Lightbox_css.css">

	<link rel="stylesheet" type="text/css" href="../../css/form.css"> <!--version 6-->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> <!--version 6-->
</head>
<body>


<div id="back_form">
	<div id="pos">Perm Needs for FD</div>
	<form id="jquery-submit-perm">  <!--change this for duplicate-->
	Schedule: <input type="text" id ="durationfield" name="duration">   <!--NEED TO CHANGE THIS FOR PERM SINCE DATE NOT NEEDED-->
	Office Location(city): <input type="text" id ="locationfield" name="office_location">
	Name of Office(Temps won't see): <input type="text" id ="namefield" name="name">
	Notes/Benefits: <input type="text" id ="notesfield" name="notes">    <!--change this for duplicate depending perm or temp-->
	<input class="sub_button" type="submit" value="Submit">
	</form>
	
</div>


<div id="link_resize">
				<div class="temp_links_admin"><a class="a_class" href="../daii/index.php">DAII Temp</a></div>
				<div class="temp_links_admin"  ><a class="a_class"  href="../daii/perm_form.php">DAII Perm</a></div>
				<div class="temp_links_admin"><a class="a_class" href="../dh/index.php">DH Temp</a></div>
				<div class="temp_links_admin"><a class="a_class" href="../dh/perm_form.php">DH Perm</a></div>
				<div class="temp_links_admin"><a class="a_class" href="../dds/index.php">DDS Temp</a></div>
				<div class="temp_links_admin"><a class="a_class" href="../dds/perm_form.php">DDS Perm</a></div>
				<div class="temp_links_admin" id="temp_pos_switch" class="temp_links"><a id="present_link" href="perm_form.php">FD Perm</a></div>
			</div>
	
			<div id="bottom_border"></div>	

<div id="perm_needs"> </div>    <!--change this for duplicate-->


<?php
require("../../connect.php");


    $id = $_POST["id_name"];
   
   mysql_query("
   UPDATE fd_perm_need 
   SET active ='N' 
   WHERE id = '$id'");   //change this for duplicate
	
?>

<script type="text/javascript" src="../../js/jquery.js"></script>
<script type="text/javascript" src="../../js/jquery-submit-perm.js"></script>   <!--change this for duplicate-->
<script type="text/javascript" src="../../js/preload_perm.js"></script>     <!--change this for duplicate-->
<script type="text/javascript" src="../../js/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="../../js/auto_duration.js"></script> 
<script type="text/javascript" src="../../js/office_name.js"></script> 
<script type="text/javascript" src="../../js/Cities.js"></script> 

</body>
</html>