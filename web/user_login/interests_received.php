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
	 $conn = mysql_connect($hname,$uname,$passwd);		
if(!$conn) die("Failed to connect to database!");
	$status = mysql_select_db($dbname, $conn);
	if(!$status) die("Failed to select database!");
	$result = queryselect("email","user_info","username = '".$username."'",$link);
if(mysql_num_rows($result)!=0)
{
 $row = mysql_fetch_row($result); 
 $email = $row[0];
 }

	$sql = "SELECT * from interest WHERE user_email='".$email."' ORDER BY s_no DESC";
   
  

	
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
<table width=1000 cellspacing="0" cellpadding="0" background="../images/main.jpg"><tr><td>
<table border="0" width="989" cellspacing="0" cellpadding="0" height="257">
					

					
					
					<tr>
						<td width="980" height="26" colspan="3">
						<table border="0" cellSpacing="0" cellPadding="0" width="977">
	<tr>
									<td height="26" width="214" align="left">&nbsp;</td>
									<td width="763" align="left" valign="middle">&nbsp;
									</td>
								</tr>
								<tr>
						<td width="24%" height="26" align="left" colspan="2"><b>
						<font face="Verdana" color="#FF0000">Interests Received</font></b></td>
								</tr>
								<tr>
									<td height="26" width="977" align="left" colspan="2">
									<div align="center">
									<table width="900" cellspacing="0" cellpadding="0" style="border: 1px solid #000000" >
											<tr>
												<td width="270" bgcolor="maroon" align="left">
												<b>
												<font face="Verdana" size="2" color="#FFFFFF">&nbsp;&nbsp;
												Interest Expressed By</font></b></td>
												<td bgcolor="maroon" align="left"><b>
												<font face="Verdana" size="2" color="#FFFFFF">
												Message</font></b></td>
												<td width="15" align="left" bgcolor="maroon">&nbsp;
												</td>

												<td width="263" bgcolor="maroon" align="left">
												<b>
												<font face="Verdana" size="2" color="#FFFFFF">
												Date &amp; Time</font></b></td>
											</tr>
										</table>
									</div>
</td>
								</tr>
								
									<?php 
									$pager = new PS_Pagination($conn, $sql, 5, 5, "param1=valu1&param2=value2");
	
	
	$pager->setDebug(true);
	
	
	$rs = $pager->paginate();
	if(!$rs) die(mysql_error());
	while($row = mysql_fetch_assoc($rs)) 
    {
     

									
			$result5 = queryselect("registeration_no,name","user_info","email = '".$row['email']."'",$link);
if(mysql_num_rows($result5)!=0)
{
 $row5 = mysql_fetch_row($result5); 

 $r_no = $row5[0];
 $name = $row5[1];
 $data=mysql_query("select image_url,upgrade_status from user_info where registeration_no=$r_no");
 $data1=mysql_fetch_array($data);
 $dat=mysql_query("select upgrade_status from user_info where username='$username'");
 $dat1=mysql_fetch_array($dat);
 }
						
									?>
									<tr>
									<td height="26" width="977" align="left" colspan="2">
									<div align="center">
										<table width="900" cellspacing="0" cellpadding="0" style="border: 1px solid #000000; " bordercolor="#000000">
											<tr>
												<td width="271">
												<p align="left">&nbsp;&nbsp;<a href="view_user.php?no=<?php echo $r_no;?>" target=_blank style="text-decoration:none"><b>
												<font face="Verdana" size="2" color=black>
												
												
												<?php 
													if($dat1[0]=='upgraded'){
														 echo "<img src=../$data1[0] width=70 height=80 border=none title=$name>";
														 }else{
												echo $name;
												}
												
												?>
												
												
												</font></b></a></td>
												<td>
												<p align="left"><b>
												<font face="Verdana" size="2"><?php echo $row['message'];?></font></b></td>
												<td width="15" align="left">&nbsp;
												</td>

												<td width="262">
												<p align="left"><b>
												<font face="Verdana" size="2"><?php echo $row['post_time'];?></font></b></td>
											</tr>
										</table>
									</div>
									
									</td>
								</tr>
								<tr><td>&nbsp;</td></tr>
							<?php
									}
									?>
						</table>
						&nbsp;</td>
					</tr>
					<tr>
						<td width="980" height="26" colspan="4" align="right"><font face="Verdana" size="2" color=#000000><b><?php echo $pager->renderFullNav();?></b></font></td>
						
					</tr>
                    <tr>
									<td height="26" width="100%" align="center" colspan="7"><font face="Verdana" size="2" color="#006600"><b>
									<?php 
                                        
    $que=mysql_query($sql);
										$row1 = mysql_fetch_array($que);
										if($row1[0]==NULL){
										echo "<font color=red>No Interests Received</font>";
										}
									
									?></b></font>
									&nbsp;</td>
								</tr>
					<tr>
						<td width="980" height="91" colspan="3">&nbsp;</td>
						<td width="6" height="91">&nbsp;</td>
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
