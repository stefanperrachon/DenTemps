<?php	

				$ip = $_SERVER['REMOTE_ADDR'];
				include ("../admin/no_thanks.php");
				
				if (in_array ($ip, $deny)) {
			   header("location: mobile_dds_tem_p.php");
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
	
	
<h2>Temporary opportunities for Dentists <br>
	<a id="mob_link_itself" href ="mobile_dds_perm.php">click here for Permanent assignments</a> 
</h2>

	
	
<p id="para_temp">Please click the "request" link for details on each assignment.</p>
<strong><p id="para_exp">If you want to book an assignment ASAP, please call us and we can book you over the phone!</p></strong>




<div id="tab_div">
<?php	
	
// date_default_timezone_set('America/New_York'); // VERSION 6---doesn't work on server so using date_add in mysql query
			   
	require("../connect.php");
	
	if (isset($_POST['name'])){
$temp_name = mysql_real_escape_string($_POST['name']);
$email = mysql_real_escape_string($_POST['email']);
$phone = mysql_real_escape_string($_POST['phone']);
$notes = mysql_real_escape_string($_POST['notes']);
$need_id = mysql_real_escape_string($_POST['id_name']);
$ipaddress = mysql_real_escape_string($_SERVER["REMOTE_ADDR"]);

if($phone ===""){
 $phone = "No number entered";
} 

if($notes ===""){
 $notes = "No notes entered";
} 



// change table name for duplicate
mysql_query("INSERT INTO dds_req_temp VALUES ('', '$temp_name', '$email', '$phone ', '$notes', '$need_id', DATE_ADD(NOW(), INTERVAL 1 HOUR),'$ipaddress','new' ) "); 

					require("email_dds_temp.php");

									$i = 0;
									
								$query = mysql_query("select * from dds_temp_need WHERE active = 'Y' ORDER BY date "); 
																echo"<table id='table1'>";
																echo"<tr>
																		<th>Location:</th>
																		<th>Date:</th>
																		<th></th>
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
															
																echo"<td id=\"date_cell\"><div id=\"show_temp_date\">".date('m/d/Y', strtotime($row['date']))."</div></td>";
															 ?>
																
																<td>  <FORM action="my_ajax_receiver_mobile.php" method="post">
																		<INPUT type="hidden" type="text" name="id_record" value="<?php echo $row['id'];?>">
																		<input name="mySubmit" type="submit" value="request" />
																			</form>
																			</td>
																  <?php 

																						$row_id = $row['id'];
																						
																						if($need_id == $row_id ){


																						echo"<td id=\"message_cell\"><div id=\"hide".$row['id']."\" class=\"animated fadeInLeft show_div\">Request Received!</div></td>";
																						// the following code makes it so that if user goes to different need
																						//but doesn't request it. then the index page doesn't show the 
																						//the 'req recieved' msg
																					
																						echo"<script>
																								setTimeout(function(){
																								window.location.replace('mobile_dds_temp.php');
																								}, 3000);
																								</script>";
																					
																							
																						}else{
																						echo"<td id=\"message_cell\"><div id=\"hide".$row['id']."\" class=\"hide_div\">Request Received!</div></td>";
																						}
																						
																						

											echo"</tr>";
									} 

													echo"</table>";
													echo"	</div>";				
								

								

								
	
	
							} else{
							
									$i = 0;
										
									$query = mysql_query("select * from dds_temp_need WHERE active = 'Y' ORDER BY date "); 
																	echo"<table id='table1'>";
																	echo"<tr>
																			<th>Location:</th>
																			<th>Date:</th>
																			<th></th>
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
																
																	echo"<td id=\"date_cell\"><div id=\"show_temp_date\">".date('m/d/Y', strtotime($row['date']))."</div></td>";
																 ?>
																	
																	<td>  <FORM action="my_ajax_receiver_mobile.php" method="post">
																			<INPUT type="hidden" type="text" name="id_record" value="<?php echo $row['id'];?>">
																			<input name="mySubmit" type="submit" value="request" />
																				</form>
																				</td>
																				<?php
									}
									  echo"</tr>";
									}
																	echo"</table>";
																	echo"	</div>";
										
										
									if (mysql_num_rows($query) == 0) {
										echo "<div id= \"no_assign\">There are no assignments at this time but please check back soon!</div>";
										}
										
										


										?>
		
		<p id="para_exp">Feel free to call us with any questions/concerns at 919-461-9655.</p>

<div id="link_resize">
		<div class="temp_links"><a href="http://dentempsnc.com/index.php">DenTempsnc.com</a></div>
		<div class="temp_links"><a href="http://dentempsnc.com/timesheet/timesheet.php">Timesheet</a></div>
		<div class="temp_links"><a href="http://dentempsnc.com/mobile/dds_paperwork.html">List of Paperwork</a></div>
		<div class="temp_links"><a href="http://www.ncdentalboard.org/">NC Dental Board</a></div>

		</div>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/lightbox_jquery_mobile.js"></script>
<script type="text/javascript" src="../js/temp_request_mobile.js"></script>

</body>
</html>