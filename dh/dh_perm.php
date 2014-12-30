<!DOCTYPE html>
<html lang="en">


<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/Lightbox_css_perm.css">
	<link rel="stylesheet" type="text/css" href="../css/show_temp_perm.css">

	
</head>
<body>
<div id="back_form">
	<h1>DenTemps</h1>
		<div id="link_resize">
		<div class="temp_links"><a href="http://www.ncdentalboard.org/">NC Dental Board</a></div>
		<div class="temp_links"><a href="http://dentempsnc.com/timesheet/timesheet.php">Timesheet</a></div>
		<div class="temp_links"><a href="http://dentempsnc.com/mobile/dh_paperwork.html">List of Paperwork</a></div>
		<div class="temp_links"><a href="http://dentempsnc.com">DenTempsnc.com</a></div>
		<div id="temp_pos_switch"  class="temp_links"><a href="index.php">Temporary Assignments</a></div>

		</div>
	</div>

<h2>Permanent opportunities for Hygienists</h2>

<p id="para_temp">Please click the "request" link for details on each assignment..</p>
<p id="para_exp">Feel free to call us with any questions/concerns at 919-461-9655. </p>
<strong><p id="para_exp">If you want to book an assignment ASAP, please call us and we can book you over the phone!</p></strong>

<div id="tab_div">
<?php	
	include ("dh_mobile_dectection_perm.php");
	
				$ip = $_SERVER['REMOTE_ADDR'];
				include ("../admin/no_thanks.php");
				
				if (in_array ($ip, $deny)) {
			   
			   echo"<script>window.location.replace('dh_per_m.php')</script>";
			   exit();}
			   
	require("../connect.php");

	$i = 0;
	
$query = mysql_query("select * from dh_perm_need WHERE active = 'Y' ORDER BY office_location "); 
echo"<table id='table1'>";
								echo"<tr>
										<th>Location:</th>
										<th>Schedule:</th>
										<th>Details:</th>
										<th></th>
									</tr>";
	while($row = mysql_fetch_assoc($query)){ 
	if($i % 2 == 0) 
			{
			  $id_css= "odd";
		   }
		   else 
		  {
			 $id_css= "even";
		  }
			$i++;					
								
								echo"<tr  id='".$id_css."'>";
						
								echo"<td id=\"name_cell\"><div id=\"show_temp_loc\">".$row['office_location']."</div></td>";
							
								echo"<td id=\"duration_cell\"><div id=\"show_temp_duration\">".$row['duration']."</div></td>";
								echo"<td id=\"notes_cell\">".$row['notes']."</td>"; 
							 ?>
								<td id="link_cell"><a href="#" id="<?php echo $row['id'];?>" class="lightbox">request</a></td>
								<td id="message_cell"><div id="hide<?php echo $row['id'];?>" class="hide_div">Request Received!</div></td>
								

								</tr>
								
								
	<?php
	
	}

							echo"</table>";
							echo"	</div>";	
	
	
									if (mysql_num_rows($query) == 0) {
										echo "<div id= \"no_assign\">There are no assignments at this time but please check back soon!</div>";
										}

	
	


	?>
		

	<div class="backdrop"></div>
	<div class="box">
		<div class="close">x</div>
		<div id="show-record"></div>
			<form id="temp-request">   
					<div id='facebook'>
						<div id='block_1' class='facebook_block'></div>
						<div id='block_2' class='facebook_block'></div>
						<div id='block_3' class='facebook_block'></div>
					</div>
				
				<input type="hidden" id ="id_num" name="id_name" readonly> 
				<div id="warning-msg"></div>
				Name: <input type="text" id ="namefield" name="name" required><br>
				Email: <input type="text" id ="emailfield" name="email" required><br>
				Phone:<input type="text" id ="phonefield" name="phone"><br>
				Comments/Questions: <br><textarea rows="4" cols="50" id ="notesfield" name="notes"></textarea><br>
				<input id="temp_rew_sub" type="submit" value="Submit">
			</form>
			
		</div>


<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/lightbox_jquery_perm.js"></script>
<script type="text/javascript" src="../js/temp_request_perm.js"></script>

</body>
</html>