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
$reason = $_REQUEST['reason'];
$post_time = date("l F d, Y, h:i A");
  $insert=mysql_query("INSERT INTO delete_account (username,reason,request_time) VALUES('$username','$reason','$post_time')");
  $data=mysql_query("select image_url from user_info where username='$username'");
  $data1=mysql_fetch_array($data);
$img="../".$data1[0];  
unlink($img);
  
mysql_query("DELETE FROM user_info WHERE username='$username'");
mysql_query("DELETE FROM view_mobile_no WHERE username='$username'");
mysql_query("DELETE FROM user_upgrade WHERE username='$username'");
mysql_query("DELETE FROM user_online WHERE username='$username'");
mysql_query("DELETE FROM send_message WHERE username='$username'");
mysql_query("DELETE FROM interest WHERE username='$username'");
mysql_query("DELETE FROM user_info WHERE username='$username'");


$status="delete";

session_unset();
session_destroy();  
echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../login.php?status=".$status."');\n");
		echo("-->\n");
		echo("</script>");
	
?>
