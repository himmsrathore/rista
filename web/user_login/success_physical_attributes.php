<?php
session_start();
	require("../script/common.php");
	require("../script/mysql.php");
require("../script/openfile.php");
require("../script/validation.php");


	$link = connect($hname,$uname,$passwd);
	usedatabase($dbname,$link);	
	

$username=$_SESSION['username'];

if($username=="")
{
 $login="logout";
        echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../login.php?login=".$login."');\n");
		echo("-->\n");
		echo("</script>");
		}
$height = $_REQUEST['height'];
$body_type = $_REQUEST['body_type'];
$complexion = $_REQUEST['complexion'];
$physical_status = $_REQUEST['physical_status'];
		

 mysql_query("UPDATE user_info SET height='$height',body_type='$body_type',complexion='$complexion',physical_status='$physical_status' WHERE username='$username'");
  
echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('my_profile.php?status=p_s');\n");
		echo("-->\n");
		echo("</script>");
	
?>
