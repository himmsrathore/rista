<?php
session_start();
	require("../script/common.php");
	require("../script/mysql.php");
require("../script/openfile.php");
require("../script/validation.php");


	$link = connect($hname,$uname,$passwd);
	usedatabase($dbname,$link);	
	
$type=$_GET['type'];
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
$reg=$no;	
	
$result = queryselect("*","user_info","registeration_no = '".$no."'",$link);

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
									<td width="82%" align="left" valign="middle">&nbsp;
									</td>
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

<?php

$data=mysql_query("select username from user_info where registeration_no=$reg");
$data1=mysql_fetch_array( $data );
$check_up=mysql_query("select * from user_upgrade where username='$data1[0]'");
$check_up1=mysql_fetch_array($check_up);
if($type=='pup'){
   if( $check_up1[0]==NULL ){


					echo "<tr><td colspan='2' bgcolor='#FFBBFF' height='20'>
						<b><font face='Verdana' color='#000033'>Deposit Type Using Pick-Up.</font></b></td></tr>
                                     
                                         <tr><td colspan='2' bgcolor='#FFBBFF' height='20'>
						<b><font face='Verdana' color='#000033'>&nbsp</font></b></td></tr>
                                         <tr align=left height=35><td>
						<b><font face='Verdana' size=+1>User Name:</font></b></td><td width=500>
						<b><font color='red'>$row[1]</font></b></td></tr>
                                         <tr align=left height=35><td>
						<b><font face='Verdana'>User Address:</font></b></td><td width=500>
						<b><font color='red'>$row[44]</font></b></td></tr>

                                         <tr align=left height=35><td>
						<b><font face='Verdana'>User Mobile No:</font></b></td><td width=500>
						<b><font color='red' color='#000033'>$row[45]</font></b></td></tr>

							</table></div></td></tr></table></td></tr></table>";
  }
  else{

					echo "<tr><td colspan='2' bgcolor='#FFBBFF' height='20'>
						<b><font face='Verdana' color='#000033'>Deposit Type Using Pick-Up.</font></b></td></tr>
                                     
                                         <tr><td colspan='2' bgcolor='#FFBBFF' height='20'>
						<b><font face='Verdana' color='#000033'>&nbsp</font></b></td></tr>
                                         <tr align=left height=35><td>
						<b><font face='Verdana' size=+1>User Name:</font></b></td><td width=500>
						<b><font color='red'>$row[1]</font></b></td></tr>
                                         <tr align=left height=35><td>
						<b><font face='Verdana'>User Address:</font></b></td><td width=500>
						<b><font color='red'>$check_up1[3]</font></b></td></tr>

                                         <tr align=left height=35><td>
						<b><font face='Verdana'>User Mobile No:</font></b></td><td width=500>
						<b><font color='red' color='#000033'>$check_up1[4]</font></b></td></tr>

							</table></div></td></tr></table></td></tr></table>";



  }
}
if($type=='dabit'){
      if( $check_up1[0]==NULL ){
					echo "<tr><td bgcolor='#FFBBFF' height='20' colspan=2>
						<b><font face='Verdana' color='#000033'>Deposit Type Using Deposit.</font></b></td></tr>
                                                   <tr><td colspan='2' bgcolor='#FFBBFF' height='20'>
						<b><font face='Verdana' color='#000033'>&nbsp</font></b></td></tr>
                                                 <tr align=left height=35><td>
						<b><font face='Verdana' size=+1>User Name:</font></b></td><td width=500>
						<b><font color='red'>$row[1]</font></b></td></tr>
						<tr><td colspan=2>
						<b><font face='Verdana' color='red' >The User Deposit Money Using Internet Banking To Our Official Bank Account</font></b></td></tr>
							</table></div></td></tr></table></td></tr></table>";

  }
  else{

     echo "<tr><td bgcolor='#FFBBFF' height='20' colspan=2>
						<b><font face='Verdana' color='#000033'>Deposit Type Using Deposit.</font></b></td></tr>
                                                   <tr><td colspan='2' bgcolor='#FFBBFF' height='20'>
						<b><font face='Verdana' color='#000033'>&nbsp</font></b></td></tr>
                                                 <tr align=left height=35><td>
						<b><font face='Verdana' size=+1>User Name:</font></b></td><td width=500>
						<b><font color='red'>$row[1]</font></b></td></tr>
						<tr><td colspan=2>
						<b><font face='Verdana' color='red' >The User Deposit Money Using Internet Banking To Our Official Bank Account</font></b></td></tr>
							</table></div></td></tr></table></td></tr></table>";




  }
}
if($type=='dd'){
     if( $check_up1[0]==NULL ){
					echo "<tr><td colspan='2' bgcolor='#FFBBFF' height='20'>
						<b><font face='Verdana' color='#000033'>Deposit Type Using DD.</font></b></td></tr>
                                                <tr><td colspan='2' bgcolor='#FFBBFF' height='20'>
						<b><font face='Verdana' color='#000033'>&nbsp</font></b></td></tr>
 <tr align=left height=35><td>
						<b><font face='Verdana' size=+1>User Name:</font></b></td><td width=500>
						<b><font color='red'>$row[1]</font></b></td></tr>
						<tr height=35><td>
						<b><font face='Verdana'>DD NO.:</font></b></td><td>
						<b><font face='Verdana' color='#000033'>$row[46]</font></b></td></tr>
						<tr height=35><td>
						<b><font face='Verdana'>Bank Name:</font></b></td><td>
						<b><font face='Verdana' color='#000033'>$row[47]</font></b></td></tr>
						<tr height=35><td>
						<b><font face='Verdana'>Validation Date:</font></b></td><td>
						<b><font face='Verdana' color='#000033'>$row[48]</font></b></td></tr>
							</table></div></td></tr></table></td></tr></table>";
}
else{

          echo "<tr><td colspan='2' bgcolor='#FFBBFF' height='20'>
						<b><font face='Verdana' color='#000033'>Deposit Type Using DD.</font></b></td></tr>
                                                <tr><td colspan='2' bgcolor='#FFBBFF' height='20'>
						<b><font face='Verdana' color='#000033'>&nbsp</font></b></td></tr>
 <tr align=left height=35><td>
						<b><font face='Verdana' size=+1>User Name:</font></b></td><td width=500>
						<b><font color='red'>$row[1]</font></b></td></tr>
						<tr height=35><td>
						<b><font face='Verdana'>DD NO.:</font></b></td><td>
						<b><font face='Verdana' color='#000033'>$check_up1[5]</font></b></td></tr>
						<tr height=35><td>
						<b><font face='Verdana'>Bank Name:</font></b></td><td>
						<b><font face='Verdana' color='#000033'>$check_up1[6]</font></b></td></tr>
						<tr height=35><td>
						<b><font face='Verdana'>Validation Date:</font></b></td><td>
						<b><font face='Verdana' color='#000033'>$check_up1[7]</font></b></td></tr>
							</table></div></td></tr></table></td></tr></table>";

}
}
?>
</div>
<div class="footer">
  <div id="footer-bound">
	<p align="center">Copyright 2011. All rights reserved.</div>
</div>
</body>
</html>
