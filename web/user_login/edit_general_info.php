<?php
session_start();
	require("../script/common.php");
	require("../script/mysql.php");
require("../script/openfile.php");
require("../script/validation.php");


	$link = connect($hname,$uname,$passwd);
	usedatabase($dbname,$link);	
	

$username=$_SESSION['username'];

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
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ristaa.com - Hindu Matrimony, Hindu Matrimonial</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../css/style-tango.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="../js/mm_menu.js"></script>
<script language="JavaScript" src="../js/mm_bar.js"></script>

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
function validate()
{
if(trim(document.general_info.name.value)=="")
		{
		alert("Enter Your Name.");
		document.general_info.name.focus();
		document.general_info.name.select();
		return false;
		}
if(trim(document.general_info.cast.value)=="")
		{
		alert("Enter Your Cast.");
		document.general_info.cast.focus();
		document.general_info.cast.select();
		return false;
		}
if(trim(document.general_info.mobile_no.value)=="")
		{
		alert("Enter Your Mobile no.");
		document.general_info.mobile_no.focus();
		document.general_info.mobile_no.select();
		return false;
		}
if(trim(document.general_info.city.value)=="")
		{
		alert("Enter Your City.");
		document.general_info.city.focus();
		document.general_info.city.select();
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
      <div class="link-holder3"><a href="my_profile.php">My Profile</a></div>
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
<table width=1000 cellspacing="0" cellpadding="0" background="../images/main.jpg"><tr><td width="251"></td>
<td width="747">
<table width="428" border="0" cellpadding="0"   cellspacing="0">
					

					
					
					<tr>
						<td height="26" colspan="3">
						<table width="107%" border="0" cellPadding="0" cellSpacing="0"  >
<form name="general_info" id="general_info" onSubmit="return validate();" action="success_general_info.php">						
	<tr>
									<td height="26" width="59%" align="left">&nbsp;</td>
									<td width="41%" align="left" valign="middle">&nbsp;									</td>
				  </tr>
								<tr>
						<td height="53" colspan="2" align="left"><b>
						<font face="Verdana" color="#FF0000">Edit Your General Info.</font></b></td>
								</tr>

							<tr>
									<td height="26" width="59%" align="left"><b>
									<font face="Verdana" size="2" >
									Name</font></b></td>
									<td width="41%" align="left" valign="middle">
									<font face="Verdana" size="2"><font  face="Arial">
		<input tabindex="1" name="name" type=text style="font-weight: 700; color:#FFFFFF; background-color:#999999; width:250px;" value="<?php echo $row[3];?>"/></font></font></td>
				  </tr>

								<tr>
									<td height="26" width="59%" align="left"><b>
									<font  size="2" face="Verdana">
									Gender</font></b></td>
									<td width="41%" align="left" valign="middle">
									<font face="Verdana" size="2"><font  face="Arial">
		<select id="gender" name="gender" size="1" tabindex="3" style="font-weight: 700; color:#FFFFFF; background-color:#999999; width:250px;">
                  <option selected value="<?php echo $row[5];?>"><?php echo $row[5];?></option>
                  <option value="Female">Female</option>
                  <option value="Male">Male</option>
                  </select></font></font></td>
								</tr>
								<tr>
									<td height="26" width="59%" align="left"><b>
									<font  size="2" face="Verdana">
									Date of Birth</font></b></td>
									<td width="41%" align="left">
									<font face="Verdana" size="2"><font  face="Arial">
									<select name="DOB_date"  id="DOB_date" tabindex="4" style="font-weight: 700; color:#FFFFFF; background-color:#999999;">
                                    <option selected name="date" value="<?php echo $row[6];?>"><?php echo $row[6];?></option>
                                    <option name="date" value="1"> 1 </option>
                                    <option name="date" value="2"> 2 </option>
                                    <option name="date" value="3"> 3 </option>
                                    <option name="date" value="4"> 4 </option>
                                    <option name="date" value="5"> 5 </option>
                                    <option name="date" value="6"> 6 </option>
                                    <option name="date" value="7"> 7 </option>
                                    <option name="date" value="8"> 8 </option>
                                    <option name="date" value="9"> 9 </option>
                                    <option name="date" value="10"> 10 </option>
                                    <option name="date" value="11"> 11 </option>
                                    <option name="date" value="12"> 12 </option>
                                    <option name="date" value="13"> 13 </option>
                                    <option name="date" value="14"> 14 </option>
                                    <option name="date" value="15"> 15 </option>
                                    <option name="date" value="16"> 16 </option>
                                    <option name="date" value="17"> 17 </option>
                                    <option name="date" value="18"> 18 </option>
                                    <option name="date" value="19"> 19 </option>
                                    <option name="date" value="20"> 20 </option>
                                    <option name="date" value="21"> 21 </option>
                                    <option name="date" value="22"> 22 </option>
                                    <option name="date" value="23"> 23 </option>
                                    <option name="date" value="24"> 24 </option>
                                    <option name="date" value="25"> 25 </option>
                                    <option name="date" value="26"> 26 </option>
                                    <option name="date" value="27"> 27 </option>
                                    <option name="date" value="28"> 28 </option>
                                    <option name="date" value="29"> 29 </option>
                                    <option name="date" value="30"> 30 </option>
                                    <option name="date" value="31"> 31 </option>
                                  </select></font><b><font size="2" face="Arial" >
								  </font></b><font  face="Arial">
								  <select name="DOB_month" tabindex="5" id="DOB_month" style="font-weight: 700; color:#FFFFFF; background-color:#999999;" >
                                  <option selected name="date" value="<?php echo $row[7];?>"><?php echo $row[7];?></option>
                                    <option name="date" value="1"> 1 </option>
                                    <option name="date" value="2"> 2 </option>
                                    <option name="date" value="3"> 3 </option>
                                    <option name="date" value="4"> 4 </option>
                                    <option name="date" value="5"> 5 </option>
                                    <option name="date" value="6"> 6 </option>
                                    <option name="date" value="7"> 7 </option>
                                    <option name="date" value="8"> 8 </option>
                                    <option name="date" value="9"> 9 </option>
                                    <option name="date" value="10"> 10 </option>
                                    <option name="date" value="11"> 11 </option>
                                    <option name="date" value="12"> 12 </option>
                                  </select></font><b><font size="2" face="Arial" >
								  </font></b><font  face="Arial">
								  <select name="DOB_year"  id="DOB_year" tabindex="6" style="font-weight: 700; color:#FFFFFF; background-color:#999999;">
                                  <option selected name="date" value="<?php echo $row[8];?>"><?php echo $row[8];?></option>
                                    <option name="date" value="1960"> 1960 </option>
                                    <option name="date" value="1961"> 1961 </option>
                                    <option name="date" value="1962"> 1962 </option>
                                    <option name="date" value="1963"> 1963 </option>
                                    <option name="date" value="1964"> 1964 </option>
                                    <option name="date" value="1965"> 1965 </option>
                                    <option name="date" value="1966"> 1966 </option>
                                    <option name="date" value="1967"> 1967 </option>
                                    <option name="date" value="1968"> 1968 </option>
                                    <option name="date" value="1969"> 1969 </option>
                                    <option name="date" value="1970"> 1970 </option>
                                    <option name="date" value="1971"> 1971 </option>
                                    <option name="date" value="1972"> 1972 </option>
                                    <option name="date" value="1973"> 1973 </option>
                                    <option name="date" value="1974"> 1974 </option>
                                    <option name="date" value="1975"> 1975 </option>
                                    <option name="date" value="1976"> 1976 </option>
                                    <option name="date" value="1977"> 1977 </option>
                                    <option name="date" value="1978"> 1978 </option>
                                    <option name="date" value="1979"> 1979 </option>
                                    <option name="date" value="1980"> 1980 </option>
                                    <option name="date" value="1981"> 1981 </option>
                                    <option name="date" value="1982"> 1982 </option>
                                    <option name="date" value="1983"> 1983 </option>
                                    <option name="date" value="1984"> 1984 </option>
                                    <option name="date" value="1985"> 1985 </option>
                                    <option name="date" value="1986"> 1986 </option>
                                    <option name="date" value="1987"> 1987 </option>
                                    <option name="date" value="1988"> 1988 </option>
                                    <option name="date" value="1989"> 1989 </option>
                                    <option name="date" value="1990"> 1990 </option>
                                    <option name="date" value="1991"> 1991 </option>
                                    <option name="date" value="1992"> 1992 </option>
                                    <option name="date" value="1993"> 1993 </option>
                                    <option name="date" value="1994"> 1994 </option>
                                    <option name="date" value="1995"> 1995 </option>
                                    <option name="date" value="1996"> 1996 </option>
                                    <option name="date" value="1997"> 1997 </option>
                                    <option name="date" value="1998"> 1998 </option>
                                    <option name="date" value="1999"> 1999 </option>
                                    <option name="date" value="2000"> 2000 </option>
                                  </select></font></font></td>
								</tr>
								<tr>
									<td height="26" width="59%" align="left"><b>
									<font  size="2" face="Verdana">
									Birth Time</font></b></td>
									<td width="41%" align="left">
									<font face="Verdana" size="2">
									<b><font size="2" face="Arial" >
									<select size="1" name="hour" tabindex="7" style="font-weight: 700; color:#FFFFFF; background-color:#999999;">
		<option selected value="<?php echo $row[9];?>"><?php echo $row[9];?></option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		</select> <select size="1" name="minute" tabindex="8" style="font-weight: 700; color:#FFFFFF; background-color:#999999;">
		<option selected value="<?php echo $row[10];?>"><?php echo $row[10];?></option>
		<option value="00">00</option>
		<option value="01">01</option>
		<option value="02">02</option>
		<option value="03">03</option>
		<option value="04">04</option>
		<option value="05">05</option>
		<option value="06">06</option>
		<option value="07">07</option>
		<option value="08">08</option>
		<option value="09">09</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
		<option value="32">32</option>
		<option value="33">33</option>
		<option value="34">34</option>
		<option value="35">35</option>
		<option value="36">36</option>
		<option value="37">37</option>
		<option value="38">38</option>
		<option value="39">39</option>
		<option value="40">40</option>
		<option value="41">41</option>
		<option value="42">42</option>
		<option value="43">43</option>
		<option value="44">44</option>
		<option value="45">45</option>
		<option value="46">46</option>
		<option value="47">47</option>
		<option value="48">48</option>
		<option value="49">49</option>
		<option value="50">50</option>
		<option value="51">51</option>
		<option value="52">52</option>
		<option value="53">53</option>
		<option value="54">54</option>
		<option value="55">55</option>
		<option value="56">56</option>
		<option value="57">57</option>
		<option value="58">58</option>
		<option value="59">59</option>
	
		</select> <select size="1" name="AM" tabindex="9" style="font-weight: 700; color:#FFFFFF; background-color:#999999;">
<option selected value="<?php echo $row[11];?>"><?php echo $row[11];?></option>
		<option value="AM">AM</option>
		<option value="PM">PM</option>
		</select></font></b></font></td>
								</tr>
								
							<tr>
									<td height="26" width="59%" align="left"><b>
									<font face="Verdana" size="2" >
									Birth Place</font></b></td>
									<td width="41%" align="left" valign="middle">
									<font face="Verdana" size="2"><font  face="Arial">
		<input tabindex="1" name="birth_place" type=text style="font-weight: 700; color:#FFFFFF; background-color:#999999; width:250px;" value="<?php echo $row[58];?>"/></font></font></td>
				  </tr>
								<tr>
									<td height="26" width="59%" align="left"><b>
									<font  size="2" face="Verdana">
									Cast</font></b></td>
									<td width="41%" align="left">
									<b>
						<font  face="Verdana" size="2">
		<select id="cast" name="cast" size="1" tabindex="6" style="font-weight: 700; color:#FFFFFF; background-color:#999999; width:250px;">
                  <option selected value="<?php echo $row[12];?>"><?php echo $row[12];?></option>
<option>Agarwal</option>
<option>Baniya</option>
<option>Bishnoi/Vishnoi</option>
<option>Brahmin</option>
<option>Chandravanshi</option><option>Kahar</option>
<option>Chaudary</option>
<option>Chaurasia</option>
<option>Chhetri</option>
<option>Devang Koshthi</option>
<option>Dhobi</option>
<option>Dusadh (Paswan)</option>
<option>Ganda</option>
<option>Garhwali</option>
<option>Goan</option>
<option>Gujjar</option>
<option>Gupta</option>
<option>Gurav</option>
<option>Gurjar</option>
<option>Jaiswal</option>
<option>Jangra</option>
<option>Jat</option>
<option>Jadav</option>
<option>Jogi (Nath)</option>
<option>Kadava Patel</option>
<option>Kahar</option>
<option>Kalal</option>
<option>Kalar</option>
<option>Kalwar</option>
<option>Kamboj</option>
<option>Kashyap</option>
<option>Katiya</option>
<option>Kayastha</option>
<option>Khandelwal</option>
<option>Khatri</option>
<option>Kharwar</option>
<option>Kori</option>
<option>Kshatriya</option>
<option>Kumhar</option>
<option>Kurmi Kshatriya</option>
<option>Kushwaha (Koiri)</option>
<option>Leva Patel</option>
<option>Lingayath</option>
<option>Lodhi Rajput</option>
<option>Mahajan</option>
<option>Mahar</option>
<option>Maheshwari</option>
<option>Mali</option>
<option>Mallah</option>
<option>Maratha</option>
<option>Mathur</option>
<option>Meena</option>
<option>Mehra</option>
<option>Nai</option>
<option>Oswal</option>
<option>Pal</option>
<option>Pasi</option>
<option>Patel</option>
<option>Raigar</option>
<option>Rajbhar</option>
<option>Rajput</option>
<option>Rawat</option>
<option>SC</option>
<option>ST</option>
<option>Sahu</option>
<option>Saini</option>
<option>Sindhi</option>
<option>Sonar</option>
<option>Suthar</option>
<option>Teli</option>
<option>Thakur</option>
<option>Vaishnav</option>
<option>Vaishya</option>
<option>Varshney</option>
<option>Vishwakarma</option>
<option>Yadav</option>               
                  </select></font></b></td>
								</tr>
								<tr>
									<td height="26" width="59%" align="left"><b>
									<font  size="2" face="Verdana">
									Mobile No.</font></b></td>
									<td height="26" width="41%" align="left">
									<font face="Verdana" size="2"><b><font  face="Verdana" size="2">
								  <input tabindex="11" type=text name="mobile_no" style="font-weight: 700; color:#FFFFFF; background-color:#999999; width:250px;" value="<?php echo $row[13];?>" /></font></b></font></td>
								</tr>
								<tr>
									<td height="26" width="59%" align="left"><b>
									<font  size="2" face="Verdana">
									Marital Status</font></b></td>
									<td height="26" width="41%" align="left">
									<font face="Verdana" size="2"><b><font  face="Verdana" size="2">
									<select id="marital_status" name="marital_status" size="1" tabindex="12" style="font-weight: 700; width:250px; color:#FFFFFF; background-color:#999999;">
                  <option selected value="<?php echo $row[14];?>"><?php echo $row[14];?></option>
                  <option value="Unmarried">Unmarried</option>
					<option value="Widower">Widower</option>
					<option value="Divorced">Divorced</option>
					<option value="Awaiting Divorce">Awaiting Divorce</option>
                  </select></font></b></font></td>
								</tr>
								<tr>
									<td height="26" width="59%" align="left"><b>
									<font  size="2" face="Verdana">
									Country</font></b></td>
									<td height="26" width="41%" align="left">
									<font face="Verdana" size="2"><b><font face="Verdana" color="#00348A">
									<select id="Country" name="country" size="1" tabindex="13" style="font-weight: 700; color:#FFFFFF; width:250px;background-color:#999999;">
                  <option selected value="<?php echo $row[15];?>"><?php echo $row[15];?></option>
                  <option value="Australia ">Australia</option>
                  <option value="Bahrain ">Bahrain</option>
                  <option value="Bangladesh ">Bangladesh</option>
                  <option value="Belgium ">Belgium</option>
                  <option value="Canada ">Canada</option>
                  <option value="Doha ">Doha</option>
                  <option value="Dubai ">Dubai</option>
                  <option value="France ">France</option>
                  <option value="Germany ">Germany</option>
                  <option value="Hong Kong ">Hong Kong</option>
                  <option value="India">India</option>
                  <option value="Indonesia ">Indonesia</option>
                  <option value="Ireland ">Ireland</option>
                  <option value="Italy ">Italy</option>
                  <option value="Japan ">Japan</option>
                  <option value="Kenya ">Kenya</option>
                  <option value="Kuwait ">Kuwait</option>
                  <option value="Lebanon ">Lebanon</option>
                  <option value="Libya ">Libya</option>
                  <option value="Malaysia ">Malaysia</option>
                  <option value="Maldives ">Maldives</option>
                  <option value="Mauritius ">Mauritius</option>
                  <option value="Mexico ">Mexico</option>
                  <option value="Nepal ">Nepal</option>
                  <option value="Netherlands ">Netherlands</option>
                  <option value="New Zealand ">New Zealand</option>
                  <option value="Norway ">Norway</option>
                  <option value="Oman ">Oman</option>
                  <option value="Other   ">Other</option>
                  <option value="Pakistan ">Pakistan</option>
                  <option value="Qatar ">Qatar</option>
                  <option value="Quilon ">Quilon</option>
                  <option value="Russia ">Russia</option>
                  <option value="Saudi Arabia ">Saudi Arabia</option>
                  <option value="Singapore ">Singapore</option>
                  <option value="South Africa ">South Africa</option>
                  <option value="South Korea ">South Korea</option>
                  <option value="Spain ">Spain</option>
                  <option value="Sri Lanka ">Sri Lanka</option>
                  <option value="Sweden ">Sweden</option>
                  <option value="Switzerland ">Switzerland</option>
                  <option value="Thailand ">Thailand</option>
                  <option value="UAE ">UAE</option>
                  <option value="UK ">UK</option>
                  <option value="US ">US</option>
                  <option value="Yemen ">Yemen</option>
                  <option value="Zimbabwe ">Zimbabwe</option>
                  <option value="Other">Other</option>
                  </select></font></b></font></td>
								</tr>
								<tr>
									<td height="26" width="59%" align="left"><b>
									<font  size="2" face="Verdana">
									State</font></b></td>
									<td height="26" width="41%" align="left">
									<font face="Verdana" size="2">
                  <b><font face="Verdana" color="#00348A">
                  <select id="state" name="state" size="1" tabindex="14" style="font-weight: 700; color:#FFFFFF;  width:250px;background-color:#999999;">
                  <option selected value="<?php echo $row[16];?>"><?php echo $row[16];?></option>
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
                  <option value="Rajasthan">Rajasthan</option>
                  <option value="Sikkim">Sikkim</option>
                  <option value="Tamil Nadu">Tamil Nadu</option>
                  <option value="Tripura">Tripura</option>
                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                  <option value="Uttarakhand">Uttarakhand</option>
                  <option value="West Bengal">West Bengal</option>
                  <option value="Other">Other</option>
                  </select></font></b></font></td>
								</tr>
								<tr>
									<td height="26" width="59%" align="left"><b>
									<font  size="2" face="Verdana">
									City </font></b></td>
									<td height="26" width="41%" align="left">
									<font face="Verdana" size="2"><b><font  face="Verdana" size="2">
								  <input tabindex="15" type=text name="city" style="font-weight: 700; color:#FFFFFF; width:250px; background-color:#999999;" value="<?php echo $row[17];?>" /></font></b></font></td>
								</tr>
									<tr>
						<td height="112" align="left"><b><font  size="2" face="Verdana">About Me </font></b></td>
					  <td  height="112" align="left"><textarea name="about_me" rows="5" cols="30" style="background-color:#999999; color:#FFFFFF;"><?php echo $row[56];?></textarea></td>
					</tr>
								<tr>
									<td height="26" width="59%" align="left">&nbsp;</td>
									<td height="26" width="41%" align="left">&nbsp;									</td>
								</tr>
								<tr>
									<td height="26" width="59%" align="left">&nbsp;</td>
									<td height="26" width="41%" align="left">
								  <input type=submit value=Submit tabindex=16 style="background:url(../images/send.gif); width:81px; border:none; height:32px; color:#FFFFFF"></td>
								</tr>
						  </form>
						</table>
					  &nbsp;</td>
					</tr>
					<tr>
						<td height="26" colspan="3">&nbsp;</td>
						<td width="26" height="26">&nbsp;</td>
					</tr>
					<tr>
						<td height="26" colspan="3">&nbsp;</td>
						<td width="26" height="26">&nbsp;</td>
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
</body>
</html>
