<?php
session_start();
require("../script/common.php");
require("../script/mysql.php");
require("../script/openfile.php");
require("../script/validation.php");
include('../ps_pagination.php');

$link = connect($hname,$uname,$passwd);
usedatabase($dbname,$link);
$username=$_SESSION['username'];

$data=mysql_query("select username from user_info where username='$username'");
$data1=mysql_fetch_array( $data );


mysql_query("delete from user_upgrade where username='$data1[0]'");

 echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../user_login/upgrade_to_silver.php');\n");
		echo("-->\n");
		echo("</script>");

?>

