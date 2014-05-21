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
if(isset($_GET['upp'])){
mysql_query("insert into user_upgrade(username,upgrade_status,deposit_type,upgrade_type)values('$username','request','$type','$upgrade_type')");
}

if(!isset($_GET['upp'])){
mysql_query("update user_info set deposit_type='$type',upgrade_type='$upgrade_type' where username='$username'");

mysql_query("update user_info set upgrade_status='request' where username='$username'");
}

}
if($type=='pup'){
$address=$_POST['address'];
$mobile=$_POST['mob'];

if(isset($_GET['upp'])){
mysql_query("insert into user_upgrade(username,upgrade_status,deposit_type,pickup_address,pickup_mob,upgrade_type)values('$username','request','$type','$address','$mobile','$upgrade_type')");
}
else{
mysql_query("update user_info set deposit_type='$type',upgrade_type='$upgrade_type' where username='$username'");
mysql_query("update user_info set upgrade_status='request' where username='$username'");
mysql_query("update user_info set pickup_address='$address',pickup_mob= '$mobile' where username='$username'");
}
}
if($type=='dabit'){

if(isset($_GET['upp'])){
mysql_query("insert into user_upgrade(username,upgrade_status,deposit_type,upgrade_type)values('$username','request','$type','$upgrade_type')");
}
else{
mysql_query("update user_info set deposit_type='$type',upgrade_type='$upgrade_type' where username='$username'");
mysql_query("update user_info set upgrade_status='request' where username='$username'");
}}
if($type=='dd'){
$ddno=$_POST['ddno'];
$branch=$_POST['branch'];
$dd_date=$_POST['date'];
if(isset($_GET['upp'])){
mysql_query("insert into user_upgrade(username,upgrade_status,deposit_type,dd_no,bank_name,dd_date,upgrade_type)values('$username','request','$type','$ddno','$branch','$dd_date','$upgrade_type')");
}else{
mysql_query("update user_info set deposit_type='$type',upgrade_type='$upgrade_type' where username='$username'");
mysql_query("update user_info set dd_no='$ddno',bank_name='$branch',dd_date='$dd_date' where username='$username'");
mysql_query("update user_info set upgrade_status='request' where username='$username'");
}}
echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../user_login/upgrade_success.php');\n");
		echo("-->\n");
		echo("</script>");
		
 


?>
