<?php
session_start();
	require("../script/common.php");
	require("../script/mysql.php");
require("../script/openfile.php");
require("../script/validation.php");


	$link = connect($hname,$uname,$passwd);
	usedatabase($dbname,$link);	
	

$username=$_SESSION['username'];
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
if($username=="")
{
 $login="logout";
        echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../login.php?login=".$login."');\n");
		echo("-->\n");
		echo("</script>");
		}
	$no=$_REQUEST['no'];	
	
$result = queryselect("*","user_info","username = '".$username."'",$link);
 $row = mysql_fetch_row($result);	
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
<div class="header-bg">
<form name="search" method="post" action="result.php" enctype="multipart/form-data">
  <div class="search-holder">
  
    <div class="searchers">
      <div class="font3"><font size="2" face="Verdana">Looking For :</font></div>
      <span style="PADDING-TOP: 6px">
      <select 
                              class="contentyellow" style="WIDTH: 107px" 
                              name="select">
        <option value="1" 
                                selected="selected">Brides</option>
        <option 
                                value="0">Grooms</option>
      </select>
    </span></div>
    <div class="searchers">
      <div class="font3"><font size="2" face="Verdana">Age:</font></div>
      							<select name="agefrom" style="width: 44px;"><option selected>
								18</option><option>19</option><option>20</option><option>
								21</option><option>22</option><option>23</option><option>
								24</option><option>25</option><option>26</option><option>
								27</option><option>28</option><option>29</option><option>
								30</option><option>31</option><option>32</option><option>
								33</option><option>34</option><option>35</option><option>
								36</option><option>37</option><option>38</option><option>
								39</option><option>40</option><option>41</option><option>
								42</option><option>43</option><option>44</option><option>
								45</option><option>46</option><option>47</option><option>
								48</option><option>49</option><option>50</option><option>
								51</option><option>52</option><option>53</option><option>
								54</option><option>55</option><option>56</option><option>
								57</option><option>58</option><option>59</option><option>
								60</option></select><span style="PADDING-TOP: 6px">
      <span 
                              class="searcFields">to </span>
      </span> <select name="ageto" style="width: 44px;"><option>18</option><option>
		19</option><option>20</option><option>21</option><option>22</option><option>
		23</option><option>24</option><option selected>25</option><option>26</option><option>
		27</option><option>28</option><option>29</option><option>30</option><option>
		31</option><option>32</option><option>33</option><option>34</option><option>
		35</option><option>36</option><option>37</option><option>38</option><option>
		39</option><option>40</option><option>41</option><option>42</option><option>
		43</option><option>44</option><option>45</option><option>46</option><option>
		47</option><option>48</option><option>49</option><option>50</option><option>
		51</option><option>52</option><option>53</option><option>54</option><option>
		55</option><option>56</option><option>57</option><option>58</option><option>
		59</option><option>60</option></select><span style="PADDING-TOP: 6px">
      </span></div>
    <div class="searchers">
      <div class="font3"><font face="Verdana" size="2"><span 
                              onmouseover="style.cursor='pointer'; mmtooltip('Location where you are based');" 
                              onmouseout="exit();">Location</span>:</font></div>
      <span style="PADDING-TOP: 6px">
     <select 
                              class="contentyellow" style="WIDTH: 135px; height:21" 
                              name="state1">
        <option value="Andaman and Nicobar">Andaman and Nicobar</option>
                  <option value="Andhra Pradesh">Andhra Pradesh</option>
                  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                  <option value="Assam">Assam</option>
                  <option value="Bihar">Bihar</option>
                  <option value="Chandigarh">Chandigarh</option>
                  <option value="Chhattisgarh">Chhattisgarh</option>
                  <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                  <option value="Daman and Diu">Daman and Diu</option>
                  <option value="Delhi">Delhi</option>
                  <option value="Goa">Goa</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Haryana">Haryana</option>
                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                  <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                  <option value="Jharkhand">Jharkhand</option>
                  <option value="Karnataka">Karnataka</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Lakshadweep">Lakshadweep</option>
                  <option value="Madhya Pradesh">Madhya Pradesh</option>
                  <option value="Maharashtra">Maharashtra</option>
                  <option value="Manipur">Manipur</option>
                  <option value="Meghalaya">Meghalaya</option>
                  <option value="Mizoram">Mizoram</option>
                  <option value="Nagaland">Nagaland</option>
                  <option value="Orissa">Orissa</option>
                  <option value="Other">Other</option>
                  <option value="Puducherry">Puducherry</option>
                  <option value="Punjab">Punjab</option>
                  <option selected value="Rajasthan">Rajasthan</option>
                  <option value="Sikkim">Sikkim</option>
                  <option value="Tamil Nadu">Tamil Nadu</option>
                  <option value="Tripura">Tripura</option>
                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                  <option value="Uttarakhand">Uttarakhand</option>
                  <option value="West Bengal">West Bengal</option>
                  <option value="Other">Other</option>      </select>
      </span>
      </div>
    <div class="searchers">
      <div class="font3">&nbsp;</div>
      <span style="PADDING-TOP: 6px">
      &nbsp;</span><label><input type="submit" name="Submit" value="Search" /></label></div>

  </div>
  </form>
