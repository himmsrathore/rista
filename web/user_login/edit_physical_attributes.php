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
<table width=1000 cellspacing="0" cellpadding="0" background="../images/main.jpg"><tr><td width="246"></td>
<td width="752">
<table border="0"   cellspacing="0" cellpadding="0">
					

					
					
					<tr>
						<td   height="26" colspan="3">
						<table width="100%" height="316" border="0" cellPadding="0" cellSpacing="0" >
<form name="physical_attributes" id="physical_attributes" onSubmit="return validate();" action="success_physical_attributes.php">						
	<tr>
									<td height="26" width="20%" align="left">&nbsp;</td>
									<td width="80%" align="left" valign="middle">&nbsp;
									</td>
				  </tr>
								<tr>
						<td width="100%" height="47" colspan="2" align="left">
						<b><font face="Verdana" color="#FF0000">Physical 
						Attributes</font></b></td>
								</tr>

							<tr>
						<td width="24%" height="26" align="left"><b>
						<font   face="Verdana" size="2">Height </font></b></td>
						<td width="76%" height="26" align="left" colspan="2">
						<font face="Verdana" size="2"><b>
						<font  face="Verdana" size="2">
						<select size="1" name="height" tabindex=1 style="font-weight: 700; color:#FFFFFF; background-color:#999999; width:225px;">
						<?php 
						if($row[20]!="")
						echo("<option selected value=$row[20]>$row[20]</option>");
						else
						echo("<option selected value=None>Feet/Inches</option>");
						?>
																				
																				<option value="4ft 6in">4ft 6in</option>
																				<option value="4ft 7in">4ft 7in</option>
																				<option value="4ft 8in">4ft 8in</option>
																				<option value="4ft 9in">4ft 9in</option>
																				<option value="4ft 10in">4ft 10in</option>
																				<option value="4ft 11in">4ft 11in</option>
																				<option value="5ft">5ft</option>
																				<option value="5ft 1in">5ft 1in</option>
																				<option value="5ft 2in">5ft 2in</option>
																				<option value="5ft 3in">5ft 3in</option>
																				<option value="5ft 4in">5ft 4in</option>
																				<option value="5ft 5in">5ft 5in</option>
																				<option value="5ft 6in">5ft 6in</option>
																				<option value="5ft 7in">5ft 7in</option>
																				<option value="5ft 8in">5ft 8in</option>
																				<option value="5ft 9in">5ft 9in</option>
																				<option value="5ft 10in">5ft 10in</option>
																				<option value="5ft 11in">5ft 11in</option>
																				<option value="6ft">6ft</option>
																				<option value="6ft 1in">6ft 1in</option>
																				<option value="6ft 2in">6ft 2in</option>
																				<option value="6ft 3in">6ft 3in</option>
																				<option value="6ft 4in">6ft 4in</option>
																				<option value="6ft 5in">6ft 5in</option>
																				<option value="6ft 6in">6ft 6in</option>
																				<option value="6ft 7in">6ft 7in</option>
																				<option value="6ft 8in">6ft 8in</option>
																				<option value="6ft 9in">6ft 9in</option>
																				<option value="6ft 10in">6ft 10in</option>
																				<option value="6ft 11in">6ft 11in</option>
																				<option value="7ft">7ft</option>
						</select></font></b></font></td>
				  </tr>
								<tr>
						<td width="24%" height="26" align="left"><b>
						<font  face="Verdana" size="2">Body Type </font></b></td>
						<td width="76%" height="26" align="left" colspan="2">
						<font face="Verdana" size="2"><b><font  face="Verdana" size="2">
						<select id="body_type" name="body_type" size="1" tabindex="2" style="font-weight: 700;color:#FFFFFF; background-color:#999999; width:225px;">
                  
                  <?php 
						if($row[21]!="")
						echo("<option selected value=$row[21]>$row[21]</option>");
						else
						echo("<option selected value=None>Select</option>");
						?>
																				
                  <option value="Average">Average</option>
					<option value="Athletic">Athletic</option>
					<option value="Slim">Slim</option>
					<option value="Heavy">Heavy</option>
                  </select></font></b></font></td>
								</tr>
								<tr>
						<td width="24%" height="26" align="left"><b>
						<font  face="Verdana" size="2">Complexion </font></b></td>
						<td width="76%" height="26" align="left" colspan="2">
						<font face="Verdana" size="2"><b>
						<font  face="Verdana" size="2">
		<select id="complexion" name="complexion" size="1" tabindex="3" style="font-weight: 700;color:#FFFFFF; background-color:#999999; width:225px;">
		<?php 
						if($row[22]!="")
						echo("<option selected value=$row[22]>$row[22]</option>");
						else
						echo("<option selected value=None>Select</option>");
						?>

                 
                  <option value="Very Fair">Very Fair</option>
					<option value="Fair">Fair</option>
					<option value="Wheatish">Wheatish</option>
					<option value="Wheatish Brown">Wheatish Brown</option>
					<option value="Dark">Dark</option>
                  </select></font></b></font></td>
								</tr>
								<tr>
						<td width="24%" height="26" align="left"><b>
						<font  face="Verdana" size="2">Physical 
						Status </font></b></td>
						<td width="76%" height="26" align="left" colspan="2">
						<font face="Verdana" size="2"><b><font  face="Verdana" size="2">
						<select id="physical_status" name="physical_status" size="1" tabindex="4" style="font-weight: 700;color:#FFFFFF; background-color:#999999; width:225px;">
                  <?php 
						if($row[23]!="")
						echo("<option selected value=$row[23]>$row[23]</option>");
						else
						echo("<option selected value=None>Select</option>");
						?>

                  
                  <option value="Normal">Normal</option>
					<option value="Physically Challanged">Physically Challanged
					</option>
                  
                  </select></font></b></font></td>
								</tr>
								<tr>
									<td height="26" width="20%" align="left">&nbsp;</td>
									<td height="26" width="80%" align="left">&nbsp;
									</td>
								</tr>
								<tr>
									<td height="26" width="20%" align="left">&nbsp;</td>
									<td height="26" width="80%" align="left"><input name="submit" type="submit" style="background:url(../images/send.gif); width:81px; border:none; height:32px; color:#FFFFFF" tabindex="16" value="Submit" /></td>
								</tr>
						  </form>
						</table>
&nbsp;</td>
					</tr>
					<tr>
						<td width="980" height="26" colspan="3">&nbsp;</td>
						<td width="6" height="26">&nbsp;</td>
					</tr>
					<tr>
						<td width="980" height="26" colspan="3">&nbsp;</td>
						<td width="6" height="26">&nbsp;</td>
					</tr>
<?php 
}
?>					
		</table>
</td></tr></table>
</div>
<div class="footer">ss
  <div id="footer-bound">
	<p align="center">Copyright 2011. All rights reserved.</div>
</div>
</body>
</html>
