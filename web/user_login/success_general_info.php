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
$name = $_REQUEST['name'];
$gender = $_REQUEST['gender'];
$date_birth = $_REQUEST['DOB_date'];
$month_birth = $_REQUEST['DOB_month'];
$year_birth = $_REQUEST['DOB_year'];
$hour_birth = $_REQUEST['hour'];
$minutes_birth = $_REQUEST['minute'];
$am_birth = $_REQUEST['AM'];
$cast = $_REQUEST['cast'];
$mobile_no = $_REQUEST['mobile_no'];
$marital_status = $_REQUEST['marital_status'];
$country = $_REQUEST['country'];
$state = $_REQUEST['state'];
$city = $_REQUEST['city'];
$about_me = $_REQUEST['about_me'];
$birth_place=$_REQUEST['birth_place'];		

 mysql_query("UPDATE user_info SET name='$name',gender='$gender',date_birth='$date_birth',month_birth='$month_birth',year_birth='$year_birth',hour_birth='$hour_birth',minutes_birth='$minutes_birth',am_birth='$am_birth',cast='$cast',mobile_no='$mobile_no',marital_status='$marital_status',country='$country',state='$state',city='$city',about_me='$about_me',birth_place='$birth_place' WHERE username='$username'");
  
echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('my_profile.php?status=g_s');\n");
		echo("-->\n");
		echo("</script>");
	
?>
