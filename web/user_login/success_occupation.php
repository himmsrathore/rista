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
$education = $_REQUEST['education'];
$occupation = $_REQUEST['occupation'];
$annual_income = $_REQUEST['annual_income'];
		

 mysql_query("UPDATE user_info SET education='$education',occupation='$occupation',annual_income='$annual_income' WHERE username='$username'");
  
echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('my_profile.php?status=e_s');\n");
		echo("-->\n");
		echo("</script>");
	
?>
