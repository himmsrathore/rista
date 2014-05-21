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
	$no=$_REQUEST['no'];	
	
$result = queryselect("*","user_info","registeration_no = '".$no."'",$link);
if(mysql_num_rows($result)!=0)
{
 $row = mysql_fetch_row($result); 
   
 

	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Matrimonial Website</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../css/style-tango.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="topbg-logo2">
  <div class="topbg-logo">
     <div class="logo-holder"></div>
    
  </div>
</div>
<div class="header-bg1">
</div>
<div class="login-bg" style="width: 1000px; height: 60px">&nbsp;</div>
<div align="center">
<table width=1000 cellspacing="0" cellpadding="0" background="../images/main.jpg"><tr><td>
<table border="0" width="989" cellspacing="0" cellpadding="0">
					

					
					
					<tr>
						<td width="980" height="26" colspan="3">
						<table border="0" cellSpacing="0" cellPadding="0" width="977">
						
	<tr>
									<td height="26" width="18%" align="left">&nbsp;</td>
									<td width="82%" align="left" valign="middle">
									&nbsp;</td>
								</tr>
								<tr>
						<td width="18%" height="26" align="left" rowspan="6" valign="top">
		  				<p align="center"><img border="0" src="../<?php echo $row[19];?>" width="123" height="148" style="border: 1px solid #000000" title="<?php echo $row[3];?>">
									</p>
									<p align="center">
									
									</td>
						<td width="82%" height="6" align="left" valign="top">
						<div align="left">
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td colspan="2" height="12">
						<font face="Verdana" size="1">&nbsp; </font></td>
								</tr>
								<tr>
									<td colspan="2" bgcolor="#FFBBFF" height="20">
						<b><font face="Verdana" color="#000033">General Info.</font></b></td>
								</tr>
								<tr>
									<td width="21%" height="20"><b>
									<font face="Verdana" size="2">Name :</font></b></td>
									<td height="20" width="79%">
									<font face="Verdana" size="2"><?php echo $row[3];?></font></td>
								</tr>
								<tr>
									<td width="21%" height="20"><b>
									<font face="Verdana" size="2">Cast :</font></b></td>
									<td height="20" width="79%">
									<font face="Verdana" size="2"><?php echo $row[12];?></font></td>
								</tr>
								<tr>
									<td width="21%" height="20"><b>
									<font face="Verdana" size="2">Email :</font></b></td>
									<td height="20" width="79%">
									<font face="Verdana" size="2"><?php echo $row[4];?></font></td>
								</tr>
								<tr>
									<td width="21%" height="20"><b>
									<font face="Verdana" size="2">Gender :</font></b></td>
									<td height="20" width="79%">
									<font face="Verdana" size="2"><?php echo $row[5];?></font></td>
								</tr>
								<tr>
									<td width="21%" height="20"><b>
									<font face="Verdana" size="2">Date of Birth 
									:</font></b></td>
									<td height="20" width="79%">
									<font face="Verdana" size="2"><?php echo $row[6]."-".$row[7]."-".$row[8];?></font></td>
								</tr>
								<tr>
									<td width="21%" height="20"><b>
									<font face="Verdana" size="2">Time of Birth 
									:</font></b></td>
									<td height="20" width="79%">
									<font face="Verdana" size="2"><?php echo $row[9].":".$row[10].":".$row[11];?></font></td>
								</tr>
								<tr>
									<td width="21%" height="20"><b>
									<font face="Verdana" size="2">Religion :</font></b></td>
									<td height="20" width="79%">
									<font face="Verdana" size="2"><?php echo $row[18];?></font></td>
								</tr>
								<tr>
									<td width="21%" height="20"><b>
									<font face="Verdana" size="2">Location :</font></b></td>
									<td height="20" width="79%">
									<font face="Verdana" size="2"><?php echo $row[15]." - ".$row[16]." - ".$row[17];?></font></td>
								</tr>
								<tr>
									<td width="21%" height="20">&nbsp;</td>
									<td height="20" width="79%">&nbsp;</td>
								</tr>
								<tr>
									<td height="20" colspan="2" bgcolor="#FFBBFF"><b>
						<font color="#000033" face="Verdana">Physical Attributes</font></b></td>
								</tr>
								<tr>
									<td width="21%" height="20"><b>
									<font face="Verdana" size="2">Height :</font></b></td>
									<td height="20" width="79%">
									<font face="Verdana" size="2"><?php echo $row[20];?></font></td>
								</tr>
								<tr>
									<td width="21%" height="20"><b>
									<font face="Verdana" size="2">Body Type :</font></b></td>
									<td height="20" width="79%">
									<font face="Verdana" size="2"><?php echo $row[21];?></font></td>
								</tr>
								<tr>
									<td width="21%" height="20"><b>
									<font face="Verdana" size="2">Complexion :</font></b></td>
									<td height="20" width="79%">
									<font face="Verdana" size="2"><?php echo $row[22];?></font></td>
								</tr>
								<tr>
									<td width="21%" height="20"><b>
									<font face="Verdana" size="2">Physical 
									Status :</font></b></td>
									<td height="20" width="79%">
									<font face="Verdana" size="2"><?php echo $row[23];?></font></td>
								</tr>
								<tr>
									<td width="21%" height="20">&nbsp;</td>
									<td height="20" width="79%">&nbsp;</td>
								</tr>
								<tr>
									<td height="20" colspan="2" bgcolor="#FFBBFF">
									<b><font color="#000033" face="Verdana">
									Education &amp; Occupation</font></b></td>
								</tr>
								<tr>
									<td width="21%" height="20"><b>
									<font face="Verdana" size="2">Education :</font></b></td>
									<td height="20" width="79%">
									<font face="Verdana" size="2"><?php echo $row[24];?></font></td>
								</tr>
								<tr>
									<td width="21%" height="20"><b>
									<font face="Verdana" size="2">Occupation :</font></b></td>
									<td height="20" width="79%">
									<font face="Verdana" size="2"><?php echo $row[25];?></font></td>
								</tr>
								<tr>
									<td width="21%" height="20"><b>
									<font face="Verdana" size="2">Annual Income 
									:</font></b></td>
									<td height="20" width="79%">
									<font face="Verdana" size="2"><?php echo $row[26];?></font></td>
								</tr>
								<tr>
									<td width="21%" height="20">&nbsp;</td>
									<td height="20" width="79%">&nbsp;</td>
								</tr>
								<tr>
									<td width="100%" height="20" colspan="2" bgcolor="#FFBBFF">
									<b><font color="#000033" face="Verdana">
									Habits</font></b></td>
								</tr>
								<tr>
									<td width="21%" height="20"><b>
									<font face="Verdana" size="2">Food :</font></b></td>
									<td height="20" width="79%">
									<font face="Verdana" size="2"><?php echo $row[27];?></font></td>
								</tr>
								<tr>
									<td width="21%" height="20"><b>
									<font face="Verdana" size="2">Smoking :</font></b></td>
									<td height="20" width="79%">
									<font face="Verdana" size="2"><?php echo $row[28];?></font></td>
								</tr>
								<tr>
									<td width="21%" height="20"><b>
									<font face="Verdana" size="2">Drinking :</font></b></td>
									<td height="20" width="79%">
									<font face="Verdana" size="2"><?php echo $row[29];?></font></td>
								</tr>
								<tr>
									<td width="21%" height="20">&nbsp;</td>
									<td height="20" width="79%">&nbsp;</td>
								</tr>
								<tr>
									<td width="100%" height="20" colspan="2" bgcolor="#FFBBFF">
									<b><font color="#000033" face="Verdana">
									Astrological Info.</font></b></td>
								</tr>
								<tr>
									<td width="21%" height="20"><b>
									<font face="Verdana" size="2">Manglik :</font></b></td>
									<td height="20" width="79%">
									<font face="Verdana" size="2"><?php echo $row[30];?></font></td>
								</tr>
								<tr>
									<td width="21%" height="20"><b>
									<font face="Verdana" size="2">Rashi :</font></b></td>
									<td height="20" width="79%">
									<font face="Verdana" size="2"><?php echo $row[31];?></font></td>
								</tr>
								<tr>
									<td width="21%" height="20">&nbsp;</td>
									<td height="20" width="79%">&nbsp;</td>
								</tr>
								<tr>
									<td width="100%" height="20" colspan="2" bgcolor="#FFBBFF">
									<b><font color="#000033" face="Verdana">
									Family Profile</font></b></td>
								</tr>
								<tr>
									<td width="21%" height="20"><b>
									<font face="Verdana" size="2">Family Status 
									:</font></b></td>
									<td height="20" width="79%">
									<font face="Verdana" size="2"><?php echo $row[32];?></font></td>
								</tr>
								<tr>
									<td width="21%" height="20"><b>
									<font face="Verdana" size="2">Family Type :</font></b></td>
									<td height="20" width="79%">
									<font face="Verdana" size="2"><?php echo $row[33];?></font></td>
								</tr>
								<tr>
									<td width="21%" height="20"><b>
									<font face="Verdana" size="2">Family Values 
									:</font></b></td>
									<td height="20" width="79%">
									<font face="Verdana" size="2"><?php echo $row[34];?></font></td>
								</tr>
								<tr>
									<td width="21%" height="20">&nbsp;</td>
									<td height="20" width="79%">&nbsp;</td>
								</tr>
								<tr>
									<td width="21%" height="20">&nbsp;</td>
									<td height="20" width="79%">&nbsp;</td>
								</tr>
							</table>
						</div>
						</td>
					</tr>
							<?php
							}
							?>
						</table>
						&nbsp;</td>
					</tr>
					<tr>
						<td width="980" height="26" colspan="3">&nbsp;</td>
						<td width="6" height="26">&nbsp;</td>
					</tr>
					<tr>
						<td width="980" height="26" colspan="3">&nbsp;</td>
						<td width="6" height="26">&nbsp;</td>
					</tr>
				</table>
</td></tr></table>
</div>
<div class="footer">
  <div id="footer-bound">
	<p align="center">Copyright 2011. All rights reserved.</div>
</div>
</body>
</html>
