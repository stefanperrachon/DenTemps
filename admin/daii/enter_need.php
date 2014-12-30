 <html>
 
 <?php 
date_default_timezone_set('America/New_York'); // VERSION 6

require("../../connect.php");

$dt = $_POST['date'];
$office_location = $_POST['office_location'];
$name = mysql_real_escape_string($_POST['name']);
$notes = mysql_real_escape_string($_POST['notes']);

$date = date('Y-m-d', strtotime($dt));

if($office_location == ""){}

else {

mysql_query("INSERT INTO daii_temp_need VALUES ('', '$date', '$office_location', '$name ', '$notes', 'Y' ) "); 

echo "Date added";
}	
?>


	
</html>