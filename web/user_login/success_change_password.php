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
$password = $_REQUEST['pass1'];
$old_password = $_POST['old_pass'];

$data = mysql_query("select * from user_info where password='$old_password'");
$data1 = mysql_fetch_array( $data );
if($data1[0]==NULL){

echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('change_password.php?status=err');\n");
		echo("-->\n");
		echo("</script>");

}
mysql_query("UPDATE user_info SET password='$password' WHERE username='$username'");
$result = queryselect("password,name,email","user_info","username = '".$username."'",$link);
if(mysql_num_rows($result)!=0)
{
 $row = mysql_fetch_row($result); 
 $password = $row[0];
 $name = $row[1];
 $email = $row[2];

$sitename = "http://www.ristaa.com/";
$strBody= "Dear ".$name.","."<br><br>"."Your password has been changed. Your New Password - "."<br>"."Login Name : ".$username."<br>". "Password : ".$password."<br><br>"."Thanks"."<br>"."Ristaa Team"."<br>".$sitename." ";
$tomail = $email; 
$subject="Your Account Information.";
     
     $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
     $headers .= 'From:'. $mailaddress . "\r\n";

                                 
  mail($tomail,$subject,$strBody,$headers);
 } 
$status="success";  
echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('change_password.php?status=".$status."');\n");
		echo("-->\n");
		echo("</script>");

	
?>
