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


$check=mysql_query("select upgrade_status,upgrade_type from user_info where username='$username'");
$check1=mysql_fetch_array( $check );

if($check1[0]=='upgraded' and $check1[1]=='gold')
{

$validate=mysql_query("SELECT upgrade_date,upgrade_month,upgrade_year FROM user_info WHERE  username='$username'");
$validate1=mysql_fetch_array( $validate );
$month=$validate1[1];
$target_month=$month+3;
$date=$validate1[0];
$year=$validate1[2];
if($target_month>12){
 $new_target_month=$target_month-12;
 $new_year=$year+1;
}
else{
 $new_target_month=$target_month;
 $new_year=$year;
}


$day_in_target=cal_days_in_month( CAL_GREGORIAN,$new_target_month,$new_year );
if( $date>$day_in_target ){

$new_date_of_target = $day_in_target;


}
else{

$new_date_of_target = $date;


}




$current_date=date("d");

$current_month=date("m");

$current_year=date("Y");





$no_of_up_day=cal_days_in_month( CAL_GREGORIAN,$month,$year );
$first_month_day = $no_of_up_day - $date;

$next_month = $month+1;
$midd_year = $year;
if($next_month>12){

$next_month = $next_month-12;
$midd_year = $year+1;
}

$next_month_day = cal_days_in_month( CAL_GREGORIAN,$next_month,$midd_year );

$up_next_month = $month + 2;
$new_midd_year = $year;
if($up_next_month>12){

$up_next_month = $up_next_month-12;
$new_midd_year = $year+1;
}
$up_next_month_day = cal_days_in_month( CAL_GREGORIAN,$up_next_month,$new_midd_year );


$total_days_left = $first_month_day + $next_month_day + $up_next_month_day + $new_date_of_target;

function dateDiff($dformat, $endDate, $beginDate)
{
           $date_parts1=explode($dformat, $beginDate);
           $date_parts2=explode($dformat, $endDate);
           $start_date=gregoriantojd($date_parts1[0], $date_parts1[1], $date_parts1[2]);
           $end_date=gregoriantojd($date_parts2[0], $date_parts2[1], $date_parts2[2]);
           return $end_date - $start_date;
}

$up_level=$_GET['up'];
$dob="$month/$date/$year";
$total_days_in_current = round(dateDiff("/", date("m/d/Y", time()), $dob), 0);

$left_days = $total_days_left - $total_days_in_current;

if($left_days<=0 ){
$left_days=0;
mysql_query("update user_info set upgrade_status='',deposit_type='',pickup_address='',pickup_mob='',dd_no='',bank_name='',dd_date='',upgrade_date=0,upgrade_month=0,upgrade_year=0");
  
}

}
if($check1[1]=='silver' and !isset($_GET['up'])){

 echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../user_login/upgrade_to_silver.php');\n");
		echo("-->\n");
		echo("</script>");
		

}
if($check1[1]=='bronze' and !isset($_GET['up'])){

 echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../user_login/upgrade_to_bronze.php');\n");
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
&nbsp;</div>
<div class="login-bg" style="width: 1000px; height: 60px">
  <center>
    <div class="login-holder" style="width: 879px; height: 47px"> <font face="Verdana" size="2" color="#FFFFFF"><b><a style="text-decoration: none" href="interests_received.php"> <font color="white">Interests Received</font></a>&nbsp; |&nbsp; <a style="text-decoration: none" href="interests_expressed.php"> <font color="white">Interests Expressed</font></a>&nbsp; |&nbsp; <a href="#" name="link1" id="link1" style="text-decoration: none" onmouseover="MM_showMenu(window.mm_menu_0521105438_0,-4,20,null,'link1')" onmouseout="MM_startTimeout();"><font color="white">Search</font></a> &nbsp; | <a href="#" name="link2" id="link2" style="text-decoration: none" onmouseover="MM_showMenu(window.mm_menu_0521105438_1,-4,20,null,'link2')" onmouseout="MM_startTimeout();"><font color="white">Upgrade</font></a> | &nbsp;<a style="text-decoration: none" href="change_password.php"> <font color="white">Change Password</font></a>&nbsp; |&nbsp; <a style="text-decoration: none" href="delete_account.php"> <font color="white">Delete Account</font></a>

</b></font></div>
  </center>
</div><div align="center">
<table width=1000 cellspacing="0" cellpadding="0" background="../images/main.jpg"><tr><td>
<table border="0" width="1000" cellspacing="0" cellpadding="0" align=center>
					

					
					
					<tr>
						<td width="980" height="26">
						
<?php
$up_level=$_GET['up'];
     if($check1[0]=='' or $left_days<=0 or isset($_GET['up'])){

?><table width="519" height="370" align="center" >
  <tr height="40">
    <td height="105" colspan="2">

<font color="#FF3F55" size="+2">UPGRADE TO GOLD </font><font color="#2A3F55">(1300 RS. For Three Months)</font></td>
  </tr>
<tr><td width="90" height="45"><font color="red">1.&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
<td width="417"><font color="#2A3F55">Unlimited Messages</font></td>
</tr>
<tr><td height="45"><font color="red">2.&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
<td><font color="#2A3F55">Unlimited Expression Messages</font></td></tr>
<tr><td height="45"><font color="red">3.&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
<td><font color="#2A3F55">Unlimited   Mobile No. View</font></td>
</tr>
<tr><td height="45"><font color="red">4.&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
<td><font color="#2A3F55">Free Live Chat</font></td></tr>
<tr><td height="69" colspan="2" align="center">
<?php
if(isset($_GET['up'])){
echo "<A href='upgrade_gold.php?up=ul'>";}
else{

echo "<A href='upgrade_gold.php'>";}


?>
<font color="#000000">UPGRADE</font></A></td>
</tr>


</table>
	  
<?
}

     if($left_days>0 and !isset($_GET['up'])){
	 
	 ?>
<table width="999"><tr>
  <td height="59"  align="center"><font color="#FF0000" size="3" face="Verdana, Arial, Helvetica, sans-serif">You Are Currently Using GOLD Package</font></td><td width="254" align="right"><a href="user_chat.php" style="text-decoration:none;"><img src="../images/chat.png" width="95" height="84" style="border:none;" title="Chat"/></a></td>
  <td width="32"></td>
</tr>
  <tr><td width="697" height="300" align="center" valign="top"> <table><form name="search" method="post" action="upgrade_to_gold.php" enctype="multipart/form-data"><tr><td height="63" width="97" align="left"><b><font face="Verdana" size="2" color="#003300">Looking For 
             : </font> </b> </td>
           <td height="63" width="121" align="left"><span style="PADDING-TOP: 6px">
             <select  style="font-weight: 700; color:#FFFFFF; background-color:#999999; width:120px;"
                              class="contentyellow"  
                              name="select">
               <option value="1" 
                                >Brides</option>
               <option 
                                value="0">Grooms</option>
             </select>
           </span></td>
           <td height="63" width="47" align="left"><b><font face="Verdana" size="2">Age :</font></b></td>
           <td height="63" width="123" align="left"><select name="agefrom" style="width: 44px;font-weight: 700; color:#FFFFFF; background-color:#999999;">
               <option> 18</option>
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
               <select name="ageto" style="width: 44px;font-weight: 700; color:#FFFFFF; background-color:#999999;">
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
            <span style="PADDING-TOP: 6px"> </span></td>
           <td height="63" width="86" align="left"><b><font face="Verdana" size="2">Location : </font></b> </td>
           <td height="63" width="145" align="left"><span style="PADDING-TOP: 6px">
             <select 
                              class="contentyellow" style="WIDTH: 135px; font-weight: 700; color:#FFFFFF; background-color:#999999;" 
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
               <option value="Rajasthan">Rajasthan</option>
               <option value="Sikkim">Sikkim</option>
               <option value="Tamil Nadu">Tamil Nadu</option>
               <option value="Tripura">Tripura</option>
               <option value="Uttar Pradesh">Uttar Pradesh</option>
               <option value="Uttarakhand">Uttarakhand</option>
               <option value="West Bengal">West Bengal</option>
               <option value="Other">Other</option>
             </select>
           </span></td></tr>
		   <tr><td colspan="6" height="60" width="91" align="left" valign="top"><input type="submit" name="Submit" value="Search" style="background:url(../images/send.gif); width:81px; height:32px;float: left; border:none; color:#FFFFFF;" /></td></tr></form>
           
		   <tr><td colspan="7" align="center"><table width="602" height="146">
		     <tr align="center"><TD height="59" colspan='4' align='center' class=tblcell1  style="background:url(../images/bb.png) 0 0 no-repeat; width:373px; height:33px; background-position:center;">
			<font face='Verdana' color="#FFFFFF">
			<b>Search Result</b></font></TD>
          			</TR> 	
					 <TR class=tblrow>
          <TD class=tblcell1 bgcolor="#990000" height='21' width='120'><b>
			<font face='Verdana' size='2' color="#FFFFFF">Username</font></b></TD>
          <TD class=tblcell1 bgcolor="#990000" height='21' width='212'><b>
			<font face='Verdana' size='2' color="#FFFFFF">Email ID</font></b></TD>
          <TD class=tblcell1 bgcolor="#990000" height='21' width='153'><b>
			<font face='Verdana' size='2' color="#FFFFFF">View Profile</font></b></TD>
          
          </tr>
		   <?php

        
        $select=$_REQUEST['select'];
		if($select=='1'){
		$select='Female';}
		else{
		$select='Male';}
        $agefrom=$_REQUEST['agefrom'];
        $ageto=$_REQUEST['ageto'];
        $state1=$_REQUEST['state1'];
$data=mysql_query("SELECT * FROM user_info WHERE gender='".$select."' AND state='".$state1."' AND age between '" . $agefrom . "' AND '" . $ageto."' ORDER BY registeration_no DESC");
$data1=mysql_fetch_array( $data );
if($data1[0]==NULL){
ECHO "<tr height=100><td colspan=3 align=center><font color=red>Search Result Not Found</font></td></tr>";
}
while($data1=mysql_fetch_array( $data )){
?>
<TR class=tblrow>
          <TD class=tblcell1 height="28" width="120"><b>
			<font face="Verdana" size="2"><?php echo $data1[1];?></font></b></TD>
          <TD class=tblcell1 height="28" width="212"><b>
			<font face="Verdana" size="2"><?php echo $data1[4];?></font></b></TD>
          <TD class=tblcell1 height="28" width="153">
			<b><font face="Verdana" size="2">
			<a target="_blank" href="view_user.php?no=<?php echo $data1[0];?>">
			view profile</a></font></b></TD>
         </tr>
		 <?php
		 }
		 ?>
		 </table>



</td></tr>
		   
		   </table></td>
  <td valign="top" colspan="2">
	 <table width="274" height="142" border="0" cellPadding="0" cellSpacing="0" style="background:url(../images/conten.png) 0 0 no-repeat;" >
						
	<tr>
								
									<td width="274" height="27" align="center"><font color="#FFFFFF">Gold Package Feature</font></td>
		</tr>
								 
	<tr align=left><td height="23"><font  face="Verdana" size="2">&nbsp;&nbsp;&nbsp;Unlimited messages.</font> </td>
		</tr>
				 
				 
	<tr>
			 
           <td width="274" height="46" align=left><font   face="Verdana" size="2">&nbsp;&nbsp;&nbsp;Unlimited Expression Messages.</font> </td>
			
		      </tr><tr>
					 
									<td height="23" align=left><font   face="Verdana" size="2">&nbsp;&nbsp;&nbsp;Unlimited Mobile No. View.</font> </td>
		</tr><tr>
					 
									<td height="23" align=left><font   face="Verdana" size="2">&nbsp;&nbsp;&nbsp;Free Live Chat.</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		</tr></table><br /><table width="274" height="148" border="0" cellPadding="0" cellSpacing="0" style="background:url(../images/conten.png) 0 0 no-repeat;" >
						
	<tr>
								
									<td width="274" height="26" align="center"><font color="#FFFFFF">Silver Package Feature</font></td>
		</tr>
								 
	<tr align=left><td><font  face="Verdana" size="2">&nbsp;&nbsp;&nbsp;Unlimited messages.</font> </td>
		</tr>
				 
				 
	<tr>
			 
           <td width="274" height="46" align=left><font   face="Verdana" size="2">&nbsp;&nbsp;&nbsp;Unlimited Expression Messages.</font> </td>
			
		      </tr><tr>
					 
									<td align=left><font   face="Verdana" size="2">&nbsp;&nbsp;&nbsp;60  Mobile No. View.</font> </td>
		</tr><tr>
					 
									<td height="28" align=left><font   face="Verdana" size="2">&nbsp;&nbsp;&nbsp;Free Live Chat.</font> </td>
		</tr></table><br /><table><tr>
					
									<td align=left><font color="#808080" face="Verdana" size="2">Expiration Date:</font><font color="red"> <?php
echo "".$new_date_of_target."/".$new_target_month."/".$new_year; 
echo "(".$left_days."Days Left)";
?>
									</font></td>
		</tr><tr><td></td></tr>

	   
	      </table></td></tr></table>
	 
	 </div>
<?php					
}
?>
	  </td>
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
