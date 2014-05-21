<?php
session_start();
require("../script/common.php");
require("../script/mysql.php");
require("../script/openfile.php");
require("../script/validation.php");
include('../ps_pagination.php');

$link = connect($hname,$uname,$passwd);
usedatabase($dbname,$link);
$username=$_SESSION['admin_username'];

$reg=$_GET['reg'];
$data=mysql_query("select username from user_info where registeration_no=$reg");
$data1=mysql_fetch_array( $data );

$check_up=mysql_query("select * from user_upgrade where username='$data1[0]'");
$check_up1=mysql_fetch_array($check_up);
if($check_up1[0]==NULL)
mysql_query("update user_info set upgrade_status='',deposit_type='',pickup_address='',pickup_mob='',dd_no='',bank_name='',dd_date='',upgrade_type='' where registeration_no=$reg");
else{
mysql_query("delete from user_upgrade where username='$data1[0]'");
}
 echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../admin_login/index.php');\n");
		echo("-->\n");
		echo("</script>");

?>

