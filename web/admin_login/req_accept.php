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

$date=date("d");

$month=date("m");

$year=date("Y");

$data=mysql_query("select username from user_info where registeration_no=$reg");
$data1=mysql_fetch_array( $data );
mysql_query("delete from view_mobile_no where username='$data1[0]'");
if(isset($_GET['up'])){

$check_up=mysql_query("select * from user_upgrade where username='$data1[0]'");
$check_up1=mysql_fetch_array($check_up);

mysql_query("update user_info set upgrade_date=$date,upgrade_month=$month,upgrade_year=$year,upgrade_status='upgraded',deposit_type='$check_up1[2]',pickup_address='$check_up1[3]',pickup_mob='$check_up1[4]',dd_no='$check_up1[5]',bank_name='$check_up1[6]',dd_date='$check_up1[7]',upgrade_type='$check_up1[8]' where registeration_no=$reg");
mysql_query("delete from user_upgrade where username='$data1[0]'");

}
else{

mysql_query("update user_info set upgrade_date=$date,upgrade_month=$month,upgrade_year=$year where registeration_no=$reg");
mysql_query("update user_info set upgrade_status='upgraded' where registeration_no=$reg");
}
echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../admin_login/index.php');\n");
		echo("-->\n");
		echo("</script>");

?>

