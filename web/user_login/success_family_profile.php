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
$family_status = $_REQUEST['family_status'];
$family_type = $_REQUEST['family_type'];
$family_values = $_REQUEST['family_values'];
$about_family = $_REQUEST['about_family'];		

 mysql_query("UPDATE user_info SET family_status='$family_status',family_type='$family_type',family_values='$family_values',about_family='$about_family' WHERE username='$username'");
  
echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('my_profile.php?status=f_s');\n");
		echo("-->\n");
		echo("</script>");
	
?>
