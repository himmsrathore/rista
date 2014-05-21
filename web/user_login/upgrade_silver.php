<?php
session_start();
	require("../script/common.php");
	require("../script/mysql.php");
require("../script/openfile.php");
require("../script/validation.php");


	$link = connect($hname,$uname,$passwd);
	usedatabase($dbname,$link);	
	

$username=$_SESSION['username'];
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

<div class="topbg-logo2">
  <div class="topbg-logo">
    <div class="logo-holder"></div>

    <div class="link-holder">

      <div class="link-holder3"><a href="index.php">My Ristaa</a></div>
      <div class="link-holder2"><a href="my_profile.php">My Profile</a></div>
      <div class="link-holder2"><a href="about_us.php">About us </a></div>
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
<div class="login-bg" style="width: 1000px; height: 60px">
<center>
    <div class="login-holder" style="width: 879px; height: 47px"> <font face="Verdana" size="2"  color="white"><b><a style="text-decoration: none" href="interests_received.php"> <font  color="white">Interests Received</font></a>&nbsp; |&nbsp; <a style="text-decoration: none" href="interests_expressed.php"> <font  color="white">Interests Expressed</font></a>&nbsp; |&nbsp; <a href="#" name="link1" id="link1" style="text-decoration: none" onmouseover="MM_showMenu(window.mm_menu_0521105438_0,-4,20,null,'link1')" onmouseout="MM_startTimeout();"><font color="white">Search</font></a> &nbsp; | <a href="#" name="link2" id="link2" style="text-decoration: none" onmouseover="MM_showMenu(window.mm_menu_0521105438_1,-4,20,null,'link2')" onmouseout="MM_startTimeout();"><font color="white">Upgrade</font></a> | &nbsp;<a style="text-decoration: none" href="change_password.php"> <font  color="white">Change Password</font></a>&nbsp; |&nbsp; <a style="text-decoration: none" href="delete_account.php"> <font  color="white">Delete Account</font></a>

</b></font></div>
  </center>
</div><div align="center">
<table width=1000 cellspacing="0" cellpadding="0" background="../images/main.jpg"><tr><td>
<table border="0" width="1000" cellspacing="0" cellpadding="0" align=center>
					

					
					
					<tr>
						<td width="980" height="26">
						
<?php
$check=mysql_query("select upgrade_status from user_info where username='$username'");
$check1=mysql_fetch_array( $check );
$chec=mysql_query("select upgrade_type from user_info where username='$username'");
$chec1=mysql_fetch_array( $chec );
     if($check1[0]=='' or isset($_GET['up'])){

?>
	  <center>
	    <font size='+2' color="#FF0000"><b>Upgrade To Silver </b></font><br>
	    <br><br><br>
	  <form method="post" action="<?php if(isset($_GET['up'])){echo "up_silver.php?up=ul";}else{echo "up_silver.php";} ?>"><table width="373" height="300" bgcolor="#E0D1BE" >
	      <tr>
	        <td align="center"  colspan="4" bgcolor="#993300"><font color="#FFFFFF" size="+1">Select Any Method</font></td>
	        </tr>
	      <tr ><td width="81" rowspan="7"></td>
	      </tr>
	      <tr>
	        <td width="134"><font color="green">Cash</font></td>
	        <td width="142"><input type="radio" value="cash" name="mathod" checked="checked" /></td>
	        </tr>
          <tr>
            <td><font  color="green">Pick Up</font></td>
            <td><input type="radio" name="mathod" value="pick up" /></td>
          </tr>
          <tr>
            <td><font color="green">DD</font></td>
            <td><input type="radio" value="dd" name="mathod" /></td>
          </tr>
          <tr>
            <td><font color="green">Debit Card</font></td>
            <td><input type="radio" value="dabit card" name="mathod" /></td>
          </tr>
          <tr>
            <td><input name="submit" type="submit" style="background:url(../images/send.gif);width:81px; height:32px; color:#FFFFFF; border:none;" tabindex="2" value="Submit" /></td>
          </tr>
	      </table></form></form></center>
	  
<?
}
     if($check1[0]=='request'){
           echo "<table height=300 align=center><tr><td><font size=+3 color='#006600' face='Algerian'>YOU ARE ALREADY REQUESTED FOR $chec1[0]</FONT></td></tr></table>";
     }
     if(($check1[0]=='upgraded') and ($chec1[0]=='gold') and !isset($_GET['up'])){
	 	
	 	        echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../user_login/upgrade_to_gold.php');\n");
		echo("-->\n");
		echo("</script>");
		
     }
     if(($check1[0]=='upgraded') and ($chec1[0]=='silver') and !isset($_GET['up'])){
	 	
	 	        echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../user_login/upgrade_to_silver.php');\n");
		echo("-->\n");
		echo("</script>");
		
     }
     if(($check1[0]=='upgraded') and ($chec1[0]=='bronze') and !isset($_GET['up'])){
	 	
	 	        echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../user_login/upgrade_to_bronze.php');\n");
		echo("-->\n");
		echo("</script>");
		
     }
echo "</table></td></tr></table></center>";

?>
	  </td>
    </tr>
  </table>
</div>
<div class="footer">
  <div id="footer-bound">
    <p align="center">Copyright 2011. All rights reserved.</p>
  </div>
</div>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/chat.js"></script>
</body>
</html>