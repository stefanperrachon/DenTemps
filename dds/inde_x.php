<?php	

				$ip = $_SERVER['REMOTE_ADDR'];
				include ("../admin/no_thanks.php");
				
				if (!in_array ($ip, $deny)) {
			   header("location: index.php");
			   exit();}
			   
			   ?>


<!DOCTYPE html>
<html lang="en">


<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/Lightbox_css.css">
	<link rel="stylesheet" type="text/css" href="../css/show_temp_dds.css">
	
	
</head>
<body>
<div id="back_form">
	<h1>DenTemps</h1>
		<div id="link_resize">
		<div class="temp_links"><a href="http://www.ncdentalboard.org/">NC Dental Board</a></div>
		<div class="temp_links"><a href="http://dentempsnc.com/timesheet/timesheet.php">Timesheet</a></div>
		<div class="temp_links"><a href="http://dentempsnc.com/mobile/dds_paperwork.html">List of Paperwork</a></div>
		<div class="temp_links"><a href="http://dentempsnc.com/index.php">DenTempsnc.com</a></div>
		<div id="temp_pos_switch" class="temp_links"><a href="dds_perm.php">Permanent Assignments</a></div>

		</div>
	</div>

<h2>Temporary opportunities for Dentists</h2>

<p id="para_temp">Please click the "request" link for details on each assignment.</p>
<p id="para_exp">Feel free to call us with any questions/concerns at 919-461-9655.</p>
<strong><p id="para_exp">If you want to book an assignment ASAP, please call us and we can book you over the phone!</p></strong>

<div id="tab_div">
								<table id='table1'>
									<tr>
										<th>Location:</th>
										<th>Date:</th>
										<th>Details:</th>
										<th></th>
										<th></th>
									</tr>
								</table>
					</div>
									
						<div id= "no_assign">There are no assignments at this time but please check back soon!</div>



<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/lightbox_jquery.js"></script>
<script type="text/javascript" src="../js/temp_request.js"></script>

</body>
</html>