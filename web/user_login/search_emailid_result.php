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
if($username=="")
{
 $login="logout";
        echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../login.php?login=".$login."');\n");
		echo("-->\n");
		echo("</script>");
		}
     $emailid = $_REQUEST['email_id']; 
  $arr=explode(".",$emailid);
  $no=$arr[1]-1058;
$status2 = "VY"; 
 $result = queryselect("*","user_info","registeration_no  = ".$no." AND status = '".$status2."'",$link);

     	
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

<SCRIPT language="javascript">
<!--

function validate()
{var flag=true;
    var mail=document.search.email_id.value;
	$index=mail.indexOf("rs.");
    $index1=mail.indexOf("RS.");
	if($index!=0 && $index1!=0)
	{
		alert("Please Specify Correct Profile ID");
		document.search.email_id.focus();
		flag=false;
	}
    else if(document.search.email_id.value =="")
        {
		
			alert("Please Enter Profile ID");
			document.search.email_id.focus();
			flag=false;
        }
	return flag;
} 
-->
</script>

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
<div class="login-bg" style="width: 1000px; height: 60px"><center>
<center>
    <div class="login-holder" style="width: 879px; height: 47px"> <font face="Verdana" size="2"  color="white"><b><a style="text-decoration: none" href="interests_received.php"> <font  color="white">Interests Received</font></a>&nbsp; |&nbsp; <a style="text-decoration: none" href="interests_expressed.php"> <font  color="white">Interests Expressed</font></a>&nbsp; |&nbsp; <a href="#" name="link1" id="link1" style="text-decoration: none" onmouseover="MM_showMenu(window.mm_menu_0521105438_0,-4,20,null,'link1')" onmouseout="MM_startTimeout();"><font color="white">Search</font></a> &nbsp; | <a href="#" name="link2" id="link2" style="text-decoration: none" onmouseover="MM_showMenu(window.mm_menu_0521105438_1,-4,20,null,'link2')" onmouseout="MM_startTimeout();"><font color="white">Upgrade</font></a> | &nbsp;<a style="text-decoration: none" href="change_password.php"> <font  color="white">Change Password</font></a>&nbsp; |&nbsp; <a style="text-decoration: none" href="delete_account.php"> <font  color="white">Delete Account</font></a>

</b></font></div>
  </center>
</div><div align="center">
<table width=1000 cellspacing="0" cellpadding="0" background="../images/main.jpg"><tr><td>
<table border="0" width="989" cellspacing="0" cellpadding="0">
					

					
					
					<tr>
						<td width="980" height="26">
						<table border="0" cellSpacing="0" cellPadding="0" width="977">
						
	<tr>
									<td height="26" align="left" colspan="4">&nbsp;									</td>
						  </tr>
								 
	<tr>
									<td height="49" align="left" colspan="2"><b>
			<font face="Verdana" size="+1" color="#FF0000">Search By Profile ID</font></b></td>
        </tr>
       <form name="search" method="post" action="search_emailid_result.php" onsubmit="return validate();" enctype="multipart/form-data">
       
        <tr>
          <td width="108" height="26" align="left">
			<font face="Verdana" size="2"><b>Profile ID :</b></font></td>
          <td width="869" height="26" align="left">       
          <input type="text" name="email_id" tabindex="1" size="23" style="font-weight: 700; width:200px; color:#FFFFFF; background-color:#999999;" value="<?php echo $emailid;?>"></td>
        </tr>
        <tr>
          <td width="108" height="23" valign="middle" align="left">&nbsp;</td>
          <td width="869" height="23" valign="top" align="left">&nbsp;        </td>
        </tr><tr><td height="58" colspan="2">
          <input type="submit" name="Submit" value="" style="background:url(../images/search.jpg); width:176px; height:28px;float: left; border:none;" /></td>
								</tr></form>
								<tr>
						<td height="26" align="left" colspan="4"><b>
						<font face="Verdana" color="#FF0000">Search Results</font></b></td>
								</tr>
							<?php
                            if(mysql_num_rows($result)!=0)
{
 $row = mysql_fetch_row($result);
 ?>	
								<tr>
						<td height="26" align="left" colspan="4">
						
						
						<div align="center">
							<table border="0" width="764" cellspacing="0" cellpadding="0" style="border: 1px solid #000000">
								<tr>
									<td width="139" rowspan="6" valign="middle">
									<p align="center">
									<a target="_blank" href="view_user.php?no=<?php echo $row[0];?>">
									<img border="0" src="../<?php echo $row[19];?>" width="123" height="148" style="border: 1px solid #000000" title="<?php echo $row[3];?>"></a></td>
									<td valign="bottom" height="15" colspan="2" align="left">
									<font face="Verdana" size="2"><b>Name :</b> <font color="#666666"><?php echo $row[3];?></font></font></td>
								</tr>
								<tr>
									<td valign="bottom" height="15" colspan="2" align="left">
									<font face="Verdana" size="2"><b>Email :</b> <font color="#666666"><?php 
								$ch=mysql_query("select upgrade_status,email from user_info where username='$username'");
								$ch1=mysql_fetch_array($ch);
								if($ch1[0]=='upgraded'){ echo $ch1[1];}?></font></font></td>
								</tr>
								<tr>
									<td valign="bottom" height="15" width="354" align="left">
									<font face="Verdana" size="2"><b>Date of 
									Birth :</b> <font color="#666666"><?php echo $row[6]."-".$row[7]."-".$row[8];?></font></font></td>
									<td valign="bottom" height="15" width="269" align="left">									
									<font face="Verdana" size="2"><b>Time of 
									Birth :</b><font color="#666666"> <?php echo $row[9].":".$row[10].":".$row[11];?></font></font></td>
								</tr>
								
								<tr>
									<td valign="bottom" height="15" width="354"  align="left">
									<font face="Verdana" size="2"><b>Marital 
									Status :</b><font color="#666666"> <?php echo $row[14];?></font></font></td>
									<td align="left"><?php
									$ch=mysql_query("select upgrade_status from user_info where username='$username'");
									$ch1=mysql_fetch_array($ch);
									if($ch1[0]=='upgraded'){
									echo "<a target='_blank' style='text-decoration: none; font-weight: 700' href=interest_expressed.php?no=".$row[0]."><font color='red' face='Verdana' size='2'>
									Interest Express</font></a>";}
									else{
									echo "<a target='_blank' style='text-decoration: none; font-weight: 700' href=in_exp.php?no=".$row[0]."><font color='red' face='Verdana' size='2'>
									Interest Express</font></a>";
									}
									
?></td>
								</tr>
								<tr>
									<td valign="bottom" height="15"  align="left">
									<font face="Verdana" size="2"><b>Location :</b><font color="#666666"> <?php echo $row[15]." - ".$row[16]." - ".$row[17];?></font></font></td><td align="left"><a target="_blank" href="view_user.php?no=<?php echo $row[0];?>" style="text-decoration:none;"><font color="#666666" face="Verdana">View Profile</font></a></td>
								</tr>
								<tr>
									<td height="5" colspan="2" align="left">&nbsp;									 </td>
								</tr>
							</table></div>
						</td>
					</tr>
					<tr><td colspan="4">&nbsp;</td></tr>
								<?php
	}
    else{?>
    <tr>
									<td height="26" align="center" colspan="4"><font face="Verdana" size="3" color="maroon"><b><?php
                                    echo("Search result not found.");
    }
    ?></b></font>
									&nbsp;</td>
						  </tr>
        <tr>
									<td height="26" align="left" colspan="4">&nbsp;									</td>
						  </tr>
							
							
						</table>
						&nbsp;</td>
					</tr>
					
					
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
