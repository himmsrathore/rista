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
	$no=$_REQUEST['no'];
$post_time = date("l F d, Y, h:i A");
  $insert=mysql_query("INSERT INTO delete_account (username,reason,request_time) VALUES('by admin','by admin','$post_time')");
mysql_query("DELETE FROM user_info WHERE registeration_no='$no'");
$status="delete";  
echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('".$_SERVER['HTTP_REFERER']."?status=".$status."');\n");
		echo("-->\n");
		echo("</script>");
	
?>
