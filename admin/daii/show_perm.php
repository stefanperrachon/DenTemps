<html>
<body>
<div id="show_form">	
<div id="update_table" class="animated fadeInLeft ">Updated</div> <!--CHange this version 6-->
<?php	
	require("../../connect.php");

	
$i = 0;

//$bgcolor= "background-color: white";
	

$query = mysql_query("select * from daii_perm_need WHERE active ='Y' ORDER BY id DESC ");  // change table name for duplicate and change order by from date to id 
	
	//change this for version six
									echo"<table id='table1'>";		
								echo"<tr>
										<th>Duration:</th>
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
								echo"<tr  id='".$id_css."'>";
								echo"<td id=\"duration_cell\" class=\"edit_row ".$row['id'] ."\"  >".$row['duration']."</td>";   // change this from date to duration for perm and vice versa
								echo"<td id=\"name_cell\" class=\"edit_row ".$row['id'] ."\"  >".$row['name']."</td>"; 
								echo"<td id=\"notes_cell\" class=\"notes_class edit_row ".$row['id'] ."\">".$row['notes']."</td>"; 
								echo"<td id=\"city_cell\"class=\"edit_row ".$row['id'] ."\" >".$row['office_location']."</td>";?>
								<td id="replies_cell"><form action="replies_perm.php" method="POST"> <input type="hidden" id="job_id" name="job_name" value="<?php echo $row['id'];?>"> <button id="replies_button" type="submit"> 
									<?php
									
									$id_req = $row['id'];
									
									$result=mysql_query("SELECT count(*) as total from daii_req_perm WHERE need_id = '$id_req' ");
									$data=mysql_fetch_assoc($result);
									
									
									
									echo $data['total'];
									
									$result_check_new=mysql_query("SELECT count(*) as total from daii_req_perm WHERE need_id = '$id_req' and status ='new' ");
									$new_data=mysql_fetch_assoc($result_check_new);
									if($new_data['total'] > 0){
									//echo'<div></div>';
									echo " (<div id=\"new_req_style\">".$new_data['total']." new </div>)";
									}
									?> </button>
										
								</form></td>
								<td id="id_cell" ><?php echo $row['id']; ?></td>
								
								<td id ="edit_cell"> <i class="fa fa-pencil-square-o edit_toggle " value="<?php echo $row['id'];?>"></i></td>	
								<td id="button_cell"><form action="perm_form.php" method="POST" onsubmit="return confirm('Are you sure??');" class="delete_form"> <input type="hidden" id ="id_num" name="id_name" value="<?php echo $row['id'];?>"> <input id="delete_button" type="submit" value="archive"></form></td>
								 <!--change this action for duplicate-->
								
	
	<?php
	}
	 
	
	?>

	</tr>
								</table>
</div>

<script type="text/javascript" src="../../js/edit_perm.js"></script> 
</body>
</html>

