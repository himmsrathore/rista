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
if($username=="")
{
 $login="logout";
        echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../login.php?login=".$login."');\n");
		echo("-->\n");
		echo("</script>");
		}
        $select=$_REQUEST['select'];
        $agefrom=$_REQUEST['agefrom'];
		$ageto=$_REQUEST['ageto'];
        $state1=$_REQUEST['state1'];
 $conn = mysql_connect($hname,$uname,$passwd);
	if(!$conn) die("Failed to connect to database!");
	$status = mysql_select_db($dbname, $conn);
	if(!$status) die("Failed to select database!");
    if($select=="1")
    $select1="Female";
    else
    $select1="Male";
    $status2="VY";
    //$activate_status = "YES";
	//$sql = "SELECT * FROM user_info WHERE gender='".$select1."' AND state='".$state1."' ORDER BY registeration_no DESC";
$sql = "SELECT * FROM user_info WHERE gender='".$select1."' AND state='".$state1."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND status='".$status2."' ORDER BY registeration_no DESC";
	
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
<div class="login-bg" style="width: 1000px; height: 60px"><center>
  <center>
    <div class="login-holder" style="width: 879px; height: 47px"> <font face="Verdana" size="2"  color="white"><b><a style="text-decoration: none" href="interests_received.php"> <font  color="white">Interests Received</font></a>&nbsp; |&nbsp; <a style="text-decoration: none" href="interests_expressed.php"> <font  color="white">Interests Expressed</font></a>&nbsp; |&nbsp; <a href="#" name="link1" id="link1" style="text-decoration: none" onmouseover="MM_showMenu(window.mm_menu_0521105438_0,-4,20,null,'link1')" onmouseout="MM_startTimeout();"><font color="white">Search</font></a> &nbsp; | <a href="#" name="link2" id="link2" style="text-decoration: none" onmouseover="MM_showMenu(window.mm_menu_0521105438_1,-4,20,null,'link2')" onmouseout="MM_startTimeout();"><font color="white">Upgrade</font></a> | &nbsp;<a style="text-decoration: none" href="change_password.php"> <font  color="white">Change Password</font></a>&nbsp; |&nbsp; <a style="text-decoration: none" href="delete_account.php"> <font  color="white">Delete Account</font></a>

</b></font></div>
  </center>

