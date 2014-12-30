
 
 <?php 
// date_default_timezone_set('America/New_York'); // VERSION 6---doesn't work on server so using date_add in mysql query
 
require("../connect.php");



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
mysql_query("INSERT INTO daii_req_perm VALUES ('', '$temp_name', '$email', '$phone ', '$notes', '$need_id', DATE_ADD(NOW(), INTERVAL 1 HOUR),'$ipaddress','new'  ) "); 

	$query = mysql_query("select * from daii_perm_need WHERE id = '$need_id'");  // change table name for duplicate
	while($row = mysql_fetch_assoc($query)){ 
	
	$office = $row['office_location'];
	$duration = $row['duration']; //change for duration 
	$name = $row['name']; 
	$onotes = $row['notes']; 
	$id = $row['id']; 
}

	require '../PHPMailer-master/PHPMailerAutoload.php';
	
//mail to temp

						$temp_subject = "Your request about ".$duration." in ".$office;
						$temp_msg = "Hello ".$temp_name.", \n \n You have requested more information on the permanent assignment for ".$duration." in ".$office.". \n We will contact you back if the assignment is still available. \n Feel free to call us with any questions/concerns at 919-461-9655. \n \n Thank you, \n DenTemps Staff";
						$DT_email = "Dentemps_inc@yahoo.com";
						$temp_headers = "From: ".$DT_email;

$mail_temp = new PHPMailer();

$mail_temp->isSMTP();

$mail_temp->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail_temp->Debugoutput = 'html';
//Set the hostname of the mail server
$mail_temp->Host = "mail.dentempsnc.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail_temp->Port = 2626;
//$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
//Whether to use SMTP authentication
$mail_temp->SMTPAuth = true;
//Username to use for SMTP authentication
$mail_temp->Username = "openings@dentempsnc.com";
//Password to use for SMTP authentication
$mail_temp->Password = "Flowers03";
//Set who the message is to be sent from
$mail_temp->setFrom('openings@dentempsnc.com', 'DenTemps');
//Set an alternative reply-to address
$mail_temp->addReplyTo($DT_email, 'DenTemps');
//Set who the message is to be sent to
$mail_temp->addAddress($email, $temp_name);
//Set the subject line
$mail_temp->Subject = $temp_subject;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail_temp->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
//$mail_temp->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail_temp->addAttachment('images/phpmailer_mini.png');
$body_temp = file_get_contents('contents_temp_perm.html');
$body_temp = str_replace('$temp_name', $temp_name, $body_temp);
$body_temp = str_replace('$duration', $duration, $body_temp);
$body_temp = str_replace('$office', $office, $body_temp);
$mail_temp->msgHTML($body_temp);
//plain text messag
$mail_temp->AltBody    = $temp_msg ;

//send the message, check for errors
$mail_temp->send();			

// mail to dt
						$DT_sub = $temp_name.", DAII requests ".$duration." in ".$office;
						$DT_msg = $temp_name." has requested more information on the permanent assignment for ".$duration." in ".$office.". \n The details of the permanent assignment for the office are: \n".$onotes." \n \n The id of the assignment is ".$id." \n \n The temp filled out the info form as follows: \n Name: ".$temp_name."\n Phone: ".$phone."\n Email: ".$email."\n Temps comments/questions: \n".$notes." \n"; 
						$DT_headers = "From: ".$email;

$mail = new PHPMailer();

$mail->isSMTP();

$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "mail.dentempsnc.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 2626;
//$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "openings@dentempsnc.com";
//Password to use for SMTP authentication
$mail->Password = "Flowers03";
//Set who the message is to be sent from
$mail->setFrom('openings@dentempsnc.com', $temp_name);
//Set an alternative reply-to address
$mail->addReplyTo($email, $temp_name);
//Set who the message is to be sent to
$mail->addAddress('dentemps_inc@yahoo.com', 'Dentemps inc');
//Set the subject line
$mail->Subject = $DT_sub;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$body = file_get_contents('contents_admin_perm.html');
$body = str_replace('$temp_name', $temp_name, $body);
$body = str_replace('$DT_msg', $DT_msg, $body);
$body = str_replace('$duration', $duration, $body);
$body = str_replace('$office', $office, $body);
$body = str_replace('$onotes', $onotes, $body);
$body = str_replace('$phone', $phone, $body);
$body = str_replace('$id', $id, $body);
$body = str_replace('$email', $email, $body);
$body = str_replace('$notes', $notes, $body);

$mail->msgHTML($body);
//Replace the plain text body with one created manually
$mail->AltBody = $DT_msg;
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//$mail->Body    = $DT_msg ;

//send the message, check for errors
$mail->send();


?>


	

