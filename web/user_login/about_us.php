<?php
session_start();
	require("../script/common.php");
	require("../script/mysql.php");
require("../script/openfile.php");
require("../script/validation.php");
include('../ps_pagination.php');

	$link = connect($hname,$uname,$passwd);
	usedatabase($dbname,$link);	
	
$username=$_SESSION['username'];

$check_data=mysql_query( "select upgrade_status from user_info where username='$username'" );
$check_data1 = mysql_fetch_array( $check_data );
$result = queryselect("name,image_url","user_info","username = '".$username."'",$link);
if(mysql_num_rows($result)!=0)
{
 $row = mysql_fetch_row($result); 
 $name=$row[0];
 $image_url=$row[1];
 }

if($username=="")
{
 $login="logout";
        echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../login.php?login=".$login."');\n");
		echo("-->\n");
		echo("</script>");
		}

$check_data=mysql_query( "select upgrade_status from user_info where username='$username'" );
$check_data1 = mysql_fetch_array( $check_data );

if( $check_data1[0] == 'upgraded' ){
$session=session_id();
$time=time();
$time_check=$time-60; //SET TIME 10 Minute
$tbl_name="user_online"; // Table name

$sql="SELECT * FROM $tbl_name WHERE username='$username'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count=="0"){
$sql1="INSERT INTO $tbl_name(session,time,username)VALUES('$session', '$time' , '$username')";
$result1=mysql_query($sql1);
}
else {
"$sql2=UPDATE $tbl_name SET time='$time' username='$username'";
$result2=mysql_query($sql2);
}

$sql3="SELECT * FROM $tbl_name";
$result3=mysql_query($sql3);

$count_user_online=mysql_num_rows($result3);

$sql4="DELETE FROM $tbl_name WHERE time<$time_check";
$result4=mysql_query($sql4);

mysql_close();

}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ristaa.com - Hindu Matrimony, Hindu Matrimonial</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../css/style-tango.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" media="all" href="../css/chat.css" />
<link type="text/css" rel="stylesheet" media="all" href="../css/screen.css" />
<script language="JavaScript" src="../js/mm_menu.js"></script>
<script language="JavaScript" src="../js/mm_bar.js"></script>
</head>
<body>
<script language="JavaScript1.2">mmLoadMenus();</script>
<?php
session_start();
	
$username=$_SESSION['username'];

if($username=="")
{
 $login="logout";
        echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../login.php?login=".$login."');\n");
		echo("-->\n");
		echo("</script>");
		}
        $select=$_REQUEST['select'];
        $agefrom=$_REQUEST['agefrom'];
		$ageto=$_REQUEST['ageto'];
        $state1=$_REQUEST['state1'];
 $conn = mysql_connect($hname,$uname,$passwd);
	if(!$conn) die("Failed to connect to database!");
	$status = mysql_select_db($dbname, $conn);
	if(!$status) die("Failed to select database!");
    if($select=="1")
    $select1="Female";
    else
    $select1="Male";
    $status2="VY";
	


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ristaa.com - Hindu Matrimony, Hindu Matrimonial</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../css/style-tango.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="../js/mm_menu.js"></script>
<script language="JavaScript" src="../js/mm_bar.js"></script>
</head>
<body>
<script language="JavaScript1.2">mmLoadMenus();</script>

<div class="topbg-logo2">
  <div class="topbg-logo">
    <div class="logo-holder"></div>

    <div class="link-holder">

      <div class="link-holder2"><a href="index.php">My Ristaa</a></div>
      <div class="link-holder2"><a href="my_profile.php">My Profile</a></div>
      <div class="link-holder3"><a href="about_us.php">About us </a></div>
      <div class="link-holder2"><a href="contact.php">contact us</a></div>
<?php

if( $check_data1[0] == 'upgraded' ){
echo "<div class='link-holder2'><a href='user_chat.php'>Chat</a></div>";
}
?>
      
      <div class="link-holder2"><a href="logout.php">Logout</a></div>
   </div>
  </div>
