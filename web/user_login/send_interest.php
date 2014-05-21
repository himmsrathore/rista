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
  $user_email = $_REQUEST['user_email'];
  $email = $_REQUEST['email'];
  $message = $_REQUEST['message'];
  $post_time = date("l F d, Y, h:i A");
  $insert=mysql_query("INSERT INTO interest (username,email,user_email,message,post_time) VALUES('$username','$email','$user_email','$message','$post_time')");


								$data=mysql_query("select upgrade_type,expression_mess from user_info where username='$username'");
								$data1=mysql_fetch_array( $data );
								$express=$data1[1]+1;
								$c=mysql_query("select * from user_info where email='$user_email'");
                                $c1=mysql_fetch_array($c);
                                $pr=$c1[0]+1058;
                                $pr="RS.".$pr;
								mysql_query("update user_info set expression_mess=$express where username='$username'");
$strBody= "Dear ".$name.","."<br><br>".$message." from $pr Profile Id";
$tomail = $user_email; 
$subject="You have received a interest. (Ristaa.com)";
     $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   
   $headers .= 'From:'. $mailaddress . "\r\n";

                                 
  mail($tomail,$subject,$strBody,$headers);
 
$status="success";  
echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('interests_expressed.php?status=".$status."');\n");
		echo("-->\n");
		echo("</script>");
	
?>
