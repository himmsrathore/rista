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
if($username=="")
{
 $login="logout";
        echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../login.php?login=".$login."');\n");
		echo("-->\n");
		echo("</script>");
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
<link type="text/css" rel="stylesheet" media="all" href="../css/chat.css" />
<link type="text/css" rel="stylesheet" media="all" href="../css/screen.css" />
<script language="JavaScript" src="../js/mm_menu.js"></script>
<script language="JavaScript" src="../js/mm_bar.js"></script>

<SCRIPT language="javascript">
<!--
<?php
 isProperPass();
 isProper();
 isPass();
?>

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


function validate()
{
	if(trim(document.change_password.pass1.value)=="")
	{
		alert("Enter The Password.");
		document.change_password.pass1.focus();
		return false;
	}
	else if(document.change_password.pass1.value.length<6)
	{
		alert("Password Should Have At Least 6 Letters.");
		document.change_password.pass1.focus();
		document.change_password.pass1.select();
		return false;
	}
		
	if (isPass(document.change_password.pass1.value)==false)
       {
        alert("Valid Password Accepts Only Alphanumeric Characters.");  
        document.change_password.pass1.focus();
  	document.change_password.pass1.select();
	return false;
	}
	
	
	if(trim(document.change_password.pass2.value)=="")
	{
		alert("Enter The Confirm Password.");
		document.change_password.pass2.focus();
		return false;
	}
	if(trim(document.change_password.old_pass.value)=="")
	{
		alert("Enter Your Old Password.");
		document.change_password.old_pass.focus();
		return false;
	}
	
	
var pass=trim(document.change_password.pass1.value);
	var conf_pass=trim(document.change_password.pass2.value);
	if(pass !=conf_pass)
	{
		alert("The Password And Confirm Password Should Match.");
		document.change_password.pass2.focus();
		document.change_password.pass2.select();
		return false;

	}
	return true;
} 

-->
</script>

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
</div>
<div align="center">
<table width=1000 cellspacing="0" cellpadding="0" background="../images/main.jpg"><tr><td width="282"></td>
<td width="716">
<table border="0"  cellspacing="0" cellpadding="0">
					

					
					
					<tr>
						<td  height="26">
						<table height="285" border="0" cellPadding="0" cellSpacing="0">
<form name="change_password" id="change_password" onSubmit="return validate();" method="post" action="success_change_password.php">						
	<tr>
									<td height="26" align="left" colspan="2">&nbsp;									</td>
				  </tr>
	<tr>
									<td height="18" align="left" colspan="2">
									<?php
              if($_REQUEST['status']=="success")
              {
               	echo("<tr><td width=\"100%\" colspan=\"2\" align=\"left\"><b><font color=\"maroon\">");
				echo "Your password has been changed.";
				echo("</font></b></td></tr>");
			}
              if($_REQUEST['status']=="err")
              {
               	echo("<tr><td width=\"100%\" colspan=\"2\" align=\"left\"><b><font color=\"maroon\">");
				echo "Your Old Password is Not Matched Please Re-Enter The Password.";
				echo("</font></b></td></tr>");
			}
              ?>									</td>
				  </tr>
								<tr>
						<td height="52" align="left" colspan="2"><b>
						<font face="Verdana" color="#FF0000">Change Password</font></b></td>
								</tr>
								<tr>
						<td width="178" height="26" align="left"><b>
						<font face="Verdana" size="2">Old Password *</font></b></td>
						<td width="532" height="26" align="left"><font color="#333333" face="Arial">
		<input type="password" tabindex="1" name="old_pass"  size="18"style="font-weight: 700; width:150px; color:#FFFFFF; background-color:#999999;" /></font></td>
					</tr><tr>
						<td width="178" height="26" align="left"><b>
						<font face="Verdana" size="2">Password *</font></b></td>
						<td width="532" height="26" align="left"><font color="#333333" face="Arial">
		<input type="password" tabindex="1" name="pass1"style="font-weight: 700; width:150px; color:#FFFFFF; background-color:#999999;" size="18" /></font></td>
					</tr>
	<tr>
						<td width="178" height="26" align="left"><b>
						<font face="Verdana" size="2">Confirm 
						Password *</font></b></td>
						<td width="532" height="26" align="left"><font color="#333333" face="Arial">
		<input type="password" tabindex="2" name="pass2" style="font-weight: 700; width:150px; color:#FFFFFF; background-color:#999999;" size="18" /></font></td>
				  </tr>
	<tr>
						<td width="178" height="26" align="left">&nbsp;</td>
						<td width="532" height="26" align="left">&nbsp;</td>
				  </tr>
								<tr>
									<td height="26" width="178" align="left">&nbsp;</td>
									<td height="26" width="532" align="left">
								  <input type=submit value=Submit tabindex=2 style="background:url(../images/send.gif);width:81px; height:32px; color:#FFFFFF; border:none;"></td>
								</tr>
								<tr>
									<td height="26" width="178" align="left">&nbsp;</td>
									<td height="26" width="532" align="left">&nbsp;									</td>
								</tr>
						  </form>
						</table>
						&nbsp;</td>
					</tr>
					<tr>
						<td width="980" height="26">&nbsp;</td>
						<td width="6" height="26">&nbsp;</td>
					</tr>
					<tr>
						<td width="980" height="26">&nbsp;</td>
						<td width="6" height="26">&nbsp;</td>
					</tr>
					<tr>
						<td width="980" height="26">&nbsp;</td>
						<td width="6" height="26">&nbsp;</td>
					</tr>
					<tr>
						<td width="980" height="26">&nbsp;</td>
						<td width="6" height="26">&nbsp;</td>
					</tr>
					
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
