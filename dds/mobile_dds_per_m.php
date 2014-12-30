<?php	

				$ip = $_SERVER['REMOTE_ADDR'];
				include ("../admin/no_thanks.php");
				
				if (!in_array ($ip, $deny)) {
			   header("location: mobile_dds_perm.php");
			   exit();}
			   
			   ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="../css/show_temp_mobile.css">
	
	
	<meta name="viewport" content="initial-scale=1">
	
</head>
<body>
<div id="back_form">
	<h1>DenTemps<div id="mobile_head">mobile</div></h1>
		
	</div>
	
<h2>Permanent opportunities for Dentists <br>
	<a id="mob_link_itself" href ="mobile_dds_temp.php">click here for Temporary assignments</a> 
</h2>

<p id="para_temp">Please click the "request" link for details on each assignment.</p>
<strong><p id="para_exp">If you want to book an assignment ASAP, please call us and we can book you over the phone!</p></strong>




<div id="tab_div">

<table id='table1'>
																<tr>
																		<th>Location:</th>
																		<th>Schedule:</th>
																		<th></th>
																		<th></th>
																	</tr>
																	</table>
																	</div>
																	
										<div id= "no_assign">There are no assignments at this time but please check back soon!</div>	

		
		<p id="para_exp">Feel free to call us with any questions/concerns at 919-461-9655. </p>

<div id="link_resize">
		<div class="temp_links"><a href="http://dentempsnc.com">DenTempsnc.com</a></div>
		<div class="temp_links"><a href="http://dentempsnc.com/timesheet/timesheet.php">Timesheet</a></div>
		<div class="temp_links"><a href="http://dentempsnc.com/mobile/dds_paperwork.html">List of Paperwork</a></div>
		<div class="temp_links"><a href="http://www.ncdentalboard.org/">NC Dental Board</a></div>

		</div>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/lightbox_jquery_perm_mobile.js"></script>
<script type="text/javascript" src="../js/temp_request_perm_mobile.js"></script>

</body>
</html>mobile_dds_perm