<!DOCTYPE html>
<html lang="en">
<head>
	
	<link rel="stylesheet" type="text/css" href="../css/show_temp_mobile.css">
	
	<meta name="viewport" content="initial-scale=1">
	
	
</head>
<body>




	
	<div id="info_php">
<?php
require("../connect.php");

if (isset($_POST['id_record'])){
	$id = $_POST['id_record'];


	
	$query = mysql_query("select * from dh_temp_need WHERE id = '$id'"); // change table name for duplicate
	while($row = mysql_fetch_assoc($query)){ 
	
	echo" Please fill out all fields to request details on the assignment: <br>";
	echo '<div id="need_loc_date">';
	echo  $row['office_location'];
	echo"</div>";
	echo" on ";
	echo '<div id="need_loc_date">';
	echo date('m/d/Y', strtotime($row['date'])); 
	echo"</div>";
	echo"<br>";
	echo"Details:<br>";
	echo '<div id="need_loc_date">';
	echo $row['notes'];
	echo"</div>";
	echo"<br>";
	echo"We will contact you if assignment is still available.";
	echo"<br> ";
	
	}
	
	?>
	
		
			<div id="form_box">
				<form id="temp-request" action="mobile_dh_temp.php" method="post" > 
					<!--<div id='facebook'>
							<div id='block_1' class='facebook_block'></div>
							<div id='block_2' class='facebook_block'></div>
							<div id='block_3' class='facebook_block'></div>
						</div>  -->
					
					<input type="hidden" id ="id_num" name="id_name" value="<?php echo $id;?>" readonly>
					
					Name: <input type="text" id ="namefield" name="name" required><br>
					Email: <input type="text" id ="emailfield" name="email" required><br>
					Phone:<input type="text" id ="phonefield" name="phone"><br>
					Comments/Questions: <textarea rows="4" cols="50" id ="notesfield" name="notes"></textarea><br>
					<input id="temp_rew_sub" type="submit" value="Submit">
				</form>
				
			</div>
			
		</div> <?php

	} else{
	echo"not working";
}

?>




</body>
</html>