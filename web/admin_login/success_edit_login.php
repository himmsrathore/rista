<?php
session_start();
	require("../script/common.php");
	require("../script/mysql.php");
require("../script/openfile.php");
require("../script/validation.php");


	$link = connect($hname,$uname,$passwd);
	usedatabase($dbname,$link);	
	

$username=$_SESSION['admin_username'];

if($username=="")
{
 $login="logout";
        echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../admin.php?login=".$login."');\n");
		echo("-->\n");
		echo("</script>");
		}
        $uname = $_REQUEST['uname'];
$pass = $_REQUEST['pass'];
mysql_query("UPDATE admin SET username='$uname',password='$pass' WHERE username='$username'");
$_SESSION['admin_username']=$uname;
$_SESSION['admin_password']=$pass;
$status="success";  
echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('edit_login.php?status=".$status."');\n");
		echo("-->\n");
		echo("</script>");
	
?>
