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
		
		$result = queryselect("email","user_info","username = '".$username."'",$link);
if(mysql_num_rows($result)!=0)
{
 $row = mysql_fetch_row($result);
 $email = $row[0];
 
 }
	$no=$_REQUEST['no'];	
	
$result = queryselect("*","user_info","registeration_no = '".$no."'",$link);
if(mysql_num_rows($result)!=0)
{
 $row = mysql_fetch_row($result); 
 $name = $row[3];
   
 

	
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
function validate()
{

if(document.send.message.value=="")
		{
		alert("Enter Your Message.");
		document.send.message.focus();
		document.send.message.select();
		return false;
		}
		else if(document.send.message.value.length>150)
	{
		alert("Message Should Have Maximum 150 Letters.");
		document.send.message.focus();
		document.send.message.select();
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
</div><div align="center">
<table width=1000 cellspacing="0" cellpadding="0" background="../images/main.jpg"><tr><td>
<?php
if($check_data1[0]=='upgraded')
{
?>

<table border="0" width="989" cellspacing="0" cellpadding="0">
					

					
					
					<tr>
						<td width="980" height="26" colspan="3">
						<table border="0" cellSpacing="0" cellPadding="0" width="977">
						
	<tr>
									<td height="26" width="18%" align="left">&nbsp;</td>
									<td width="82%" align="left" valign="middle">&nbsp;
									</td>
								</tr>
								<tr>
						<td width="18%" height="26" align="left" rowspan="6" valign="top">
		  				<p align="center"><img border="0" src="../<?php echo $row[19];?>" width="123" height="148" style="border: 1px solid #000000" title="<?php echo $name;?>">
						  </p>
									<p align="center">
									
									<a style="text-decoration: none; font-weight: 700" href="interest_expressed.php?no=<?php echo $no;?>">
									<font color="#000000" face="Verdana" size="2">
									Interest Express</font></a></td>
						<td width="82%" height="6" align="left" valign="top">
						<div align="left">
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td colspan="3" height="24">
						<font face="Verdana" size="1">&nbsp; </font></td>
								</tr>
								
								<?php
								$data=mysql_query("select upgrade_type,expression_mess,registeration_no from user_info where username='$username'");
								$data1=mysql_fetch_array( $data );
							
								if( (($data1[0]=='bronze') and ( $data1[1]<300 )) or ($data1[0]=='silver') or ($data1[0]=='gold') ){
							
								?>
								<form name="send" id="send" onSubmit="return validate();" action="send_interest.php">						

								<tr>
									<td height="20" colspan="2">
									<font face="Verdana" size="2"><b>Interest Expressed To: </b>
								  <input type=text size="30" name="user_email" value="<?php echo $row[4]; ?>" tabindex="1" readonly></td>
									<td height="20" width="41%">
									<font face="Verdana" size="2"><b>Your 
									Email:</b> 
								  <input type=text size="30" name="email" value="<?php echo $email;?>" tabindex="2" readonly></font></td>
								</tr>
								<tr>
									<td height="20" colspan="3">&nbsp;</td>
								</tr>
								<tr>
									<td height="20" colspan="3">&nbsp;
								  <textarea name="message" id="message" tabindex="3" rows="7" cols="72">Hello <?php echo $row[3];?> I am Interested in your profile......</textarea></td>
								</tr>
								<tr>
									<td height="20" colspan="2">&nbsp;</td>
									<td height="20" width="41%">&nbsp;</td>
								</tr>
								<tr>
								  <td width="7%" height="20"><input type=hidden name="name" value="<?php echo $name;?>"></td>
								  <td width="52%" height="20"><input type=submit value="Submit" tabindex=4 style="background-color:#666666; color:#FFFFFF"></td>
									<td height="20" width="41%" align=left></td>
								</tr>
								</form>
								
						<?php
						
						}
						else{
						
						echo "<tr height=300><td><center><font color=red>Upgrade To Gold Package For Unlimited Expression</font></center></td></tr>";
						
						}
						?>
							</table>
						</div>
						</td>
					</tr>
							<?php
							}
							?>
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
				</table>
				
				<?php
					}
					
$check_data=mysql_query( "select upgrade_status from user_info where username='$username'" );
$check_data1 = mysql_fetch_array( $check_data );
			 if($check_data1[0]==NULL or $check_data1[0]=='request' ){
					
					echo "<table width=980 height=300 align=center><tr><td><font color=red face=verdana>Sorry , To Express Interest Please Upgrade Your Profile * </font></td></tr></table>";
					}
				?>
</td></tr></table>
</div>
<div class="footer">
  <div id="footer-bound">
	<p align="center">Copyright 2011. All rights reserved.</div>
</div>
</body>
</html>
