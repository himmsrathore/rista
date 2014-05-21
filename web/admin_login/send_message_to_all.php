<?php
session_start();
	require("../script/common.php");
	require("../script/mysql.php");
require("../script/openfile.php");
require("../script/validation.php");
include('../ps_pagination.php');

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
  $conn = mysql_connect($hname,$uname,$passwd);
	if(!$conn) die("Failed to connect to database!");
	$status = mysql_select_db($dbname, $conn);
	if(!$status) die("Failed to select database!");
    $gender="Female";
    $sql = "SELECT registeration_no,username,email,last_login,status FROM user_info ORDER BY registeration_no DESC";

	
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
if(document.msg_to_all.subject.value=="")
	{
		alert("Enter The Subject.");
		document.msg_to_all.subject.focus();
		return false;
	}
	
if(document.msg_to_all.message.value=="")
	{
		alert("Enter The Message.");
		document.msg_to_all.message.focus();
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
						<p></Td>
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
							<Td width="16" height="24" background="../images/2.gif">&nbsp;
							</Td>
							<Td background="../images/2.gif" class="style2" style="font-weight:bold ">
							<font face="Verdana" size="2">Administrator Control 
							Panel</font></Td>
							<Td width="16" height="24" background="../images/2.gif">&nbsp;
							</Td>
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
										<td valign="top">&nbsp;
									  </td>
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
					<p></div>
				</div>
			</td>
			<td width="1060" valign="top">
				&nbsp;<br>
				
				<?php
             if($_REQUEST['status']=="success")
              {
               	echo("<b><font color=\"maroon\">");
				echo "Your message has been sent successfully.";
				echo("</font></b>");
			}
            ?><table border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #93C9FF" width="653" >
					 <form name="msg_to_all" onSubmit="return validate();" method="post" action="success_send_message_to_all.php" enctype="multipart/form-data">
					
					 <TR class=tblrow>
          <TD class=tblcell1 colspan="2" height="24" align="center" background="../images/2.gif">
			<font face="Verdana">
			<b>Send Message</b></font></TD>
          			</TR>	
		  
					 <TR class=tblrow>
          <TD class=tblcell1 valign="middle" height="24"><b>
			<font face="Verdana" size="2">To :</font></b></TD>
          <TD class=tblcell2 height="24">
			<p align="left"><textarea rows="3" cols="55" name="to" style="width: 252; height:30" readonly ><?php $pager = new PS_Pagination($conn, $sql, 5, 5, "param1=valu1&param2=value2");
	
	
	$pager->setDebug(true);
	
	
	$rs = $pager->paginate();
	if(!$rs) die(mysql_error());

			while( $row = mysql_fetch_assoc($rs) )	
{	
 $area = $row['email']. ", ";  
 	// read the list of emails from the file.	
$email_list = $area; 	
// count how many emails there are.
$total_emails = count($email_list); 	
// go through the list and trim off the newline character.	
for ($counter=0; $counter<$total_emails; $counter++) 
{   
$email_list[$counter] = trim($email_list[$counter]);   
} 	
$to = $email_list; 	
echo $to;	
} ?></textarea></TD></TR>	
		  
		   <TR class=tblrow>
          <TD class=tblcell1 valign="middle" height="24"><b><font face="Verdana" size="2">
			Subject :</font></b></TD>
          <TD class=tblcell2 height="24">
			<p align="center">
			<input name="subject" size="70" style="float: left" tabindex=1 >
          </TD></TR>		  
  
		  <TR class=tblrow>
          <TD class=tblcell1><b><font face="Verdana" size="2">Message :</font></b></TD>
          <TD class=tblcell2>
			<p align="left">
			<textarea rows="15" cols="55" name="message" style="width: 252; height:194" tabindex=2></textarea></TD></TR>
		  
		  
        <TR class=tblrow>
          <TD class=tblcell1></TD>
          <TD class=tblcell2><INPUT type=submit value="Send" name=submit tabindex=3></TD></TR></TBODY></TABLE>
		  </TD></TR>
				</TBODY></TABLE>
 
			<p>&nbsp;</table></td></tr></table></p>
</body>
</html>