</div>
<div class="login-bg" style="width: 1000px; height: 60px">
<center>
    <div class="login-holder" style="width: 879px; height: 47px"> <font face="Verdana" size="2"  color="white"><b><a style="text-decoration: none" href="interests_received.php"> <font  color="white">Interests Received</font></a>&nbsp; |&nbsp; <a style="text-decoration: none" href="interests_expressed.php"> <font  color="white">Interests Expressed</font></a>&nbsp; |&nbsp; <a href="#" name="link1" id="link1" style="text-decoration: none" onmouseover="MM_showMenu(window.mm_menu_0521105438_0,-4,20,null,'link1')" onmouseout="MM_startTimeout();"><font color="white">Search</font></a> &nbsp; | <a href="#" name="link2" id="link2" style="text-decoration: none" onmouseover="MM_showMenu(window.mm_menu_0521105438_1,-4,20,null,'link2')" onmouseout="MM_startTimeout();"><font color="white">Upgrade</font></a> | &nbsp;<a style="text-decoration: none" href="change_password.php"> <font  color="white">Change Password</font></a>&nbsp; |&nbsp; <a style="text-decoration: none" href="delete_account.php"> <font  color="white">Delete Account</font></a>

</b></font></div>
  </center>

</div><div align="center">
<table width=1000 cellspacing="0" cellpadding="0" background="../images/main.jpg"><tr><td height="109">
<table width="978" height="614">
  <tr valign="top"><td width="29" rowspan="2"></td>
  <td valign="middle" height="74" align="left" colspan="2"><font color="#666666" face="Verdana"size="+2">Welcome <?php echo $row[3];  ?></font></td>
 
  <td width="299" align="center" valign="middle"><b><font color="#999999" size="+1">Upgrade Your Account *</font></b></td>
</tr>
<tr><td width="201" valign="top">
<table width="176" height="232" bgcolor="#000000">
  <tr valign="top"><td  valign="top" align="center"><img src=<?php echo "../".$row[19];  ?> title="<?php echo "Welcome ".$row[3]; ?>" width="166" height="192" style="border: solid; border-color:#FFFFFF;" /></td>
</tr><tr align="center"><td width="76"><font color="#FFFFFF"  >Name : <?php echo $row[3]; ?></font></td>
</tr><tr align="center"><td height="41"><font color="#FFFFFF">Gender : <?php echo $row[5]; ?></font></td></tr></table>
<br /><?php
$check_up=mysql_query("select upgrade_status,upgrade_type,upgrade_date,upgrade_month,upgrade_year from user_info where username='$username'");
$check_up1=mysql_fetch_array($check_up);
if(($check_up1[1]!=Null) and $check_up1[0]!=NULL){

if($check_up1[1]=='gold'){
echo "<font color=gray face=Verdana size=2>Gold Package Joining Date : ".$check_up1[2]."-".$check_up1[3]."-".$check_up1[4]."</font>";

}
if($check_up1[1]=='silver'){
echo "<font color=gray face=Verdana size=2>Silver Package Joining Date : ".$check_up1[2]."-".$check_up1[3]."-".$check_up1[4]."</font>";

}
if($check_up1[1]=='bronze'){
echo "<font color=gray face=Verdana size=2>Bronze Package Joining Date : ".$check_up1[2]."-".$check_up1[3]."-".$check_up1[4]."</font>";

}

}
?>
</td>
<td width="413" valign="top" align="center">
<table width="389" height="291" align="left">
  <tr align="left"><td width="287"><b><font color="#666666">Online Users</font></b></td>
  <td width="90" align="left"><b><font color="#333333" face="Algerian"><?php $user=mysql_query("select * from user_online"); $count_user=mysql_num_rows($user);echo $count_user; ?></font></b></td>
  </tr><tr>
    <td align="left"><b><a href="interests_expressed.php" style="text-decoration: none;"><font color="#666666">Sent Expression Messages</font></a></b></td>
    <td align="left"><b><font color="#333333" face="Algerian"><?php $send = mysql_query("SELECT * from interest WHERE username='$username'"); $send_mess=mysql_num_rows($send); echo $send_mess; ?></font></b></td></tr><tr>
      <td align="left"><b><a href="interests_received.php" style="text-decoration: none;"><font color="#666666"> Received Expression Messages</font></a></b></td>
      <td align="left"><b><font color="#333333" face="Algerian"><?php $send = mysql_query("SELECT * from interest WHERE user_email='$row[4]'"); $send_mess=mysql_num_rows($send); echo $send_mess; ?></font></b></td></tr>

