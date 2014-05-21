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
        	
	$result = queryselect("username,password","admin","username = '".$username."'",$link);
if(mysql_num_rows($result)!=0)
{
 $row = mysql_fetch_row($result); 
 $uname=$row[0];
 $pass=$row[1];
 }
 
	
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Administrator Control Panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <SCRIPT language="javascript">
<!--
function trim(iStr)
{
	if(typeof iStr != "string")
	{
		return iStr;
	}
	
	var retVal = iStr;
	var ch = retVal.substring(0,1);
	while(ch==" ")
	{
		retVal = retVal.substring(1,retVal.length);
		ch = retVal.substring(0,1);
	}
	
	ch = retVal.substring(retVal.length-1, retVal.length);
	while(ch==" ")
	{
		retVal = retVal.substring(0,retVal.length-1);
		ch = retVal.substring(retVal.length-1, retVal.length);
	}
	
	return retVal;
}

function validate1()
{
if(trim(document.edit_login.uname.value)=="")
	{
		alert("Enter The User Name.");
		document.edit_login.uname.focus();
		return false;
	}
	else if(document.edit_login.uname.value.length<5)
	{
		alert("Username Should Have minimum 5 Letters.");
		document.edit_login.uname.focus();
		document.edit_login.uname.select();
		return false;
	}
if(trim(document.edit_login.pass.value)=="")
	{
		alert("Enter The Password.");
		document.edit_login.pass.focus();
		return false;
	}
	else if(document.edit_login.pass.value.length<5)
	{
		alert("Password Should Have minimum 5 Letters.");
		document.edit_login.pass.focus();
		document.edit_login.pass.select();
		return false;
	}

return true;
} 

-->
</script>
</head>
<body>
	<table border="0" cellspacing="0" width="1355">
		<Tr  align="center">
			<Td colspan="2" width="1353">
				<table border="0" cellpadding="5" cellspacing="0" style="vertical-align:top">
					<Tr align="center">
						<Td  align="center" width="361">&nbsp;<div style="position: absolute; width: 131px; height: 77px; z-index: 2; left: 70px; top: -15px" id="layer2">
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
			<td width="291">
				<div style="margin-top:20px; ">
					<div align="left">
					<table border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #93C9FF" >
						<Tr>
							<Td width="16" height="24" background="../images/2.gif">
							&nbsp;</Td>
							<Td background="../images/2.gif" class="style2" style="font-weight:bold ">
							<font size="2" face="Verdana">Administrator Control 
							Panel</font></Td>
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
											<font color="#0061C1">&nbsp;</font><font face="Verdana" size="2"><a style="text-decoration: none; font-weight: 700" href="brides.php"><font color="#0061C1">Users 
											(Brides)</font></a></font></td>
									</tr>
								
									<tr align="center">
										<td valign="top">
											<font face="Verdana" size="2">
											<a style="text-decoration: none; font-weight: 700" href="grooms.php">
											<font color="#0061C1">Users (Grooms)</font></a></font></td>
									</tr>
								
									<tr align="center">
										<td valign="top">
											<font face="Verdana" size="2">
											<a style="text-decoration: none; font-weight: 700" href="send_message_to_all.php">
											<font color="#0061C1">Send Message 
											to all users</font></a></font></td>
									</tr>
								
									<tr align="center">
										<td valign="top">
											<font face="Verdana" size="2">
											<a style="text-decoration: none; font-weight: 700" href="edit_login.php">
											<font color="#0061C1">Change Admin 
											Login</font></a></font></td>
									</tr>
								
									<tr align="center">
										<td valign="top">
											<font face="Verdana" size="2">
											<a style="text-decoration: none; font-weight: 700" href="logout.php">
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
			<td width="1060"><?php
             if($_REQUEST['status']=="success")
              {
               	echo("<b><font color=\"maroon\">");
				echo "Your login info. has been changed successfully.";
				echo("</font></b>");
			}
            ?>
				<table border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #93C9FF" width="439" >
					<Tr>
						<Td width="16" height="24" background="../images/2.gif">
						&nbsp;</Td>
						<Td background="../images/2.gif" class="style2" style="font-weight:bold " align="center">
						<font face="Verdana">Change Admin Login</font></Td>
						<Td width="16" height="24" background="../images/2.gif">
						&nbsp;</Td>
					</Tr>
					<Tr>
						<Td></Td>
						<Td valign="top">
						<div align="left" style="margin-top:15px ">
							<table width="397" align="left">
								<form name="edit_login" onSubmit="return validate1();" method="post" action="success_edit_login.php" enctype="multipart/form-data">

									<tr>
								
										<td width="88" >
											<font face="Verdana" size="2"><b>
											<label class="style2">Login</label>
											</b></font>
											&nbsp;</td>
								
										<td width="299" >
											<input size="14" id="uname" value="<?php echo $uname;?>" name="uname"/></td>
									</tr>
									<tr>
										<td width="88">
											<label class="style2">
											<font face="Verdana" size="2"><b>
											Password </b></font></label></td>
										<td width="299">
											<input size="15" type="password"  id="password" value="<?php echo $pass;?>" name="pass"/></td>
									</tr>
									<tr align="center">
										<td width="391" colspan="2">
											&nbsp;</td>
									</tr>
									<tr align="center">
										<td width="88">
											&nbsp;</td>
										<td width="299">
											<input type="submit"  id="Submit" name="Submit" value="Submit" style="float: left"/></td>
									</tr>
									</form>
								<tr align="center">
									<td valign="top" width="391" colspan="2">&nbsp;</td>
								</tr>
							</table></div>
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
			</td>
		</tr>
	</table>
</body>
</html>