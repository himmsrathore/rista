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
	$no=$_REQUEST['no'];	
	
$result = queryselect("*","user_info","registeration_no = '".$no."'",$link);
if(mysql_num_rows($result)!=0)
{
 $row = mysql_fetch_row($result); 
   
$id=$row[0]+1058;
$id="RS.".$id;
	
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
<table width=1000 cellspacing="0" cellpadding="0" background="../images/main.jpg"><tr><td>
<table border="0" width="989" cellspacing="0" cellpadding="0">
					

					
					
					<tr>
						<td width="980" height="26" colspan="3">
						<table border="0" cellSpacing="0" cellPadding="0" width="977">
						
	<tr>
									<td height="26" width="30%" align="left">&nbsp;</td>
									<td width="1%" align="left" valign="middle">&nbsp;									</td>
						  </tr>
								<tr>
						<td width="30%" height="26" align="left" rowspan="6" valign="top">
		  				<p align="center"><img border="0" src="../<?php echo $row[19];?>" width="248" height="327" style="border: 1px solid #000000" title="<?php echo $row[3];?>">						  </p>
									<p align="center">
									
<?php
									$ch=mysql_query("select upgrade_status from user_info where username='$username'");
									$ch1=mysql_fetch_array($ch);
									if($ch1[0]=='upgraded'){
									echo "<a target='_blank' style='text-decoration: none; font-weight: 700' href=interest_expressed.php?no=".$no."><font color='red' face='Verdana' size='2'>
									Interest Express</font></a>";}
									else{
									echo "<a target='_blank' style='text-decoration: none; font-weight: 700' href=in_exp.php?no=".$no."><font color='red' face='Verdana' size='2'>
									Interest Express</font></a>";
									}
									
?>


<br /><br />
							<?php
								$data=mysql_query("select * from user_info where username='$username'");
								$data1=mysql_fetch_array( $data );
									
							if( $data1[42]=='upgraded'){
                                     if( (($data1[52]=='silver') and ($data1[53]<60)) or (($data1[52]=='bronze') and ($data1[53]<40)) or ($data1[52]=='gold') )	
									echo "<a href='view_user.php?no=$no&type=$data1[52]'><font color='red' face='Verdana' size='2'>View Mobile No.</font></a>";
								}
									?>
								  </td><td rowspan="7"></td>
						<td width="69%" height="6" align="left" valign="top"><table  width="82%" cellspacing="0" cellpadding="0" style="border: 1px solid #990033">
                          <tr>
                            <td colspan="3"  bgcolor="#990000" height="33" align="center"><b><font face="Verdana" color="#FFFFFF">General Info.</font></b></td>
                          </tr>
                          <tr>
                            <td width="7%" rowspan="11"></td>
                            <td width="43%" height="20"><b> <font face="Verdana" size="2" color="#003300">Name :</font></b></td>
                            <td height="20" width="50%"><font face="Verdana" size="2" color="#666666"><?php echo $row[3];?></font></td>
                          </tr>
                          <tr>
                            <td width="43%" height="20"><b> <font face="Verdana" size="2" color="#003300">Cast :</font></b></td>
                            <td height="20" width="50%"><font face="Verdana" size="2" color="#666666"><?php echo $row[12];?></font></td>
                          </tr>
						  
						   <?php 
								$ch=mysql_query("select upgrade_status from user_info where username='$username'");
								$ch1=mysql_fetch_array($ch);
								if($ch1[0]=='upgraded'){
                         echo " 
                          <tr>
                            <td width='43%' height='20'><b> <font face='Verdana' size='2' color='#003300'>Email :</font></b></td>
                            <td height='20' width='50%'><font face='Verdana' size='2' color='#666666'>$row[4]</font></td>
                          </tr>";}
						  ?>
						  
						 <tr>
                            <td width='43%' height='20'><b> <font face='Verdana' size='2' color='#003300'>Gender :</font></b></td>
                            <td height='20' width='50%'><font face='Verdana' size='2' color='#666666'><?php echo $row[5];?></font></td>
                          </tr>
                          <tr>
                            <td width='43%' height="20"><b> <font face="Verdana" size="2" color="#003300">Date of Birth 
                              :</font></b></td>
                            <td height="20" width="50%"><font face="Verdana" size="2" color="#666666"><?php echo $row[6]."-".$row[7]."-".$row[8];?></font></td>
                          </tr>
                          <tr>
                            <td width="43%" height="20"><b> <font face="Verdana" size="2" color="#003300">Time of Birth 
                              :</font></b></td>
                            <td height="20" width="50%"><font face="Verdana" size="2" color="#666666"><?php echo $row[9].":".$row[10].":".$row[11];?></font></td>
                          </tr>
                          <tr>
                            <td width="43%" height="20"><b> <font face="Verdana" size="2" color="#003300">Place of Birth 
                              :</font></b></td>
                            <td height="20" width="50%"><font face="Verdana" size="2" color="#666666"><?php echo $row[58];?></font></td>
                          </tr>
						  
                          <tr>
                            <td width="43%" height="20"><b> <font face="Verdana" size="2" color="#003300">Religion :</font></b></td>
                            <td height="20" width="50%"><font face="Verdana" size="2" color="#666666"><?php echo $row[18];?></font></td>
                          </tr>
                          <tr>
                            <td width="43%" height="20"><b> <font face="Verdana" size="2" color="#003300">Location :</font></b></td>
                            <td height="20" width="50%"><font face="Verdana" size="2" color="#666666"><?php echo $row[15]." - ".$row[16]." - ".$row[17];?></font></td>
                          </tr><tr>
                            <td width="43%" height="20"><b> <font face="Verdana" size="2" color="#003300">About Me :</font></b></td>
                            <td height="20" width="50%"><font face="Verdana" size="2" color="#666666"><?php echo $row[56];?></font></td>
                          </tr><tr>
                            <td width="43%" height="20"><b> <font face="Verdana" size="2" color="#003300">Profile Id :</font></b></td>
                            <td height="20" width="50%"><font face="Verdana" size="2" color="#666666"><?php echo $id;?></font></td>
                          </tr>
                        
						  <?php
							if((($data1[52]=='silver') and ($data1[53]<60)) or (($data1[52]=='bronze') and ($data1[53]<40)) or ($data1[52]=='gold')){						  
								
													  
							if(isset($_GET['type'])){
								echo "<tr>
									<td width='43%' height='20'><b> <font face='Verdana' size='2' color='#003300'>Mobile No :</font></b></td>
									<td height='20' width='50%'><font face='Verdana' size='2' color='#666666'>$row[13]</font></td>
								</tr>";
								
								if($row[13]!=NULL and $data1[52]!='gold') {
									
									$check_status=mysql_query("select * from view_mobile_no where username='$username' and mob='$row[13]' and search_username='$row[1]' and upgrade_type='$data1[52]'");
									$check_status1=mysql_fetch_array( $check_status );
									
									if( $check_status1[0]==NULL){
									mysql_query("insert into view_mobile_no values('$username','$row[13]','$row[1]','$data1[52]')");
									}
									$dat_no=mysql_query("select * from view_mobile_no where username='$username'");
									$dat_no1=mysql_fetch_array( $dat_no );
									$count_dat_no1=mysql_num_rows( $dat_no );
									
										
									mysql_query("update user_info set count_mob_no=$count_dat_no1 where username='$username'");
										
										
									}	
										
									
										
								}
							}
						
								
								
								?></table><br /><br />
<table width="82%"style="border: 1px solid #990033">
								<tr>
									<td height="20" colspan="3" bgcolor="#990000" align="center"><b>
						<font color="#FFFFFF" face="Verdana">Physical Attributes</font></b></td>
								</tr>
								<tr><td width="7%" rowspan="4"></td>
									<td width="44%" height="20"><b>
									<font face="Verdana" size="2" color="#003300">Height :</font></b></td>
									<td height="20" width="49%">
									<font face="Verdana" size="2" color="#666666"><?php echo $row[20];?></font></td>
								</tr>
								<tr>
									<td width="44%" height="20"><b>
									<font face="Verdana" size="2" color="#003300">Body Type :</font></b></td>
									<td height="20" width="49%">
									<font face="Verdana" size="2" color="#666666"><?php echo $row[21];?></font></td>
								</tr>
								<tr>
									<td width="44%" height="20"><b>
									<font face="Verdana" size="2" color="#003300">Complexion :</font></b></td>
									<td height="20" width="49%">
									<font face="Verdana" size="2" color="#666666"><?php echo $row[22];?></font></td>
								</tr>
								<tr>
									<td width="44%" height="20"><b>
									<font face="Verdana" size="2" color="#003300">Physical 
									Status :</font></b></td>
									<td height="20" width="49%">
									<font face="Verdana" size="2" color="#666666"><?php echo $row[23];?></font></td>
								</tr>
								<tr>
									<td width="7%" height="20">&nbsp;</td>
									<td height="20" width="44%">&nbsp;</td>
						  </tr></table><br /><br />
								<table width="557"style="border: 1px solid #990033">
								  <tr>
									<td height="20" colspan="3" bgcolor="#990000" align="center">
									<b><font  color="#FFFFFF"face="Verdana">
									Education &amp; Occupation</font></b></td>
								</tr>
								<tr><td width="7%" rowspan="3"></td>
									<td width="44%" height="20"><b>
									<font face="Verdana" size="2" color="#003300">Education :</font></b></td>
									<td height="20" width="49%">
									<font face="Verdana" size="2" color="#666666"><?php echo $row[24];?></font></td>
								</tr>
								<tr>
									<td width="44%" height="20"><b>
									<font face="Verdana" size="2" color="#003300">Occupation :</font></b></td>
									<td height="20" width="49%">
									<font face="Verdana" size="2" color="#666666"><?php echo $row[25];?></font></td>
								</tr>
								<tr>
									<td width="44%" height="20"><b>
									<font face="Verdana" size="2" color="#003300">Annual Income 
									:</font></b></td>
									<td height="20" width="49%">
									<font face="Verdana" size="2" color="#666666"><?php echo $row[26];?></font></td>
								</tr>
								<tr>
									<td width="7%" height="20">&nbsp;</td>
									<td height="20" width="44%">&nbsp;</td>
						  </tr></table><br /><br />
								<table width="83%"style="border: 1px solid #990033">
								  <tr>
									<td height="20" colspan="3" bgcolor="#990000" align="center">
									<b><font color="#FFFFFF" face="Verdana">
									Habits</font></b></td>
								</tr>
								<tr><td width="7%" rowspan="3"></td>
									<td width="45%" height="20"><b>
									<font face="Verdana" size="2" color="#003300">Food :</font></b></td>
									<td height="20" width="48%">
									<font face="Verdana" size="2" color="#666666"><?php echo $row[27];?></font></td>
								</tr>
								<tr>
									<td width="45%" height="20"><b>
									<font face="Verdana" size="2" color="#003300">Smoking :</font></b></td>
									<td height="20" width="48%">
									<font face="Verdana" size="2" color="#666666"><?php echo $row[28];?></font></td>
								</tr>
								<tr>
									<td width="45%" height="20"><b>
									<font face="Verdana" size="2" color="#003300">Drinking :</font></b></td>
									<td height="20" width="48%">
									<font face="Verdana" size="2" color="#666666"><?php echo $row[29];?></font></td>
								</tr>
								<tr>
									<td width="7%" height="20">&nbsp;</td>
									<td height="20" width="45%">&nbsp;</td>
						  </tr></table><br /><br /><table width="83%"style="border: 1px solid #990033">
								<tr>
									<td height="20" colspan="3" bgcolor="#990000" align="center">
									<b><font color="#FFFFFF" face="Verdana">
									Astrological Info.</font></b></td>
								</tr>
								<tr><td width="7%" rowspan="2"></td>
									<td width="44%" height="20"><b>
									<font face="Verdana" size="2" color="#003300">Manglik :</font></b></td>
									<td height="20" width="49%">
									<font face="Verdana" size="2" color="#666666"><?php echo $row[30];?></font></td>
								</tr>
								<tr>
									<td width="44%" height="20"><b>
									<font face="Verdana" size="2" color="#003300">Rashi :</font></b></td>
									<td height="20" width="49%">
									<font face="Verdana" size="2" color="#666666"><?php echo $row[31];?></font></td>
								</tr>
								<tr>
									<td width="7%" height="20">&nbsp;</td>
									<td height="20" width="44%">&nbsp;</td>
								</tr></table><br /><br /><table width="84%"style="border: 1px solid #990033">
								<tr>
									<td height="20" colspan="3" bgcolor="#990000" align="center">
									<b><font color="#FFFFFF" face="Verdana">
									Family Profile</font></b></td>
								</tr>
								<tr><td width="8%" rowspan="4"></td>
									<td width="43%" height="20"><b>
									<font face="Verdana" size="2" color="#003300">Family Status 
									:</font></b></td>
									<td height="20" width="49%">
									<font face="Verdana" size="2" color="#666666"><?php echo $row[32];?></font></td>
								</tr>
								<tr>
									<td width="43%" height="20"><b>
									<font face="Verdana" size="2" color="#003300">Family Type :</font></b></td>
									<td height="20" width="49%">
									<font face="Verdana" size="2" color="#666666"><?php echo $row[33];?></font></td>
								</tr>
								<tr>
									<td width="43%" height="20"><b>
									<font face="Verdana" size="2" color="#003300">Family Values 
									:</font></b></td>
									<td height="20" width="49%">
									<font face="Verdana" size="2" color="#666666"><?php echo $row[34];?></font></td>
								</tr>
								<tr>
									<td width="43%" height="20"><b>
									<font face="Verdana" size="2" color="#003300">About My Family
									:</font></b></td>
									<td height="20" width="49%">
									<font face="Verdana" size="2" color="#666666"><?php echo $row[57];?></font></td>
								</tr>
								
								<tr>
									<td width="8%" height="20">&nbsp;</td>
									<td height="20" width="43%">&nbsp;</td>
								</tr>
							</table>						</td>
					</tr>
							<?php
							}
							?>
						</table> </td>
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
</td></tr></table>
</div>
<div class="footer">
  <div id="footer-bound">
	<p align="center">Copyright 2011. All rights reserved.</div>
</div>
</body>
</html>
