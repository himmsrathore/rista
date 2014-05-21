<?php
	require("script/common.php");
	require("script/mysql.php");
require("script/openfile.php");
require("script/validation.php");
include('ps_pagination.php');

	$link = connect($hname,$uname,$passwd);
	usedatabase($dbname,$link);	
	$conn = mysql_connect($hname,$uname,$passwd);
	if(!$conn) die("Failed to connect to database!");
	$status = mysql_select_db($dbname, $conn);
	if(!$status) die("Failed to select database!");
    $status2="VY";
	$sql = "SELECT name,image_url,age FROM user_info where status='".$status2."' ORDER BY registeration_no DESC";


	
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
      <div class="font3"><font size="2" face="Verdana">Location:</font></div>
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
<div class="login-bg"> <form name="login" onSubmit="return validate1();" method="post" action="user_login/login_validate.php" enctype="multipart/form-data">
  <div class="login-holder" style="width: 785px; height: 56px">
     
     <table width="790">
       <tr>
     <td width="168"><font  color="white" size="+1"><b>Member Login:</b></font></td> 
     <td width="89"><font color="white"> Username</font></td>
     <td width="142"> 
      <input name="username1" type="text" value="" size="18" style="background-color:#FFCCCC; color:#999999; border:#990000;" /></td> <td width="88"><font color="white">Password</font></td>
      <td width="153"> 
      <input name="password1" type="password" value="" size="20"style="background-color:#FFCCCC; color:#999999; border:#990000;" /></td><td width="122"> <input type=submit value="" style="background:url(images/login.png); width:114px; height:28px; border:none;"></td></tr></table>
      
  </div>
  </form>
</div>
<div class="content-part">
  <div class="dove-part">
    <br />
    <img src="images/sucsses.png" alt="01" width="187" height="35" /><br />
  <br /><a href="success_stories.php" style="text_decoration: none">
  <img src="images/pics.jpg" style="text-decoration: none" border="0" /></a>
  <table width=177 height="162">
    <tr valign="top">
      <td height="156"><font face="Verdana" size="2" color="#666666">Received expression of interest through my Husband&#39;s 
						side. it was accepted on my behalf by my mother.... when 
						we accepted their purposal.......</font><br><a href=success_stories.php><img src="images/more.gif" width=76 height="28" style="border:none" />
						</a></td>
    </tr></table>
  </div>
  <div class="dove2-part">
    <div class="box">
      <div class="box-L"><img src="images/booking.png" alt="Book now" width="127" height="176" /></div>
      <div class="box-R"><a href="register.php" style="text-decoration:none"><span class="font1">Register Free Now</span></a></div>
      <div class="box-RR" style="width: 600px; height: 60px">
		<b><font face="Verdana" size="2" color="#006600">Ristaa</font></b><font face="Verdana" size="2" color="#006600"><b>.com</b></font><font face="Verdana" size="2" color="#666666"> 
		is a wedding portal that provides its visitors with the best information 
		concerning their preferred bride or groom. You will be able to view 
		their listed profiles that match up to your expectations. After all it 
		is well said that,  “Marriage is made in Heaven” and we lend our hand to 
		perform this ritual on earth.</font></div>
    </div>
  </div>
  <div class="box3"><img src="images/latest-profile.png" alt="Latest Profile" width="730" height="35" /><br />
      <br />
    <?php 
                           $pager = new PS_Pagination($conn, $sql, 5, 5, "param1=valu1&param2=value2");
	
	
	$pager->setDebug(true);
	
	
	$rs = $pager->paginate();
	if(!$rs) die(mysql_error());
	while($row = mysql_fetch_assoc($rs)) 
    {
     
        ?>
        <div class="pic-holder"><a href="login.php?v=i" style="text-decoration:none; border:none;"><table><tr><td colspan="2"><img border="none" src="<?php echo $row['image_url'];?>" title="<?php echo $row['name']; ?>" width="100" height="100" /></td></tr><tr align="left"><td width="33"><font color="#FF0000">Name:</font></td>
        <td width="63"><font color="#666666"><?php echo $row['name']; ?></font></td>
        </tr><tr align="left"><td><font  color="#FF0000">Age:</font></td><td><font color="#666666"><?php echo $row['age']; ?></font></td></tr></table></a><br /></div>
            <?php
	}
    ?><br />
        <br />
        <br />
        <br />
	<div style="position: absolute; width: 131px; height: 77px; z-index: 2; left: 281px; top: 765px" id="layer2">
		<p align="center"><font face="Verdana" size="2" color="#666666"><img border="0" src="images/ring.png" width="107" height="78" /></font>
	</div>

        <br />
        <br />
        <br />
        <br />
        <br />
  </div>
</div>
<div class="footer">
  <div id="footer-bound">
	<p align="center">Copyright 2011. All rights reserved.</div>
</div>
</body>
</html>
 