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
$post_time=date("l F d, Y, h:i A");
$sitename = "http://www.ristaa.com";
$tomail="rekha.gahlot@softwarehouse.co";
$strBody= "Dear, "."<br><br>". $message."<br><br>". "Thanks" ."<br>". "Ristaa Team" ."<br>". $sitename ." ";


     
     $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From:'. $mailaddress . "\r\n";
    $headers .= 'Bcc:'. $to . "\r\n";

                                 
  mail($tomail,$subject,$strBody,$headers);
  $insert=mysql_query("INSERT INTO msg_to_all (email,subject,message,post_time,posted_by) VALUES('$to','$subject','$message','$post_time','$username')");

$status="success";  
echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('".$_SERVER['HTTP_REFERER']."?&status=".$status."');\n");
		echo("-->\n");
		echo("</script>");


?>
