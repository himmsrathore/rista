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
<script type="text/javascript" language="javascript">
function check()
{
var flag=true;
	var i=document.data.mob.value;
	var j=document.data.address.value;
	if(i=='')
	{
		alert("Enter Your Mobile No.");
		flag=false;
	}
	else if(j=='')
	{
		alert("Enter Your Address.");
		
		flag=false;
	}
return flag;	
}
function check1()
{
var flag=true;
	var i=document.data1.branch.value;
	var j=document.data1.ddno.value;
	var k=document.data1.date.value;
	
	if(j=='')
	{
		alert("Enter Your DD NO.");
		
		flag=false;
	}
else if(i=='')
	{
		alert("Enter Your Bank Branch Name");
		flag=false;
	}
	else if(k=='')
	{
		alert("Enter DD Validation Date");
		
		flag=false;
	}
return flag;	
}
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
        <select name="agefrom" style="width: 44px;">
          <option selected> 18</option>
          <option>19</option>
          <option>20</option>
          <option> 21</option>
          <option>22</option>
          <option>23</option>
          <option> 24</option>
          <option>25</option>
          <option>26</option>
          <option> 27</option>
          <option>28</option>
          <option>29</option>
          <option> 30</option>
          <option>31</option>
          <option>32</option>
          <option> 33</option>
          <option>34</option>
          <option>35</option>
          <option> 36</option>
          <option>37</option>
          <option>38</option>
          <option> 39</option>
          <option>40</option>
          <option>41</option>
          <option> 42</option>
          <option>43</option>
          <option>44</option>
          <option> 45</option>
          <option>46</option>
          <option>47</option>
          <option> 48</option>
          <option>49</option>
          <option>50</option>
          <option> 51</option>
          <option>52</option>
          <option>53</option>
          <option> 54</option>
          <option>55</option>
          <option>56</option>


          <option> 57</option>
          <option>58</option>
          <option>59</option>
          <option> 60</option>
        </select>
        <span style="PADDING-TOP: 6px"> <span 
                              class="searcFields">to </span> </span>
        <select name="ageto" style="width: 44px;">
          <option>18</option>
          <option> 19</option>
          <option>20</option>
          <option>21</option>
          <option>22</option>
          <option> 23</option>
          <option>24</option>
          <option selected>25</option>
          <option>26</option>
          <option> 27</option>
          <option>28</option>
          <option>29</option>
          <option>30</option>
          <option> 31</option>
          <option>32</option>
          <option>33</option>
          <option>34</option>
          <option> 35</option>
          <option>36</option>
          <option>37</option>
          <option>38</option>
          <option> 39</option>
          <option>40</option>
          <option>41</option>
          <option>42</option>
          <option> 43</option>
          <option>44</option>
          <option>45</option>
          <option>46</option>
          <option> 47</option>
          <option>48</option>
          <option>49</option>
          <option>50</option>
          <option> 51</option>
          <option>52</option>
          <option>53</option>
          <option>54</option>
          <option> 55</option>
          <option>56</option>
          <option>57</option>
          <option>58</option>
          <option> 59</option>
          <option>60</option>
        </select>
        <span style="PADDING-TOP: 6px"> </span></div>
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
            <option value="Other">Other</option>
          </select>
        </span> </div>
      <div class="searchers">
        <div class="font3">&nbsp;</div>
        <span style="PADDING-TOP: 6px"> &nbsp;</span>
        <label>
          <input type="submit" name="Submit" value="Search" />
        </label>
      </div>
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
  <table width=1000 height=350  cellspacing="0" cellpadding="0" >
    <tr>
      <td></td></tr><tr><td align="center">
	  <font size="+2" color="#FF0000"><b>Upgrade To Bronze </b></font><br />
	  <br /><br />
	  <?
	  $i=$_POST['mathod'];
	  if($i=='cash'){
	  
	  echo "<form method='post' action='upgrade_bronze_s.php?type=cash&up=bronze'>
	  	<center>
	  	<font size='+2' >Administrators Address</font><br><br>
		
		BIS Software Development Services Pvt Ltd<br><br>
		Near Tulsi Circle,Behind Ram Mandir<br><br>
		Bikaner-334001,Rajasthan<br><br><br>
		<input type=submit value=Submit tabindex=2 style='background:url(../images/send.gif);width:81px; height:32px; color:#FFFFFF; border:none;'>
		
	  </form></center>";
	  
	  }
	  if($i=='pick up'){
	  echo "<center><font size='+2' color=red>Upgrade Using Pick Up</font><br><br><form method='post'  action='upgrade_bronze_s.php?type=pup&up=bronze' onsubmit='return check()' name=data>
	  	<font size='+2' >Please Enter Your Address</font></center><br><br>
		<center><table width=520 height=250><tr align=left><td  align=left>Your Mobile No.</td><td align=left><input type=text name=mob style='font-weight: 700; width:150px; color:#FFFFFF; background-color:#999999;'></td></tr>
		<tr><td align=lef>Your Address</td><td align=left><textarea name=address id=reason tabindex=1 rows='9' cols='46' style='background-color:#999999; color:#FFFFFF'></textarea></td></tr>
		
		
		<tr><td colspan=2 align=center><input type=submit value=Submit tabindex=2 style='background:url(../images/send.gif);width:81px; height:32px; color:#FFFFFF; border:none;'></td></tr></table></center>
		
	  </form>";
	  
	  }
	  if($i=='dd'){
	  
	     echo "<font size='+2' color=red>Upgrade Using DD</font><br><br><form method='post'  action='upgrade_bronze_s.php?type=dd&up=bronze' onsubmit='return check1()' name=data1>
	  	<br><br>
		<center><table width=400 height=250 ><tr><td><font >Your DD No.</font></td><td><input type=text name=ddno style='font-weight: 700; width:150px; color:#FFFFFF; background-color:#999999;'></td></tr>
		<tr><td><font >Your Bank Name.</font></td><td><input type=text name=branch style='font-weight: 700; width:150px; color:#FFFFFF; background-color:#999999;'></td></tr>
		<tr><td><font >Date DD.</font></td><td><input type=text name=date style='font-weight: 700; width:150px; color:#FFFFFF; background-color:#999999;'></td></tr>
		<tr><td><input type=submit value=Submit tabindex=2 style='background:url(../images/send.gif);width:81px; height:32px; color:#FFFFFF; border:none;'></td></tr></table></center>
		
	  </form>";
	  
	  }
	  if($i=='dabit card'){
	  
	    echo "<center><font size='+2' color=red>Upgrade Using Debit Card</font><br><br><form method='post'  action='upgrade_bronze_s.php?type=dabit&up=bronze'><br><br>
		<FONT COLOR=RED><p>You can transfer money using Internet Banking to our Bank Account  and send mail at admin@ristaa.com for confirmation. when your transfer completed. </P></font><br>  ( <font color=blue>Our Bank Account Details:</font><font color=red>BIS Software Dev. Pvt. Ltd.,HDFC ACC. NO.-06587239363</font> ) <br><br><br>
		<input type=submit value=Submit tabindex=2 style='background:url(../images/send.gif);width:81px; height:32px; color:#FFFFFF; border:none;'>
		
	  </form></center><br><br>";
	  
	  }
	  ?></td>
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
