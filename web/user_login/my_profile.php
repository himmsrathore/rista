<?php
session_start();
	require("../script/common.php");
	require("../script/mysql.php");
require("../script/openfile.php");
require("../script/validation.php");
include('../ps_pagination.php');

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

mysql_close();

}



if($username=="")
{
 $login="logout";
        echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../login.php?login=".$login."');\n");
		echo("-->\n");
		echo("</script>");
		}
if($username=="")
{
 $login="logout";
        echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../login.php?login=".$login."');\n");
		echo("-->\n");
		echo("</script>");
		}
		
$result = queryselect("*","user_info","username = '".$username."'",$link);
if(mysql_num_rows($result)!=0)
{
 $row = mysql_fetch_row($result); 
  

	
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" rel="stylesheet" media="all" href="../css/chat.css" />
<link type="text/css" rel="stylesheet" media="all" href="../css/screen.css" />
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

      <div class="link-holder2"><a href="index.php">My Ristaa</a></div>
      <div class="link-holder3"><a href="my_profile.php.php">My Profile</a></div>
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
    <div class="login-holder" style="width: 879px; height: 47px"> <font face="Verdana" size="2"><b><a style="text-decoration: none" href="interests_received.php"> <font color="white">Interests Received</font></a>&nbsp;|&nbsp;<a style="text-decoration: none" href="interests_expressed.php"> <font  color="white">Interests Expressed</font></a>&nbsp;|&nbsp;<a href="#" name="link1" id="link1" style="text-decoration: none" onmouseover="MM_showMenu(window.mm_menu_0521105438_0,-4,20,null,'link1')" onmouseout="MM_startTimeout();"><font  color="white">Search</font></a>&nbsp;|<a href="#" name="link2" id="link2" style="text-decoration: none" onmouseover="MM_showMenu(window.mm_menu_0521105438_1,-4,20,null,'link2')" onmouseout="MM_startTimeout();"><font color="white">Upgrade</font></a>|&nbsp;<a style="text-decoration: none" href="change_picture.php"> <font  color="white">Change Picture</font></a>&nbsp; |&nbsp;<a style="text-decoration: none" href="change_password.php"> <font  color="white">Change Password</font></a>&nbsp; |&nbsp; <a style="text-decoration: none" href="delete_account.php"> <font  color="white">Delete Account</font></a>

</b></font></div>
  </center>
</div><div align="center">
<table width=1000 cellspacing="0" cellpadding="0" background="../images/main.jpg"><tr>
  <td height="53" align="center"><font  size="+2" style="text-decoration:underline"  color="#666666" >Your Profile</font></td>
</tr><tr><td>
<table border="0" width="989" cellspacing="0" cellpadding="0">
					

					
					
					<tr>
						<td height="26" colspan="3" valign="top" align="center"><img border="0" src="../<?php echo $row[19];?>" width="123" height="148" style="border: 1px solid #000000" title="<?php echo $row[3];?>"></td>
						<td>
						<table width="89%" border="0" cellPadding="0" cellSpacing="0">
							

<?php
$status = $_GET['status'];
if( $status=='s' ){

echo "<tr>
	<td   height='26' align='left'colspan=2 align=center><b>
        <font color='green'>Your Profile Picture Successfully Changed.</font></b></td>
</tr>";
}
if( $status=='g_s' ){

echo "<tr>
	<td   height='26' align='left'colspan=2 align=center><b>
        <font color='green'>General Info Successfully Updated.</font></b></td>
</tr>";
}
if( $status=='p_s' ){

echo "<tr>
	<td  height='26' align='left'colspan=2 align=center><b>
        <font color='green' >Your Physical Attribute Successfully Updated.</font></b></td>
</tr>";
}
if( $status=='e_s' ){

echo "<tr>
	<td  height='26' align='left'colspan=2 align=center><b>
        <font color='green'>Your Education & Occupation Successfully Updated.</font></b></td>
</tr>";
}
if( $status=='h_s' ){

echo "<tr>
	<td  height='26' align='left'colspan=2 align=center><b>
        <font color='green' >Your Habits Successfully Updated.</font></b></td>
</tr>";
}
if( $status=='a_s' ){

echo "<tr>
	<td  height='26' align='left'colspan=2 align=center><b>
        <font color='green' >Your Astrological Info. Successfully Updated.</font></b></td>
</tr>";
}
if( $status=='f_s' ){

echo "<tr>
	<td height='26' align='left'colspan=2 align=center><b>
        <font color='green' >Your Family Profile Successfully Updated.</font></b></td>
</tr>";
}

?>

                                                <tr><td colspan="2" height="38" align="left" style="background:url(../images/bb.png) 0 0 no-repeat; width:363px; height:33px;"><b>
						<font  face="Verdana" color="#FFFFFF"> &nbsp;&nbsp;&nbsp;General Info.</font></b></td>
						
						<td width="183" height="38" align="left"><b>
						<a style="text-decoration: none" href="edit_general_info.php">
						<font face="Verdana" color="#FF0000">Edit</font></a></b></td>
								</tr>

							<tr>
									<td height="26" width="182" align="left"><b>
									<font face="Verdana" size="2" color="#996600">
									Name</font></b></td>
									<td width="312" align="left" valign="middle">
									<font face="Verdana" size="2"><?php echo $row[3];?></font></td>
						  </tr>
								<tr>
									<td height="26" width="182" align="left"><b>
									<font face="Verdana" size="2" color="#996600">
									Email</font></b></td>
									<td align="left" colspan="2">
									<font face="Verdana" size="2"><?php echo $row[4];?></font></td>
								</tr>

								<tr>
									<td height="26" width="182" align="left"><b>
									<font face="Verdana" size="2" color="#996600">
									Gender</font></b></td>
									<td align="left" valign="middle" colspan="2">
									<font face="Verdana" size="2"><?php echo $row[5];?></font></td>
								</tr>
								<tr>
									<td height="26" width="182" align="left"><b>
									<font face="Verdana" size="2" color="#996600">
									Date of Birth</font></b></td>
									<td align="left" colspan="2">
									<font face="Verdana" size="2"><?php echo $row[6]."-".$row[7]."-".$row[8];?></font></td>
								</tr>
								<tr>
									<td height="26" width="182" align="left"><b>
									<font face="Verdana" size="2" color="#996600">
									Birth Time</font></b></td>
									<td align="left" colspan="2">
									<font face="Verdana" size="2">
									<?php echo $row[9].":".$row[10].":".$row[11];?></font></td>
								</tr>
								<tr>
									<td height="26" width="182" align="left"><b>
									<font face="Verdana" size="2" color="#996600">
									Birth Place</font></b></td>
									<td align="left" valign="middle" colspan="2">
									<font face="Verdana" size="2"><?php echo $row[58];?></font></td>
								</tr>
								<tr>
									<td height="26" width="182" align="left"><b>
									<font face="Verdana" size="2" color="#996600">
									Cast</font></b></td>
									<td align="left" colspan="2">
									<font face="Verdana" size="2"><?php echo $row[12];?></font></td>
								</tr>
								<tr>
									<td height="26" width="182" align="left"><b>
									<font face="Verdana" size="2" color="#996600">
									Mobile No.</font></b></td>
									<td height="26" align="left" colspan="2">
									<font face="Verdana" size="2"><?php echo $row[13];?></font></td>
								</tr>
								<tr>
									<td height="26" width="182" align="left"><b>
									<font face="Verdana" size="2" color="#996600">
									Marital Status</font></b></td>
									<td height="26" align="left" colspan="2">
									<font face="Verdana" size="2"><?php echo $row[14];?></font></td>
								</tr>
								<tr>
									<td height="26" width="182" align="left"><b>
									<font face="Verdana" size="2" color="#996600">
									Country</font></b></td>
									<td height="26" align="left" colspan="2">
									<font face="Verdana" size="2"><?php echo $row[15];?></font></td>
								</tr>
								<tr>
									<td height="26" width="182" align="left"><b>
									<font face="Verdana" size="2" color="#996600">
									State</font></b></td>
									<td height="26" align="left" colspan="2">
									<font face="Verdana" size="2"><?php echo $row[16];?></font></td>
								</tr>
								<tr>
									<td height="26" width="182" align="left"><b>
									<font face="Verdana" size="2" color="#996600">
									City </font></b></td>
									<td height="26" align="left" colspan="2">
									<font face="Verdana" size="2"><?php echo $row[17];?></font></td>
								</tr>
								<tr>
									<td height="26" width="182" align="left"><b>
									<font face="Verdana" size="2" color="#996600">
									Religion </font></b></td>
									<td height="26" align="left" colspan="2">
									<font face="Verdana" size="2"><?php echo $row[18];?></font></td>
								</tr>
								<tr>
									<td height="26" width="182" align="left"><b>
									<font face="Verdana" size="2" color="#996600">
									About Me </font></b></td>
									<td height="26" align="left" colspan="2">
									<font face="Verdana" size="2"><?php echo $row[56];?></font></td>
								</tr>
								<tr><td height="50">&nbsp;</td>
								<td>&nbsp;</td>
								</tr>
								<tr>
						<td height="38" colspan="2" align="left"style="background:url(../images/bb.png) 0 0 no-repeat; width:373px; height:33px;"><b>
						<font  face="Verdana" color="#FFFFFF"> &nbsp;&nbsp;&nbsp;Physical Attributes</font></b></td>
						
						<td width="183" height="38" align="left"><b>
						<a style="text-decoration: none" href="edit_physical_attributes.php">
						<font face="Verdana" color="#FF0000">Edit</font></a></b></td>
								</tr>
								<tr>
						<td width="182" height="26" align="left"><b>
						<font face="Verdana" size="2" color="#996600">Height </font></b></td>
						<td height="26" align="left" colspan="2">
						<font face="Verdana" size="2"><?php echo $row[20];?></font></td>
								</tr>
								<tr>
						<td width="182" height="26" align="left"><b>
						<font face="Verdana" size="2" color="#996600">Body Type </font></b></td>
						<td height="26" align="left" colspan="2">
						<font face="Verdana" size="2"><?php echo $row[21];?></font></td>
								</tr>
								<tr>
						<td width="182" height="26" align="left"><b>
						<font face="Verdana" size="2" color="#996600">Complexion </font></b></td>
						<td height="26" align="left" colspan="2">
						<font face="Verdana" size="2"><?php echo $row[22];?></font></td>
								</tr>
								<tr>
						<td width="182" height="26" align="left"><b>
						<font face="Verdana" size="2" color="#996600">Physical 
						Status </font></b></td>
						<td height="26" align="left" colspan="2">
						<font face="Verdana" size="2"><?php echo $row[23];?></font></td>
								</tr><tr><td height="51">&nbsp;</td>
								<td>&nbsp;</td>
								</tr>
								<tr>
						<td height="39" align="left" colspan="2" style="background:url(../images/bb.png) 0 0 no-repeat; width:373px; height:33px;"><b>
						<font  face="Verdana" color="#FFFFFF"> &nbsp;&nbsp;&nbsp;Education &amp; 
						Occupation</font></b></td>
						
						<td width="183" height="39" align="left"><b>
						<a style="text-decoration: none" href="edit_occupation.php">
						<font face="Verdana" color="#FF0000">Edit</font></a></b></td>
								</tr>
								<tr>
						<td width="182" height="26" align="left"><b>
						<font face="Verdana" size="2" color="#996600">Education </font></b></td>
						<td height="26" align="left" colspan="2">
						<font face="Verdana" size="2"><?php echo $row[24];?></font></td>
								</tr>
								<tr>
						<td width="182" height="26" align="left"><b>
						<font face="Verdana" size="2" color="#996600">Occupation </font></b></td>
						<td height="26" align="left" colspan="2">
						<font face="Verdana" size="2"><?php echo $row[25];?></font></td>
								</tr>
								<tr>
						<td width="182" height="26" align="left"><b>
						<font face="Verdana" size="2" color="#996600">Annual 
						Income </font></b></td>
						<td height="26" align="left" colspan="2">
						<font face="Verdana" size="2"><?php if ($row[26]!="None")
                        echo $row[26];
                        else
                        echo "None";?></font></td>
								</tr><tr><td height="51">&nbsp;</td>
								<td>&nbsp;</td>
								</tr>
								<tr>
						<td height="40" align="left" colspan="2" style="background:url(../images/bb.png) 0 0 no-repeat; width:373px; height:33px;"><b>
						<font  face="Verdana" color="#FFFFFF"> &nbsp;&nbsp;&nbsp;Habits</font></b></td>
						
						<td width="183" height="40" align="left"><b>
						<a style="text-decoration: none" href="edit_habits.php">
						<font face="Verdana" color="#FF0000">Edit</font></a></b></td>
								</tr>
								<tr>
						<td width="182" height="26" align="left"><b>
						<font face="Verdana" size="2" color="#996600">Food </font></b></td>
						<td height="26" align="left" colspan="2">
						<font face="Verdana" size="2"><?php echo $row[27];?></font></td>
								</tr>
								<tr>
						<td width="182" height="26" align="left"><b>
						<font face="Verdana" size="2" color="#996600">Smoking </font></b></td>
						<td height="26" align="left" colspan="2">
						<font face="Verdana" size="2"><?php echo $row[28];?></font></td>
								</tr>
								<tr>
						<td width="182" height="26" align="left"><b>
						<font face="Verdana" size="2" color="#996600">Drinking </font></b></td>
						<td height="26" align="left" colspan="2">
						<font face="Verdana" size="2"><?php echo $row[29];?></font></td>
								</tr><tr><td height="54">&nbsp;</td>
								<td>&nbsp;</td>
								</tr>
								<tr>
						<td height="38" align="left" colspan="2" style="background:url(../images/bb.png) 0 0 no-repeat; width:373px; height:33px;"><b>
						<font  face="Verdana" color="#FFFFFF"> &nbsp;&nbsp;&nbsp;Astrological Info.</font></b></td>
						
						<td width="183" height="38" align="left"><b>
						<a style="text-decoration: none" href="edit_astrological_info.php">
						<font face="Verdana" color="#FF0000">Edit</font></a></b></td>
								</tr>
								<tr>
						<td width="182" height="26" align="left"><b>
						<font face="Verdana" size="2" color="#996600">Manglik </font></b></td>
						<td height="26" align="left" colspan="2">
						<font face="Verdana" size="2"><?php echo $row[30];?></font></td>
								</tr>
								<tr>
						<td width="182" height="26" align="left"><b>
						<font face="Verdana" size="2" color="#996600">Rashi </font></b></td>
						<td height="26" align="left" colspan="2">
						<font face="Verdana" size="2">
						<?php echo $row[31];?></font></td>
								</tr><tr><td height="56">&nbsp;</td>
								<td>&nbsp;</td>
								</tr>
								<tr>
						<td height="39" align="left" colspan="2" style="background:url(../images/bb.png) 0 0 no-repeat; width:373px; height:33px;"><b>
						<font  face="Verdana" color="#FFFFFF"> &nbsp;&nbsp;&nbsp;Family Profile</font></b></td>
						
						<td width="183" height="39" align="left"><b>
						<a style="text-decoration: none" href="edit_family_profile.php">
						<font face="Verdana" color="#FF0000">Edit</font></a></b></td>
								</tr>
								<tr>
						<td width="182" height="26" align="left"><b>
						<font face="Verdana" size="2" color="#996600">Family 
						Status</font></b></td>
						<td height="26" align="left" colspan="2">
						<font face="Verdana" size="2"><?php echo $row[32];?></font></td>
								</tr>
								<tr>
						<td width="182" height="26" align="left"><b>
						<font face="Verdana" size="2" color="#996600">Family 
						Type</font></b></td>
						<td height="26" align="left" colspan="2">
						<font face="Verdana" size="2"><?php echo $row[33];?></font></td>
								</tr>
								<tr>
						<td width="182" height="26" align="left"><b>
						<font face="Verdana" size="2" color="#996600">Family 
						Values</font></b></td>
						<td height="26" align="left" colspan="2">
						<font face="Verdana" size="2"><?php echo $row[34];?></font></td>
								</tr>
								<tr>
						<td width="182" height="26" align="left"><b>
						<font face="Verdana" size="2" color="#996600">About My Family</font></b></td>
						<td height="26" align="left" colspan="2">
						<font face="Verdana" size="2"><?php echo $row[57];?></font></td>
								</tr>
								<tr>
									<td height="26" width="182" align="left">&nbsp;</td>
									<td height="26" align="left" colspan="2">&nbsp;									</td>
								</tr>
							
						</table>
&nbsp;</td>
					</tr>
					<tr>
						<td height="26" colspan="3">&nbsp;</td>
						<td width="761" height="26">&nbsp;</td>
					</tr>
					<tr>
						<td height="26" colspan="3">&nbsp;</td>
						<td width="761" height="26">&nbsp;</td>
					</tr>
<?php 
}
?>					
				</table>
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
