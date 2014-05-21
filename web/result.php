<?php
	require("script/common.php");
	require("script/mysql.php");
require("script/openfile.php");
require("script/validation.php");
include('ps_pagination.php');

	$link = connect($hname,$uname,$passwd);
	usedatabase($dbname,$link);	
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
    $sql = "SELECT * FROM user_info WHERE gender='".$select1."' AND state='".$state1."' AND age between '" . $agefrom . "' AND '" . $ageto."' and status='".$status2."' ORDER BY registeration_no DESC";


	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ristaa.com - Hindu Matrimony, Hindu Matrimonial</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/style-tango.css" rel="stylesheet" type="text/css" />

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
function validate1()
{
	
	if(trim(document.login.username1.value)=="")
	{
		alert("Enter The User Name.");
		document.login.username1.focus();
		return false;
	}
	else if(document.login.username1.value.length<6)
	{
		alert("User Name Should Have At Least 6 Letters.");
		document.login.username1.focus();
		document.login.username1.select();
		return false;
	}
	
	 	
	if(trim(document.login.password1.value)=="")
	{
		alert("Enter The Password.");
		document.login.password1.focus();
		return false;
	}
	else if(document.login.password1.value.length<6)
	{
		alert("Password Should Have At Least 6 Letters.");
		document.login.password1.focus();
		document.login.password1.select();
		return false;
	}
	
		
	return true;
} 

-->
</script>


</head>
<body>
<div class="topbg-logo2">
  <div class="topbg-logo">
    <div class="logo-holder"></div>

    <div class="link-holder">
      <div class="link-holder3"><a href="index.php">Home</a></div>
      <div class="link-holder2"><a href="register.php">register</a></div>
      <div class="link-holder2"><a href="login.php">Login</a></div>
      <div class="link-holder2"><a href="search.php">search</a></div>
      <div class="link-holder2"><a href="about_us.php">About us </a></div>
      <div class="link-holder2"><a href="contact.php">contact us</a></div>
    </div>
  </div>
</div>
<div class="header-bg1">
&nbsp;</div>
<div class="login-bg"> <form name="login" onSubmit="return validate1();" method="post" action="user_login/login_validate.php" enctype="multipart/form-data">
 <div class="login-holder" style="width: 785px; height: 56px">
     
     <table width="790">
       <tr>
     <td width="168"><font  color="white" size="+1"><b>Member Login:</b></font></td> 
     <td width="89"><font  color="white"> Username</font></td>
     <td width="142"> 
      <input name="username1" type="text" value="" size="18" style="background-color:#FFCCCC; color:#999999; border:#990000;" /></td> <td width="88"><font  color="white">Password</font></td>
      <td width="153"> 
      <input name="password1" type="password" value="" size="20" style="background-color:#FFCCCC; color:#999999; border:#990000;" /></td><td width="122"> <input type=submit value="" style="background:url(images/login.png); width:114px; height:28px; border:none;"></td></tr></table>
      
  </div>
  </form>
</div>