</div>
<div class="header-bg1">
&nbsp;</div>
<div class="login-bg" style="width: 1000px; height: 60px"><center>
 <center>
    <div class="login-holder" style="width: 879px; height: 47px"> <font face="Verdana" size="2"  color="white"><b><a style="text-decoration: none" href="interests_received.php"> <font  color="white">Interests Received</font></a>&nbsp; |&nbsp; <a style="text-decoration: none" href="interests_expressed.php"> <font  color="white">Interests Expressed</font></a>&nbsp; |&nbsp; <a href="#" name="link1" id="link1" style="text-decoration: none" onmouseover="MM_showMenu(window.mm_menu_0521105438_0,-4,20,null,'link1')" onmouseout="MM_startTimeout();"><font color="white">Search</font></a> &nbsp; | <a href="#" name="link2" id="link2" style="text-decoration: none" onmouseover="MM_showMenu(window.mm_menu_0521105438_1,-4,20,null,'link2')" onmouseout="MM_startTimeout();"><font color="white">Upgrade</font></a> | &nbsp;<a style="text-decoration: none" href="change_password.php"> <font  color="white">Change Password</font></a>&nbsp; |&nbsp; <a style="text-decoration: none" href="delete_account.php"> <font  color="white">Delete Account</font></a>

</b></font></div>
  </center>

</div><div align="center">
<table width=1000 cellspacing="0" cellpadding="0" bgcolor="white"><tr><td>
<table width="955" height="402" border="0" cellpadding="0" cellspacing="0">
					
                  <tr>
						<td width="13" rowspan="7">&nbsp;</td>
						<td height="28" colspan="2">&nbsp;</td>
		  </tr>
<tr>
						<td height="35" colspan="2">
			<p align="left"><b><font face="Georgia, Times New Roman, Times, serif" color="#990033" size="+2">About Us</font></b></td>
		  </tr>

					
					<tr>
						<td height="26" colspan="2">
						<p align="justify"><font  face="Georgia, Times New Roman, Times, serif" size="2" color="#999999"><b>
						<font  color="#333333">Ristaa.com</font></b> is India&#39;s premier and most comprehensive 
						matrimonial portal with a touch of tradition and feel of 
						technology. It is one of the fastest growing matrimonial 
						portals dedicated towards building matrimonial alliances 
						and creating successful marriages. This matrimonial site 
						is ideally meant for those who are serious about 
						marriage and are searching for their life partner. This 
						benchmark marriage portal for privileged Indians, with 
						its user-friendly nature enables you to explore, choose 
						and unite with your soul mate in just few easy clicks. 
						Superior and in-depth research technology, understands 
						your needs, helping you find relevant matches better 
						than others. <br>
						<br>
						The website hosts web&#39;s largest community of appropriate 
						singles. Prospective brides and grooms can meet each 
						other here. <b><font color="#333333">Ristaa.com</font></b> meets every single 
						requirements of people searching for their match online. 
						This comprehensive matrimony website provides ample 
						choice in terms of community, caste, city and more. You 
						can join for free, search according to preference, 
						express interest to the perspective match, send and 
						receive proposals along with varied other features.<br>
&nbsp;</font></td><td width="219" align="right"><img src="../images/ristaa.png" width="200" height="271" style=" border:thin;"/></td>
					</tr>
					<tr>
						<td width="20" height="26">&nbsp;</td>
						<td width="703" height="26">&nbsp;</td>
					</tr>
					<tr>
						<td width="20" height="26">&nbsp;</td>
						<td width="703" height="26">&nbsp;</td>
					</tr>
					</form>
		</table>
</td></tr></table>
</div>
<div class="footer">
  <div id="footer-bound">
	<p align="center">Copyright 2011. All rights reserved.</div>
</div>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/chat.js"></script>
</body>
</html>

