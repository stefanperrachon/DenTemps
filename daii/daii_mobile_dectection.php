<html>
<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
if ($iphone || $android || $palmpre || $ipod || $berry == true) 
{
    echo"<script>window.location='http://dentempsnc.com/daii/mobile_daii_temp.php'</script>";
 }
?>

</html>