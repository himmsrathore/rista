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
<div class="header-bg1">
  
</div>
<div class="login-bg" style="width: 1000px; height: 60px">
  <center>
    <div class="login-holder" style="width: 879px; height: 47px"> <font face="Verdana" size="2"  color="white"><b><a style="text-decoration: none" href="interests_received.php"> <font  color="white">Interests Received</font></a>&nbsp; |&nbsp; <a style="text-decoration: none" href="interests_expressed.php"> <font  color="white">Interests Expressed</font></a>&nbsp; |&nbsp; <a href="#" name="link1" id="link1" style="text-decoration: none" onmouseover="MM_showMenu(window.mm_menu_0521105438_0,-4,20,null,'link1')" onmouseout="MM_startTimeout();"><font color="white">Search</font></a> &nbsp; | <a href="#" name="link2" id="link2" style="text-decoration: none" onmouseover="MM_showMenu(window.mm_menu_0521105438_1,-4,20,null,'link2')" onmouseout="MM_startTimeout();"><font color="white">Upgrade</font></a> | &nbsp;<a style="text-decoration: none" href="change_password.php"> <font  color="white">Change Password</font></a>&nbsp; |&nbsp; <a style="text-decoration: none" href="delete_account.php"> <font  color="white">Delete Account</font></a>

</b></font></div>
  </center>
</div>
<div align="center">
  <table width=1000 cellspacing="0" cellpadding="0" background="../images/main.jpg">
    <tr>
      
      <td width="972"><table width="989" height="320" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="6" rowspan="18">&nbsp;</td>
          <td height="43" colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td height="47" align="left" colspan="6"><b> <font face="Verdana" color="#FF0000" size="+1">Advanced Search</font></b></td>
        </tr><form name="search" method="post" action="search_result.php" enctype="multipart/form-data">
        <tr>
          <td height="37" align="left" valign="middle"><b> <font face="Verdana" size="2" >Gender :&nbsp;&nbsp; </font> </b> <font color="#333333" face="Arial">&nbsp; </font></td>
          <td height="37" align="left" valign="middle"><font color="#333333" face="Arial">
            <select id="gender" name="gender" tabindex="1" style="font-weight: 700; width:200px; color:#FFFFFF; background-color:#999999; " >
              <option value="Female">Female&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
              <option value="Male">Male</option>
            </select>
          </font></td>
          <td width="79" height="37" align="left" valign="middle"><b><font face="Verdana" size="2" > Age :</font></b></td>
          <td width="239" height="37" align="left" valign="middle"><font face="Verdana" size="3">
            <select name="agefrom" style="font-weight: 700; width:50px; color:#FFFFFF; background-color:#999999; " tabindex="2">
              <option> 18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
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
            </font><b><font size="2" face="Verdana"> to </font></b> <font face="Verdana" size="3">
            <select name="ageto"  style="font-weight: 700; width:50px; color:#FFFFFF; background-color:#999999; " tabindex="3">
              <option>18</option>
              <option> 19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option> 23</option>
              <option>24</option>
              <option>25</option>
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
          </font></td>
          <td width="142" height="37" align="left" valign="middle"><b><font face="Verdana" size="2" >Marital Status :</font></b></td>
          <td width="200" height="37" align="left" valign="middle"><b> <font color="#333333" face="Verdana" size="2">
            <select id="marital_status0" name="marital_status" size="1" tabindex="4" style="font-weight: 700; width:200px; color:#FFFFFF; background-color:#999999; ">
              <option selected="selected" value="">Select&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
              <option value="Unmarried">Unmarried</option>
              <option value="Widower">Widower</option>
              <option value="Divorced">Divorced</option>
              <option value="Awaiting Divorce">Awaiting Divorce</option>
            </select>
          </font></b></td>
        </tr>
        <tr>
          <td height="54" valign="middle" align="left"><b><font face="Verdana" size="2" >Have Children :</font></b></td>
          <td height="54" valign="middle" align="left"><b><font color="#333333" face="Verdana" size="2">
            <select id="marital_status" name="child" size="1" tabindex="5"  style="font-weight: 700; width:200px; color:#FFFFFF; background-color:#999999; ">
           
              <option selected="selected" value="">Select</option>
        
              <option value="No">No</option>
              <option value="Yes, Living Together">Yes, Living Together</option>
              <option value="Yes, Not Living Together">Yes, Not Living 
                Together</option>
            </select>
          </font></b></td>
          <td height="54" valign="middle" align="left"><b><font face="Verdana" size="2" > Cast :</font></b> </td>
          <td height="54" valign="middle" align="left"><b> <font color="#333333" face="Verdana" size="2">
            <select id="cast" name="cast" size="1" tabindex="6"  style="font-weight: 700; width:200px; color:#FFFFFF; background-color:#999999; ">
              <option selected="selected" value="">Select&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
              <option value="all">Caste No Bar</option>
              <option>Agarwal</option>
              <option>Baniya</option>
              <option>Bishnoi/Vishnoi</option>
              <option>Brahmin</option>
              <option>Chandravanshi</option>
              <option>Kahar</option>
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
            </select>
          </font></b></td>
          <td height="54" valign="middle" align="left"><b><font face="Verdana" size="2" > Physical Status :</font></b></td>
          <td height="54" valign="middle" align="left"><b> <font color="#333333" face="Verdana" size="2">
            <select id="physical_status" name="physical_status" size="1" tabindex="7" style="font-weight: 700; width:200px; color:#FFFFFF; background-color:#999999; ">
              <option selected="selected" value="">Select</option>
              <option value="Normal">Normal</option>
              <option value="Physically Challanged">Physically Challanged </option>
            </select>
          </font></b></td>
        </tr>
        <tr>
          <td height="36" valign="middle" align="left"><b> <font face="Verdana" size="2" >Manglik :</font></b></td>
          <td height="36" valign="middle" align="left"><b> <font color="#333333" face="Verdana" size="2">
            <select id="manglik" name="manglik" size="1" tabindex="8" style="font-weight: 700; width:200px; color:#FFFFFF; background-color:#999999; ">
      
              <option selected="selected" value="">Select&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>

              <option value="No">No</option>
              <option value="Yes">Yes</option>
              <option value="Don&#39;t Know">Don&#39;t Know</option>
            </select>
          </font></b></td>
          <td height="36" valign="middle" align="left"><b><font face="Verdana" size="2" > Location :</font></b></td>
          <td height="36" valign="middle" align="left"><font face="Verdana">
            <select name="state"  style="font-weight: 700; width:200px; color:#FFFFFF; background-color:#999999; " tabindex="12" size="1">
              <option selected="selected" value="">Select</option>
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
            </select>
          </font></td>
          <td height="36" valign="middle" align="left">&nbsp;</td>
          <td height="36" valign="middle" align="left">&nbsp;</td>
        </tr>
        <tr>
          <td height="51" align="left">&nbsp;</td>
          <td height="51" align="left" colspan="5"><input type="submit" name="Submit" value="" style="background:url(../images/search.jpg); width:176px; height:28px;float: left; border:none;" />
          <p></p></td>
        </tr>
          <tr>
            <td width="77" height="26">&nbsp;</td>
            <td width="246" height="26"></td>
          </tr>
          <tr>
            <td height="26" colspan="2">&nbsp;</td>
          </tr>
        </form>
      </table></td>
    </tr>
  </table>
</div>
<div class="footer">
  <div id="footer-bound">
    <p align="center">Copyright 2011. All rights reserved.</p>
  </div>
</div>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/chat.js"></script>
</body>
</html>