<div align="center">
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
									<td height="26" width="100%" align="left" colspan="7">
									
									<b>
			<font face="Verdana" size="3" color="#666666">Search</font></b></td>
								</tr>
				 <form name="search" method="post" action="result.php" enctype="multipart/form-data">
				 
	<tr>
									<td height="26" width="107" align="left">
									
									<b><font face="Verdana" size="2" color="#990000">Looking For 
									: </font>
		</b>
      
									</td>
									<td height="26" width="119" align="left">
									
          <span style="PADDING-TOP: 6px">
      <select 
                              class="contentyellow" style="WIDTH: 107px" 
                              name="select">
                             
                             <option value="<?php echo $_REQUEST['select'];?>" selected><?php if ($select=="1")echo "Brides";
                             else
                             echo "Grooms";?></option> 
        <option value="1" 
                                >Brides</option>
        <option 
                                value="0">Grooms</option>
      </select></span></td>
									<td height="26" width="51" align="left">
									
									<b><font face="Verdana" size="2" color="#999999">Age :</font></b></td>
									<td height="26" width="125" align="left">
									
        						<select name="agefrom" style="width: 44px;">
                                  <option value="<?php echo $agefrom;?>" selected><?php echo $agefrom; ?></option>
                                  <option>
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
                              class="searcFields" ><font color="#999999">to</font></span>
      </span> <select name="ageto" style="width: 44px;"><option value="<?php echo $ageto;?>" selected><?php echo $ageto; ?></option><option>
								18</option><option>
		19</option><option>20</option><option>21</option><option>22</option><option>
		23</option><option>24</option><option>25</option><option>26</option><option>
		27</option><option>28</option><option>29</option><option>30</option><option>
		31</option><option>32</option><option>33</option><option>34</option><option>
		35</option><option>36</option><option>37</option><option>38</option><option>
		39</option><option>40</option><option>41</option><option>42</option><option>
		43</option><option>44</option><option>45</option><option>46</option><option>
		47</option><option>48</option><option>49</option><option>50</option><option>
		51</option><option>52</option><option>53</option><option>54</option><option>

		55</option><option>56</option><option>57</option><option>58</option><option>
		59</option><option>60</option></select><span style="PADDING-TOP: 6px">
      </span></td>
									<td height="26" width="96" align="left">
									
									<b><font face="Verdana" size="2" color="#999999">Location : </font></b>
      
									</td>
									<td height="26" width="153" align="left">
									
          <span style="PADDING-TOP: 6px">
      <select 
                              class="contentyellow" style="WIDTH: 135px; height:21" 
                              name="state1">
                              <option value="<?php echo $state1;?>" selected><?php echo $state1; ?></option>
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
                  <option value="Other">Other</option>      </select></span></td>
									<td height="26" width="337" align="left">
									
       
          <input type="submit" name="Submit" value="" style="background:url(images/search.jpg); width:176px; height:28px;float: left; border:none;" /></td>
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
						<font face="Verdana" color="#990033">Search Results</font></b></td>
								</tr>
								<?php 
                           $pager = new PS_Pagination($conn, $sql, 5, 5, "param1=valu1&param2=value2");
	
	
	$pager->setDebug(true);
	$rs = $pager->paginate();
    if(!$rs) die(mysql_error());
 	while($row = mysql_fetch_assoc($rs)) 
    {
     
        ?>
								<tr>
						<td width="920" height="26" align="left" colspan="7">
						
						
						<div align="center">
							<table border="0" width="764" cellspacing="0" cellpadding="0" style="border: 1px solid #000000">
								<tr>
									<td width="139" rowspan="6" valign="middle">
									<p align="center">
									<a target="_blank" href="login.php">
									<img border="0" src="<?php echo $row['image_url'];?>" width="123" height="148" style="border: 1px solid #000000" title="<?php echo $row['name'];?>"></a></td>
									<td valign="bottom" height="15" width="625" colspan="2" align="left">
									<font face="Verdana" size="2"><b>Name :</b> <?php echo $row['name'];?></font></td>
								</tr>
								
								<tr>
									<td valign="bottom" height="15" width="309" align="left">
									<font face="Verdana" size="2"><b>Date of 
									Birth :</b> <?php echo $row['date_birth']."-".$row['month_birth']."-".$row['year_birth'];?></font></td>
									<td valign="bottom" height="15" width="316" align="left">									
									<font face="Verdana" size="2"><b>Time of 
									Birth :</b> <?php echo $row['hour_birth'].":".$row['minutes_birth'].":".$row['am_birth'];?></font></td>
								</tr>
								
								<tr>
									<td valign="bottom" height="15" width="625" colspan="2" align="left">
									<font face="Verdana" size="2"><b>Marital 
									Status :</b> <?php echo $row['marital_status'];?></font></td>
								</tr>
								<tr>
									<td valign="bottom" height="15" width="625" colspan="2" align="left">
									<font face="Verdana" size="2"><b>Location :</b> <?php echo $row['country']." - ".$row['state']." - ".$row['city'];?></font></td>
								</tr>
								<tr>
									<td height="5" width="625" colspan="2" align="right">
									<b>
									<a style="text-decoration: none" href="login.php"><font face="Verdana" size="2" color=maroon>Login to view profile</font></a></b>&nbsp;&nbsp; &nbsp;</td>
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
									<td height="26" width="100%" align="right" colspan="7"><font face="Verdana" size="2"><b><?php echo $pager->renderFullNav();?></b></font>
									&nbsp;</td>
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

</body>
</html>
