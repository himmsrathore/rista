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
	
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Administrator Control Panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 
</head>
<body>
	<table border="0" cellspacing="0" width="1355">
		<Tr  align="center">
			<Td colspan="2" width="1353">
				<table border="0" cellpadding="5" cellspacing="0" style="vertical-align:top" width="1177">
					<Tr align="center">
						<Td  align="center" width="1167" valign="top">
						&nbsp;<div style="position: absolute; width: 131px; height: 77px; z-index: 2; left: 70px; top: -15px" id="layer2">
		<p align="center">
		<img border="0" src="../images/logo.png" width="329" height="90"></div>
						<p>&nbsp;</Td>
					</Tr>
			  </table>
			</td>
		</Tr>
		<Tr>
			<Td height='24' align='right' width="1353" colspan="2"></td>
		</Tr>
		<tr align="center">
			<td width="286">
				<div style="margin-top:20px; ">
					<div align="left">
					<table border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #93C9FF" >
						<Tr>
							<Td width="16" height="24" background="../images/2.gif">
							&nbsp;</Td>
							<Td background="../images/2.gif" class="style2" style="font-weight:bold ">
							<font face="Verdana" size="2">Administrator Control Panel</font></Td>
							<Td width="16" height="24" background="../images/2.gif">
							&nbsp;</Td>
						</Tr>
						<Tr>
							<Td></Td>
							<Td valign="top">
							
								<div align="left" style="margin-top:15px ">
 
								<table width="200" align="left">
							
									

									<tr align="center">
										<td valign="top">
											<font color="#0061C1">&nbsp;</font><font face="Verdana" size="2"><a style="text-decoration: none; font-weight: 700" href="brides.php?username=<?php echo $username;?>"><font color="#0061C1">Users 
											(Brides)</font></a></font></td>
									</tr>
								
									<tr align="center">
										<td valign="top">
											<font face="Verdana" size="2">
											<a style="text-decoration: none; font-weight: 700" href="grooms.php?username=<?php echo $username;?>">
											<font color="#0061C1">Users (Grooms)</font></a></font></td>
									</tr>
								
									<tr align="center">
										<td valign="top">
											<font face="Verdana" size="2">
											<a style="text-decoration: none; font-weight: 700" href="send_message_to_all.php?username=<?php echo $username;?>">
											<font color="#0061C1">Send Message to all users</font></a></font></td>
									</tr>
								
									<tr align="center">
										<td valign="top">
											<font face="Verdana" size="2">
											<a style="text-decoration: none; font-weight: 700" href="edit_login.php?username=<?php echo $username;?>">
											<font color="#0061C1">Change Admin Login</font></a></font></td>
									</tr>
								
									<tr align="center">
										<td valign="top">
											<font face="Verdana" size="2">
											<a style="text-decoration: none; font-weight: 700" href="logout.php?username=<?php echo $username;?>">
											<font color="#0061C1">Logout</font></a></font></td>
									</tr>
								
									<tr align="center">
										<td valign="top">
											&nbsp;</td>
									</tr>
								
								</table>
								
								</div>
							</form>
							</Td>
							<Td></Td>
						</Tr>
						<Tr>
							<Td width="16" height="26">&nbsp;</Td>
							<Td></Td>
							<Td width="16" height="26">&nbsp;</Td>
						</Tr>
					</table>
					</div>
				</div>
			</td>
			<td width="1065">
				<b><font face="Verdana">Welcome in Administrator Control Panel</font></b></td>
		</tr>
	</table>
</body>
</html>