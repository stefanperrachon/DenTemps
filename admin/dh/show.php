<html>
<body>
<div id="show_form">	
<div id="update_table" class="animated fadeInLeft ">Updated</div> <!--CHange this version 6-->
<?php	
	require("../../connect.php");

	
$i = 0;

//$bgcolor= "background-color: white";
	

$query = mysql_query("select * from dh_temp_need WHERE active='Y' ORDER BY date "); 

								//change this for version six
								echo"<table id='table1'>";
								echo"<tr>
										<th>Date:</th>
										<th>Office:</th>
										<th>Notes:</th>
										<th>Location:</th>
										<th>Replies:</th>
										<th>ID:</th>
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
								//there is a whole bunch edit here for version 6. master copy is daii temp
								echo"<tr  id=\"".$id_css."\">";
								echo"<td id=\"date_cell\">".date('m/d/Y', strtotime($row['date']))."</td>";
								echo"<td id=\"name_cell\"  class=\"edit_row ".$row['id'] ."\"  >". $row['name']."</td>";  //copy line VERSION 6
								echo"<td id=\"notes_cell\" class=\"notes_class edit_row ".$row['id'] ."\">".$row['notes']."</td>"; //copy line VERSION 6
								echo"<td id=\"city_cell\"class=\"edit_row ".$row['id'] ."\" >".$row['office_location']."</td>";//copy line VERSION 6 ?>
       <!--copy this-->		   <td id="replies_cell"><form action="replies.php" method="POST"> <input type="hidden" id="job_id" name="job_name" value="<?php echo $row['id'];?>"> <button id="replies_button" type="submit"> 
									<?php
									
									$id_req = $row['id'];
									
									$result=mysql_query("SELECT count(*) as total from dh_req_temp WHERE need_id = '$id_req' "); //change this VERSION 6
									$data=mysql_fetch_assoc($result);
									
									
									
									echo $data['total'];
									
									$result_check_new=mysql_query("SELECT count(*) as total from dh_req_temp WHERE need_id = '$id_req' and status ='new' "); //change this VERSION 6
									$new_data=mysql_fetch_assoc($result_check_new); //you will get an error if there is no status column in the db
									if($new_data['total'] > 0){
									
									echo " (<div id=\"new_req_style\">".$new_data['total']." new </div>)";
									}
									?> </button>
										
								</form></td>
			
								<td id="id_cell" ><?php echo $row['id']; ?></td>

								
									
			<!--through this-->	<td id ="edit_cell"> <i class="fa fa-pencil-square-o edit_toggle " value="<?php echo $row['id'];?>"></i></td>
								<td id="button_cell"><form action="index.php" method="POST" onsubmit="return confirm('Are you sure??');" class="delete_form"> <input type="hidden" id ="id_num" name="id_name" value="<?php echo $row['id'];?>"> <input id="delete_button" type="submit" value="archive"></form></td>
<?php } ?>
	</tr>
								</table>
	</div>



<script type="text/javascript" src="../../js/edit.js"></script> 
</body>
</html>

