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
    $gender="Male";
    $sql = "SELECT registeration_no,username,email,last_login,status FROM user_info WHERE gender='".$gender."' ORDER BY registeration_no DESC";

	
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Administrator Control Panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  

</head>
<body>
	<table border="0" cellspacing="0" width="1386">
		<Tr  align="center">
			<Td colspan="2" width="1384">
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
			<Td height='24' align='right' width="1384" colspan="2"></td>
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
			<td width="1091" valign="top">
				&nbsp;<table border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #93C9FF" width="1058" >
					<?php
                    if($_REQUEST['status']=="delete")
              {
               	echo("<b><font color=\"maroon\">");
				echo "User's account has been deleted successfully.";
				echo("</font></b>");
			}
                     if($_REQUEST['status']=="activate")
              {
               	echo("<b><font color=\"maroon\">");
				echo "User's account has been activated successfully.";
				echo("</font></b>");
			}
                    ?>
					 <TR class=tblrow>
          <TD class=tblcell1 height="24" align="center" background="../images/2.gif" colspan="10">
			<font face="Verdana">
			<b>Users (Grooms)</b></font></TD>
          			</TR>	
		  
					 <TR class=tblrow>
          <TD class=tblcell1 bgcolor="#53BAFF" height="28" width="120"><b>
			<font face="Verdana" size="2">Username</font></b></TD>
          <TD class=tblcell1 bgcolor="#53BAFF" height="28" width="212"><b>
			<font face="Verdana" size="2">Email ID</font></b></TD>
          <TD class=tblcell1 bgcolor="#53BAFF" height="28" width="153"><b>
			<font face="Verdana" size="2">View Profile</font></b></TD>
          <TD class=tblcell1 bgcolor="#53BAFF" height="28" width="141"><b>
			<font face="Verdana" size="2">Send Message</font></b></TD>
          <TD class=tblcell1 bgcolor="#53BAFF" height="28" width="254"><b>
			<font face="Verdana" size="2">Last Login</font></b></TD>
          <TD class=tblcell1 bgcolor="#53BAFF" height="28" width="254"><b>
			<font face="Verdana" size="2">Upgrade</font></b></TD>
          <TD class=tblcell1 bgcolor="#53BAFF" height="28" width="254"><b>
			<font face="Verdana" size="2">Upgrade Type </font></b></TD>

          <TD class=tblcell1 bgcolor="#53BAFF" height="28" width="254"><b>
			<font face="Verdana" size="2">Deposit Type</font></b></TD>

          <TD class=tblcell1 bgcolor="#53BAFF" height="28" width="74">
			<b><font face="Verdana" size="2">Verified</font></b></TD>
          <TD class=tblcell1 bgcolor="#53BAFF" height="28" width="78">
			<p align="center"><b>
			<font face="Verdana" size="2">Delete</font></b></TD>
          			</TR>
                      <?php 
                           $pager = new PS_Pagination($conn, $sql, 5, 5, "param1=valu1&param2=value2");
	
	
	$pager->setDebug(true);
	
	
	$rs = $pager->paginate();
	if(!$rs) die(mysql_error());
	while($row = mysql_fetch_assoc($rs)) 
    {
     
        ?>	
		  
		   <TR class=tblrow>
          <TD class=tblcell1 height="28" width="120"><b>
			<font face="Verdana" size="2"><?php $u_name=$row['username']; echo $u_name;?></font></b></TD>
          <TD class=tblcell1 height="28" width="212"><b>
			<font face="Verdana" size="2"><?php echo $row['email'];?></font></b></TD>
          <TD class=tblcell1 height="28" width="153">
			<b><font face="Verdana" size="2">
			<a target="_blank" href="view_user.php?no=<?php echo $row['registeration_no'];?>">
			view profile</a></font></b></TD>
          <TD class=tblcell1 height="28" width="141">
			<b><font face="Verdana" size="2">
			<a target="_blank" href="send_message.php?no=<?php echo $row['registeration_no'];?>">
			send message</a></font></b></TD>
          <TD class=tblcell1 height="28" width="254"><b>
			<font face="Verdana" size="2"><?php 
          if($row['last_login']=="")
          echo "Not Logged in";
          else
          echo $row['last_login'];
          $reg=$row['registeration_no'];          
          ?></font></b></TD>
<TD class=tblcell1 height="28" width="141">
			<b><font face="Verdana" size="2">
			<?php
			 $check_up=mysql_query("select * from user_upgrade where username='$u_name'");
$check_up1=mysql_fetch_array($check_up);
if($check_up1[0]==NULL){
	$data=mysql_query("select upgrade_status from user_info where registeration_no='$reg'");
	 $data1=mysql_fetch_array( $data );
 	 $val=$data1[0]; 
  	 if($val=='request'){
   	echo "<a href=req_accept.php?reg=$reg>yes</a>&nbsp;&nbsp;&nbsp;<a href=req_decline.php?reg=$reg>no</a>";}
   	 else{  echo $data1[0];}
	 }else{
  	 if($check_up1[1]=='request'){
   	echo "<a href=req_accept.php?reg=$reg&up=ul>yes</a>&nbsp;&nbsp;&nbsp;<a href=req_decline.php?reg=$reg&up=ul>no</a>";}
   	 else{  echo $check_up1[1];}
	 }
	?>
	
	</font></b></TD>

<TD class=tblcell1 height="28" width="141">
			<b><font face="Verdana" size="2">
			<?php 
			if($check_up1[0]==NULL){
			$data=mysql_query("select upgrade_type from user_info where registeration_no='$reg'");
			 $data1=mysql_fetch_array( $data ); 
			 $val=$data1[0];  
			 echo $data1[0];
			 }
			 else{
			  
			 echo $check_up1[8];
			 
			 
			 }?>
			 </font></b></TD>

<TD class=tblcell1 height="28" width="141">
			<b><font face="Verdana" size="2">
			<?
			if($check_up1[0]==NULL){ 
			$deposit=mysql_query("select deposit_type from user_info where registeration_no='$reg'"); $deposit1=mysql_fetch_array( $deposit );   $deposit_type=$deposit1[0];  if($deposit_type=='cash'){echo $deposit_type;} if($deposit_type=='pup'){  echo "<a href=show_deosit_type.php?no=$reg&type=pup title='View Details'>Pick UP</a>";}if($deposit_type=='dabit'){  echo "<a href=show_deosit_type.php?no=$reg&type=dabit  title='View Details'>Dabit Card</a>";}if($deposit_type=='dd'){  echo "<a href=show_deosit_type.php?no=$reg&type=dd  title='View Details'>DD</a>";}
			}
			else{
			 $deposit1_type=$check_up1[2];  if($deposit1_type=='cash'){echo $deposit1_type;} if($deposit1_type=='pup'){  echo "<a href=show_deosit_type.php?no=$reg&type=pup title='View Details'>Pick UP</a>";}if($deposit1_type=='dabit'){  echo "<a href=show_deosit_type.php?no=$reg&type=dabit  title='View Details'>Dabit Card</a>";}if($deposit1_type=='dd'){  echo "<a href=show_deosit_type.php?no=$reg&type=dd  title='View Details'>DD</a>";}
			 }
			?></font></b></TD>


          <TD class=tblcell1 height="28" width="74">
			<b><font face="Verdana" size="2">
			<?php if($row['status']=="VY")
			echo "Yes";
			else
			echo "No";?></font></b></TD>
          <TD class=tblcell1 height="28" width="78">
			<p align="center"><b><font face="Verdana" size="2"><a href="delete.php?no=<?php echo $row['registeration_no'];?>" onclick="return confirm('Are you sure want to delete?');">
			Delete</a></font></b></TD>
          			</TR>	
                      <?php
	}
    ?>	  
  
		  <TR class=tblrow>
          <TD class=tblcell1 height="28" width="120"><b>
			<font face="Verdana" size="2">&nbsp;</font></b></TD>
          <TD class=tblcell1 height="28" width="212"><b>
			<font face="Verdana" size="2">&nbsp;</font></b></TD>
          <TD class=tblcell1 height="28" width="153"><b>
			<font face="Verdana" size="2">&nbsp;</font></b></TD>
          <TD class=tblcell1 height="28" width="141"><b>
			<font face="Verdana" size="2">&nbsp;</font></b></TD>
          <TD class=tblcell1 height="28" width="254"><b>
			<font face="Verdana" size="2">&nbsp;</font></b></TD>
          <TD class=tblcell1 height="28" width="74">&nbsp;</TD>
          <TD class=tblcell1 height="28" width="78"><b>
			<font face="Verdana" size="2">&nbsp;</font></b></TD>
          			</TR>
		  
		  
        <TR class=tblrow>
          <TD class=tblcell1 height="28" width="1056" colspan="7">&nbsp;</TD>
          			</TR></TBODY></TABLE>
				<p align="right"><b><font face="Verdana" size="2"><?php echo $pager->renderFullNav();?></font></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
				</TD></TR></TBODY></TABLE>
 
			</td>
		</tr>
		</form>

				</table>
			</td>
		</tr>
	</table>
</body>
</html>