<tr><td align="left" colspan="2"><font color="#990000" face="Andalus" size="+1"><?php $check_up=mysql_query("select upgrade_status,upgrade_type from user_info where username='$username'"); $check_up1=mysql_fetch_array($check_up); if($check_up1[0]=='upgraded'){echo "Current Package : ".$check_up1[1];} ?></font></td></tr>
<tr>
  <td height="146" colspan="2"><font face="Verdana" color="#666666" size="2">
To Activate message services please upgrade your profile*</font></td>
</tr>
</table><br />
</td>
  <td width="299" valign="top">
<table width="274" height="122" border="0" cellPadding="0" cellSpacing="0" style="background:url(../images/conten.png) 0 0 no-repeat;" >
						
	<tr>
								
									<td width="274" height="27" align="center"><font color="#FFFFFF">Gold Package Feature</font></td>
		</tr>
								 
	<tr align=left><td height="18"><font  face="Verdana" size="2" >&nbsp;&nbsp;&nbsp;Unlimited messages.</font> </td>
		</tr>
				 
				 
	<tr>
			 
           <td width="274" height="36" align=left><font  face="Verdana" size="2" >&nbsp;&nbsp;&nbsp;Unlimited Expression Messages.</font> </td>
			
		      </tr><tr>
					 
									<td height="18" align=left><font  face="Verdana" size="2" >&nbsp;&nbsp;&nbsp;Unlimited Mobile No. View.</font> </td>
		</tr><tr>
					 
									<td height="23" align=left><font  face="Verdana" size="2" >&nbsp;&nbsp;&nbsp;Free Live Chat.</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								    <?php
$check_up=mysql_query("select upgrade_status,upgrade_type from user_info where username='$username'");
$check_up1=mysql_fetch_array($check_up);
if($check_up1[0]==NULL){
echo "<A href='upgrade_to_gold.php'><img src='../images/ok.gif' border=none></A></td>";
}
else if(($check_up1[1]=='silver' or $check_up1[1]=='bronze') and $check_up1[0]!=NULL){
echo "<A href='upgrade_to_gold.php?up=ul'><img src='../images/ok.gif' border=none></A></td>";
}
?></td>
		</tr></table>
		<br /><br /><table width="274" height="126" border="0" cellPadding="0" cellSpacing="0" style="background:url(../images/conten.png) 0 0 no-repeat;" >
						
	<tr>
								
									<td width="274" height="26" align="center"><font color="#FFFFFF">Silver Package Feature</font></td>
		</tr>
								 
	<tr align=left><td height="18"><font  face="Verdana" size="2" >&nbsp;&nbsp;&nbsp;Unlimited messages.</font> </td>
		</tr>
				 
				 
	<tr>
			 
           <td width="274" height="36" align=left><font  face="Verdana" size="2" >&nbsp;&nbsp;&nbsp;Unlimited Expression Messages.</font> </td>
			
		      </tr><tr>
					 
									<td height="18" align=left><font  face="Verdana" size="2" >&nbsp;&nbsp;&nbsp;60  Mobile No. View.</font> </td>
		</tr><tr>
					 
									<td height="28" align=left><font  face="Verdana" size="2" >&nbsp;&nbsp;&nbsp;Free Live Chat.</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								    <?php
$check_up=mysql_query("select upgrade_status,upgrade_type from user_info where username='$username'");
$check_up1=mysql_fetch_array($check_up);
if($check_up1[0]==NULL){
echo "<A href='upgrade_to_silver.php'><img src='../images/ok.gif' border=none></A></td>";
}
else if(($check_up1[1]=='bronze') and $check_up1[0]!=NULL){
echo "<A href='upgrade_to_silver.php?up=ul'><img src='../images/ok.gif' border=none></A></td>";
}
?></td>
		</tr></table><br /><br /><table width="274" height="130" border="0" cellPadding="0" cellSpacing="0" style="background:url(../images/conten.png) 0 0 no-repeat;" >
						
	<tr>
								
									<td width="274" height="26" align="center"><font color="#FFFFFF">Bronze Package Feature</font></td>
		</tr>
								 
	<tr align=left>
	  <td height="18"><font  face="Verdana" size="2" >&nbsp;&nbsp;&nbsp;3000 messages.</font> </td>
		</tr>
				 
				 
	<tr>
			 
           <td width="274" height="34" align=left><font  face="Verdana" size="2" >&nbsp;&nbsp;&nbsp;300 Expression Messages.</font> </td>
			
		      </tr><tr>
					 
									<td align=left><font  face="Verdana" size="2" >&nbsp;&nbsp;&nbsp;40  Mobile No. View.</font> </td>
		</tr><tr>
					 
									<td height="28" align=left><font  face="Verdana" size="2" >&nbsp;&nbsp;&nbsp;Free Live Chat.</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								    <?php
$check_up=mysql_query("select upgrade_status,upgrade_type from user_info where username='$username'");
$check_up1=mysql_fetch_array($check_up);
if($check_up1[0]==NULL){
echo "<A href='upgrade_to_bronze.php'><img src='../images/ok.gif' border=none></A></td>";
}
?></td>
		</tr></table>
		
</td><td width="12" rowspan="2"></td>
</tr></table>
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
