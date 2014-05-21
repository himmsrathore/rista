<?php
session_start();   

require("../script/common.php");
require("../script/mysql.php");
require("../script/openfile.php");
require("../script/validation.php");


	$link = connect($hname,$uname,$passwd);
	usedatabase($dbname,$link);	
	$username=$_REQUEST['username1'];
	$password=$_REQUEST['password1'];
    $activation_code=$_REQUEST['activation_code'];
    $status="VY";
   $result = queryselect("username,password,birth_date,status","user_info","username = '".$username."' and password = '".$password."'",$link);
if(mysql_num_rows($result)!=0)
{
$row = mysql_fetch_row($result); 
$usname = $row[0];
$pwd = $row[1];
$f_status = $row[3];
$inpDate = $row[2];
list($inpYear, $inpMonth, $inpDay) = explode("-", $inpDate);  
//get number of days in a month using following php function  
$numOfDays = cal_days_in_month(CAL_GREGORIAN, $inpMonth, $inpYear);  
//check if the day inputted is greater then number of days in month and set appropriately  
if($inpDay > $numOfDays) {  
$inpDay = $numOfDays;  
}  
//set month to 12 if greater then 12  
if($inpMonth > 12) {  
$inpMonth = 12;  
}  
//get the difference in year  
$diffYear = date("Y") - $inpYear;  
//get the difference in month  
$diffMonth = date("m") - $inpMonth;  
//get the day difference  
$diffDay = date("d") - $inpDay;  
//check if month is less than 0  
if($diffMonth < 0) {  
$diffYear -= 1;  
$diffMonth += 12;   
}  
//check if the day is less than 0  
if($diffDay < 0) {  
$diffMonth -= 1;  
$diffDay += $numOfDays;  
}  

$result5 = queryselect("sent_code","user_info","username = '".$username."' and password = '".$password."'",$link);
if(mysql_num_rows($result5)!=0)
{
$row5 = mysql_fetch_row($result5); 
$sent_code = $row5[0];
if($sent_code==$activation_code)
{
    queryupdate("user_info","received_code = '".$activation_code."',status = '".$status."'","username='".$username."' AND password='".$password."'",$link);
    echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('index.php');\n");
		echo("-->\n");
		echo("</script>");
}
else
{
    $login="incorrect";
}
}

    queryupdate("user_info","last_login = '".date("l F d, Y, h:i A")."',age = '".$diffYear."'","username='".$username."' AND password='".$password."'",$link);
    }
$_SESSION['username']=$usname;
$_SESSION['password']=$pwd;

       

if($_SESSION['username']==$username and $_SESSION['password']==$password and $f_status==$status)
{
   echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('index.php');\n");
		echo("-->\n");
		echo("</script>");
}
elseif($f_status!=$status) 
{
if($_SESSION['username']==$username and $_SESSION['password']==$password)
{
    $login="activate";
       
}
elseif($_SESSION['username']!=$username or $_SESSION['password']!=$password and $f_status==$status)
{
    $login="invalid";
     
}
}
 echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../login.php?login=".$login."&username=".$username."');\n");
		echo("-->\n");
		echo("</script>");


	
?>