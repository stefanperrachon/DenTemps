 <html>
 
 <?php 
date_default_timezone_set('America/New_York'); // VERSION 6

require("../../connect.php");

$duration = $_POST['duration'];
$office_location = $_POST['office_location'];
$name = mysql_real_escape_string($_POST['name']);
$notes = mysql_real_escape_string($_POST['notes']);



if($office_location == ""){}

else {

mysql_query("INSERT INTO daii_perm_need VALUES ('', '$duration', '$office_location', '$name ', '$notes', 'Y' ) ");  //change table name for duplicate and change date to duration for perm

echo "Date added";
}	
?>


	
</html>