</div><div align="center">
<table width=1000 cellspacing="0" cellpadding="0" background="../images/main.jpg"><tr><td>
<table border="0" width="989" cellspacing="0" cellpadding="0">
					

					
					
					<tr>
						<td width="980" height="26">
						<table border="0" cellSpacing="0" cellPadding="0" width="977">
						
	<tr>
									<td height="26" width="100%" align="left" colspan="7">&nbsp;
									</td>
								</tr>
								 
	<tr>
									<td height="35" align="left"><font color="#FF0000" size="+1">Regular Search</font></td>
  </tr><tr><td>
     <form name="search" method="post" action="result.php" enctype="multipart/form-data">
       <table width="869" height="96">
         <tr valign="middle">
           <td height="26" width="119" align="left"><b><font face="Verdana" size="2" color="#003300">Looking For 
             : </font> </b> </td>
           <td height="26" width="124" align="left"><span style="PADDING-TOP: 6px">
             <select  style="font-weight: 700; color:#FFFFFF; background-color:#999999; width:120px;"
                              class="contentyellow"  
                              name="select"><option value="<?php echo $_REQUEST['select'];?>" selected><?php if ($select=="1")echo "Brides";
                             else
                             echo "Grooms";?></option>
               <option value="1" 
                                >Brides</option>
               <option 
                                value="0">Grooms</option>
             </select>
           </span></td>
           <td height="26" width="46" align="left"><b><font face="Verdana" size="2" >Age :</font></b></td>
           <td height="26" width="133" align="left"><select name="agefrom" style="width: 44px;font-weight: 700; color:#FFFFFF; background-color:#999999;">
               <option value="<?php echo $agefrom;?>" selected><?php echo $agefrom; ?></option><option> 18</option>
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
                 <option value="<?php echo $ageto;?>" selected><?php echo $ageto; ?></option><option>18</option>
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
           <td height="26" width="86" align="left"><b><font face="Verdana" size="2" >Location : </font></b> </td>
           <td height="26" width="146" align="left"><span style="PADDING-TOP: 6px">
             <select 
                              class="contentyellow" style="WIDTH: 135px; font-weight: 700; color:#FFFFFF; background-color:#999999;" 
                              name="state1"><option value="<?php echo $state1;?>" selected><?php echo $state1; ?></option>
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
           </span></td>
           <td height="26" width="183" align="left"><input type="submit" name="Submit" value="" style="background:url(../images/search.jpg); width:176px; height:28px;float: left; border:none;" /></td>
         </tr>
       </table>
     </form></td>
								</tr>
								 </form>
	<tr>
									<td height="26" width="100%" align="left" colspan="7">&nbsp;
									
									</td>
								</tr>
								 
	<tr>
									<td height="26" width="100%" align="left" colspan="7">
									
									</td>
								</tr>
								<tr>
						<td width="24%" height="26" align="left" colspan="7"><b>
						<font face="Verdana" color="#FF0000">Search Results</font></b></td>
								</tr>
								<?php 
                           $pager = new PS_Pagination($conn, $sql, 5, 5, "param1=valu1&param2=value2");
	
	
	$pager->setDebug(true);
	
	
	$rs = $pager->paginate();
	if(!$rs) die(mysql_error());
	while($row = mysql_fetch_array($rs)) 
    {
     
        ?>
								<tr>
						<td width="920" height="26" align="left" colspan="7">
						
						
						<div align="center">
							<table border="0" width="764" cellspacing="0" cellpadding="0" style="border: 1px solid #000000">
								<tr>
									<td width="139" rowspan="6" valign="middle">
									<p align="center">
									<a target="_blank" href="view_user.php?no=<?php echo $row['registeration_no'];?>">
									<img border="0" src="../<?php echo $row['image_url'];?>" width="123" height="148" style="border: 1px solid #000000" title="<?php echo $row['name'];?>"></a></td>
									<td valign="bottom" height="15" width="625" colspan="2" align="left">
									<font face="Verdana" size="2" ><b>Name :</b> <font color="#666666"><?php echo $row['name'];?></font></font></td>
								</tr>
								
								
								<tr>
									<td valign="bottom" height="15" width="625" colspan="2" align="left">
									<font face="Verdana" size="2" ><b>Email :</b><font color="#666666"> <?php 
								$ch=mysql_query("select upgrade_status from user_info where username='$username'");
								$ch1=mysql_fetch_array($ch);
								if($ch1[0]=='upgraded'){ echo $row['email'];}?></font></font></td>
								</tr>
								
								
								<tr>
									<td valign="bottom" height="15" width="309" align="left">
									<font face="Verdana" size="2" ><b>Date of 
									Birth :</b><font color="#666666"> <?php echo $row['date_birth']."-".$row['month_birth']."-".$row['year_birth'];?></font></font></td>
									<td valign="bottom" height="15" width="316" align="left">									
									<font face="Verdana" size="2" ><b>Time of 
									Birth :</b><font color="#666666"> <?php echo $row['hour_birth'].":".$row['minutes_birth'].":".$row['am_birth'];?></font></font></td>
								</tr>
								
								<tr>
									<td valign="bottom" height="15" width="625" align="left">
									<font face="Verdana" size="2" ><b>Marital 
									Status :</b><font color="#666666"> <?php echo $row['marital_status'];?></font></font></td>
									<td valign="bottom" height="15" width="625" align="left">
									<?php
									$ch=mysql_query("select upgrade_status from user_info where username='$username'");
									$ch1=mysql_fetch_array($ch);
									if($ch1[0]=='upgraded'){
									echo "<a target='_blank' style='text-decoration: none; font-weight: 700' href=interest_expressed.php?no=".$row['registeration_no']."><font color='red' face='Verdana' size='2'>
									Interest Express</font></a>";}
									else{
									echo "<a target='_blank' style='text-decoration: none; font-weight: 700' href=in_exp.php?no=".$row['registeration_no']."><font color='red' face='Verdana' size='2'>
									Interest Express</font></a>";
									}
									
?>
</td>
								</tr>
								<tr>
									<td valign="bottom" height="15" width="625"  align="left">
									<font face="Verdana" size="2" ><b>Location :</b> <font color="#666666"><?php echo $row['country']." - ".$row['state']." - ".$row['city'];?></font></font></td><td align="left"><a target="_blank" href="view_user.php?no=<?php echo $row['registeration_no'];?>" style="text-decoration:none;"><font color="#666666" face="Verdana">View Profile</font></a></td>
								</tr>
								<tr>
									<td height="5" width="625" colspan="2" align="left">&nbsp;
									 </td>
								</tr>
							</table></div>
						</td>
					</tr>
					<tr><td colspan=7>&nbsp;</td></tr>
								<?php
	}
    ?><tr>
									<td height="26" width="100%" align="left" colspan="7">&nbsp;
									</td>
								</tr>
								<tr>
									<td height="26" width="100%" align="right" colspan="7"><font face="Verdana" size="2" ><b><?php echo $pager->renderFullNav();?></b></font>
									&nbsp;</td>
								</tr>
							<tr>
									<td height="26" width="100%" align="center" colspan="7"><font face="Verdana" size="2" ><b>
									<?php 
                                        
    $que=mysql_query($sql);
										$row1 = mysql_fetch_array($que);
										if($row1[0]==NULL){
										echo "<font color=red>No Result Found</font>";
										}
									
									?></b></font>
									&nbsp;</td>
								</tr>
					<tr>
						<td width="980" height="91" colspan="3">&nbsp;</td>
						<td width="6" height="91">&nbsp;</td>
					</tr>
						</table>
						&nbsp;</td>
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
