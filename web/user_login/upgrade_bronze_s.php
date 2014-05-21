<?php
session_start();
	require("../script/common.php");
	require("../script/mysql.php");
require("../script/openfile.php");
require("../script/validation.php");


	$link = connect($hname,$uname,$passwd);
	usedatabase($dbname,$link);
	$username=$_SESSION['username'];

$type=$_GET['type'];
$upgrade_type=$_GET['up'];
if($type=='cash'){
mysql_query("update user_info set deposit_type='$type',upgrade_type='$upgrade_type' where username='$username'");
mysql_query("update user_info set upgrade_status='request' where username='$username'");

}
if($type=='pup'){
$address=$_POST['address'];
$mobile=$_POST['mob'];

mysql_query("update user_info set deposit_type='$type',upgrade_type='$upgrade_type' where username='$username'");
mysql_query("update user_info set upgrade_status='request' where username='$username'");
mysql_query("update user_info set pickup_address='$address',pickup_mob= '$mobile' where username='$username'");
}
if($type=='dabit'){
mysql_query("update user_info set deposit_type='$type',upgrade_type='$upgrade_type' where username='$username'");
mysql_query("update user_info set upgrade_status='request' where username='$username'");
}
if($type=='dd'){
$ddno=$_POST['ddno'];
$branch=$_POST['branch'];
$dd_date=$_POST['date'];
mysql_query("update user_info set deposit_type='$type',upgrade_type='$upgrade_type' where username='$username'");
mysql_query("update user_info set dd_no='$ddno',bank_name='$branch',dd_date='$dd_date' where username='$username'");
mysql_query("update user_info set upgrade_status='request' where username='$username'");
}

echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../user_login/upgrade_success.php');\n");
		echo("-->\n");
		echo("</script>");
		
 


?>
