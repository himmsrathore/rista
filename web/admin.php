<?php
	require("script/common.php");
	require("script/mysql.php");
require("script/openfile.php");
require("script/validation.php");


	$link = connect($hname,$uname,$passwd);
	usedatabase($dbname,$link);	
	


	
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Administrator Control Panel ::.</title>
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
if(trim(document.login.username.value)=="")
	{
		alert("Enter The User Name.");
		document.login.username.focus();
		return false;
	}
if(trim(document.login.password.value)=="")
	{
		alert("Enter The Password.");
		document.login.password.focus();
		return false;
	}
return true;
} 

-->
</script>


</head>
<body>
	<table border="0" cellspacing="0" width="100%">
		<Tr  align="center">
			<Td colspan="2">
				<table border="0" cellpadding="5" cellspacing="0" style="vertical-align:top">
					<Tr align="center">
						<Td  align="center" width="361">&nbsp;</Td>
					</Tr>
			  </table>
			</td>
		</Tr>
		<Tr>
			<Td height='24' align='right'></td>
		</Tr>
		<tr align="center">
			<td valign="top">
				<div style="margin-top:20px; ">
					<?php
              if($_REQUEST['login']=="invalid")
              {
               	echo("<b><font color=\"maroon\">");
				echo "Please Enter Valid User name & password.";
				echo("</font></b>");
			}
            
			
			if($_REQUEST['login']=="logout")
              {
               	echo("<b><font color=\"maroon\">");
				echo "You Have Successfully Logout.";
				echo("</font></b>");
			}
			
              ?>
              <table border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #93C9FF" >
						<Tr>
							<Td width="16" height="24" background="images/2.gif">
							&nbsp;</Td>
							<Td background="images/2.gif" class="style2" style="font-weight:bold ">
							<font face="Verdana" size="2">Administrator Control 
							Panel</font></Td>
							<Td width="16" height="24" background="images/2.gif">
							&nbsp;</Td>
						</Tr>
						<Tr>
							<Td></Td>
							<Td valign="top">
							
								<div align="left" style="margin-top:15px ">
 
								<table width="200" align="left">
							
									<form name="login" onSubmit="return validate1();" method="post" action="admin_login/login_validate.php" enctype="multipart/form-data">

									<tr>
								
										<td >
											<font face="Verdana" size="2"><b>
											<label class="style2">Login</label>
											</b></font></td><td>
											<input size="14" id="username" name="username"/>
										</td>
									</tr>
									<tr>
										<td>
											<label class="style2">
											<font face="Verdana" size="2"><b>
											Password </b></font></label></td><td>
											<input size="15" type="password"  id="password" name="password"/><br />
											</td>
									</tr>
									<tr align="center">
										<td>
											<input type="submit"  id="Submit" name="Submit" value="Submit"/>
										</td>
									</tr>
									</form>
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
			</td>
		</tr>
	</table>
</body>
</html>