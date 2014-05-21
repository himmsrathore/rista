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
$food = $_REQUEST['food'];
$smoking = $_REQUEST['smoking'];
$drinking = $_REQUEST['drinking'];
		

 mysql_query("UPDATE user_info SET food='$food',smoking='$smoking',drinking='$drinking' WHERE username='$username'");
  
echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('my_profile.php?status=h_s');\n");
		echo("-->\n");
		echo("</script>");
	
?>
