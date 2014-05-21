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
   $no = $_REQUEST['no'];
   $activate_status = "YES";
    mysql_query("UPDATE user_info SET activate_status='$activate_status' WHERE registeration_no='$no'");
    $result = queryselect("username,password,name,email","user_info","registeration_no = '".$no."'",$link);
$user_acc=mysql_fetch_row($result);
$uname=$user_acc[0];
$pass=$user_acc[1];
$name=$user_acc[2];
$email=$user_acc[3];
$sitename = "http://www.ristaa.com";
$strBody= "Dear ".$name.","."<br><br>"."Your account has been activated successfully. Now you can access it. Your account details are - "."<br>"."Username : ".$uname."<br>". "Password : ".$pass."<br><br>"."Thanks"."<br>"."Ristaa Team"."<br>".$sitename." ";
$tomail = $email; 
$subject="Your Account Information.";
     
     $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
     $headers .= 'From:'. $mailaddress . "\r\n";

                                 
  mail($tomail,$subject,$strBody,$headers);
    
    
    
       $status="activate";  
echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('".$_SERVER['HTTP_REFERER']."?status=".$status."');\n");
		echo("-->\n");
		echo("</script>"); 
        
 ?>