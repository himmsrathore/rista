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
 $result = queryselect("name,email","user_info","registeration_no = '".$no."'",$link);
if(mysql_num_rows($result)!=0)
{
 $row = mysql_fetch_row($result);
 $name=$row[0];
 $email=$row[1];
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
function validate()
{
if(document.msg.subject.value=="")
	{
		alert("Enter The Subject.");
		document.msg.subject.focus();
		return false;
	}
	
if(document.msg.message.value=="")
	{
		alert("Enter The Message.");
		document.msg.message.focus();
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
			<td width="291" valign="top">
				<div style="margin-top:20px; ">
					<div align="left">
					<table border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #93C9FF" >
						<Tr>
							<Td width="16" height="24" background="../images/2.gif">
							&nbsp;</Td>
							<Td background="../images/2.gif" class="style2" style="font-weight:bold ">
							<font face="Verdana" size="2">Administrator Control 
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
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</div>
				</div>
			</td>
			<td width="1060"><?php
             if($_REQUEST['status']=="success")
              {
               	echo("<b><font color=\"maroon\">");
				echo "Your message has been sent successfully.";
				echo("</font></b>");
			}
            ?>
				<table border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #93C9FF" width="653" >
					 <form name="msg" onSubmit="return validate();" method="post" action="success_send_message.php" enctype="multipart/form-data">
					 <TR >
          <TD colspan="2" height="24" align="center" background="../images/2.gif">
			<font face="Verdana">
			<b>Send Message to &quot;<?php echo $name;?>&quot;</b></font></TD>
          			</TR>	
		  
					 <TR >
          <TD ><b><font face="Verdana" size="2">To :</font></b></TD>
          <TD >
			<p align="center">
			<input name="to" readonly style="float: left" value="<?php echo $email;?>"></TD></TR>	
		  
		   <TR >
          <TD ><b><font face="Verdana" size="2">Subject :</font></b></TD>
          <TD >
			<input type="text" name="subject" size="68" style="float: left">
          </TD></TR>		  
  
		  <TR >
          <TD ><b><font face="Verdana" size="2">Message :</font></b></TD>
          <TD align="left"><textarea rows="15" cols="55" name="message" style="width: 252; height:194"></textarea></TD></TR>
		  
		  
        <TR >
          <TD ></TD>
          <TD >&nbsp;</TD></TR>
		  
		  
        <TR >
          <TD >&nbsp;</TD>
          <TD ><INPUT type=submit value="Send" name=Submit></TD></TR>
		  
		  
        <TR >
          <TD >&nbsp;</TD>
          <TD >&nbsp;</TD></TR></TBODY></TABLE></FORM></TD></TR></TBODY></TABLE>
 
			</td>
		</tr>
		</form>

				</table>
			</td>
		</tr>
	</table>
</body>
</html>