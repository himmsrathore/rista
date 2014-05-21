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

$check_data=mysql_query( "select upgrade_status from user_info where username='$username'" );
$check_data1 = mysql_fetch_array( $check_data );

if( $check_data1[0] == 'upgraded' ){
$session=session_id();
$time=time();
$time_check=$time-60; //SET TIME 10 Minute
$tbl_name="user_online"; // Table name

$sql="SELECT * FROM $tbl_name WHERE username='$username'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count=="0"){
$sql1="INSERT INTO $tbl_name(session,time,username)VALUES('$session', '$time' , '$username')";
$result1=mysql_query($sql1);
}
else {
"$sql2=UPDATE $tbl_name SET time='$time' username='$username'";
$result2=mysql_query($sql2);
}

$sql3="SELECT * FROM $tbl_name";
$result3=mysql_query($sql3);

$count_user_online=mysql_num_rows($result3);

$sql4="DELETE FROM $tbl_name WHERE time<$time_check";
$result4=mysql_query($sql4);

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
      
      <div class="link-holder3"><a href="logout.php">Logout</a></div>
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
<table width=1000 cellspacing="0" cellpadding="0" background="../images/main.jpg"><tr><td><br>
					<?php

           echo "<center><table height=300  border=1><tr><td valign=top><table><tr>
<TD class=tblcell1 height='24' align='center' bgcolor=maroon colspan='5'>
			<font face='Verdana' color=white>
			<b> Users </b></font></TD>
          			</TR>	
		  
					 <TR class=tblrow>
          <TD class=tblcell1 bgcolor='#53BAFF' height='21' width='120'><b>
			<font face='Verdana' size='2'>Username</font></b></TD>
          <TD class=tblcell1 bgcolor='#53BAFF' height='21' width='212'><b>
			<font face='Verdana' size='2'>Email ID</font></b></TD>
          <TD class=tblcell1 bgcolor='#53BAFF' height='21' width='153'><b>
			<font face='Verdana' size='2'>View Profile</font></b></TD>
          <TD class=tblcell1 bgcolor='#53BAFF' height='21' width='141'><b>
			<font face='Verdana' size='2'>Mobile No.</font></b></TD>
          </tr>";

        $select=$_REQUEST['select'];
        $agefrom=$_REQUEST['agefrom'];
        $ageto=$_REQUEST['ageto'];
        $state1=$_REQUEST['state1'];
$dat=mysql_query("SELECT * FROM view_mobile_no WHERE username='".$username."'");
while($dat1=mysql_fetch_array( $dat )){
$data=mysql_query("SELECT * FROM user_info WHERE username='".$dat1[2]."'");
$data1=mysql_fetch_array( $data );


?>
<TR class=tblrow>
          <TD class=tblcell1 height="28" width="120"><b>
			<font face="Verdana" size="2"><?php echo $data1[1];?></font></b></TD>
          <TD class=tblcell1 height="28" width="212"><b>
			<font face="Verdana" size="2"><?php echo $data1[4];?></font></b></TD>
          <TD class=tblcell1 height="28" width="153">
			<b><font face="Verdana" size="2">
			<a target="_blank" href="view_user.php?no=<?php echo $data1[0];?>">
			view profile</a></font></b></TD>
          <TD class=tblcell1 height="28" width="141">
			<b><font face="Verdana" size="2">
			<?php echo $data1[13];?></font></b></TD>   
          </tr>


<?php
     }
echo "</table></center>";
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
</body>
</html>
