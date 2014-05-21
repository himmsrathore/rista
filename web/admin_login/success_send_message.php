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
$to = $_REQUEST['to'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];
$result = queryselect("username,name","user_info","email = '".$to."'",$link);
$arr= mysql_fetch_row($result);
$username=$arr[0];
$name=$arr[1];
$post_time=date("l F d, Y, h:i A");
$sitename = "http://www.ristaa.com";
$strBody= "Dear ".$name."," ."<br><br>". $message."<br><br>". "Thanks" ."<br>". "Ristaa Team" ."<br>". $sitename ." ";


     
     $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From:'. $mailaddress . "\r\n";

                                 
  mail($to,$subject,$strBody,$headers);
$insert=mysql_query("INSERT INTO send_message (username,email,message,post_time) VALUES('$username','$to','$message','$post_time')");

$status="success";  
echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('send_message.php?status=".$status."');\n");
		echo("-->\n");
		echo("</script>");
	
?>
