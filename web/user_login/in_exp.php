<?php

session_start();

	require("../script/common.php");

	require("../script/mysql.php");

require("../script/openfile.php");

require("../script/validation.php");





	$link = connect($hname,$uname,$passwd);

	usedatabase($dbname,$link);	

	



$username=$_SESSION['username'];

$no=$_REQUEST['no'];

$ch=mysql_query("select name,email from user_info where registeration_no=$no");

$ch1=mysql_fetch_array($ch);

$chh=mysql_query("select name,email from user_info where username='$username'");

$chh1=mysql_fetch_array($chh);

if($username=="")

{

 $login="logout";

        echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");

		echo("self.location.replace('../login.php?login=".$login."');\n");

		echo("-->\n");

		echo("</script>");

}     

  $user_email = $ch1[1];

  $email=$chh1[1];
  
								$c=mysql_query("select * from user_info where username='$username'");
                                $c1=mysql_fetch_array($c);
                                $pr=$c1[0]+1058;
                                $pr="RS.".$pr;

  $message = "I am $chh1[0] and I am intrested in your profile and to view my profile id is $pr";

  $post_time = date("l F d, Y, h:i A");

  $insert=mysql_query("INSERT INTO interest (username,email,user_email,message,post_time) VALUES('$username','$email','$user_email','$message','$post_time')");





$strBody= "Dear ".$ch1[0].",".$message;

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



