<?php
	require("script/common.php");
	require("script/mysql.php");
require("script/openfile.php");
require("script/validation.php");


	$link = connect($hname,$uname,$passwd);
	usedatabase($dbname,$link);	
	


	
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
      <div class="link-holder2"><a href="index.php">Home</a></div>
      <div class="link-holder2"><a href="register.php">register</a></div>
      <div class="link-holder2"><a href="login.php">Login</a></div>
      <div class="link-holder3"><a href="search.php">search</a></div>
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
     <td width="89"><font color="white"> Username</font></td>
     <td width="142"> 
      <input name="username1" type="text" value="" size="18" style="background-color:#FFCCCC; color:#999999; border:#990000;" /></td> <td width="88"><font color="white">Password</font></td>
      <td width="153"> 
      <input name="password1" type="password" value="" size="20"style="background-color:#FFCCCC; color:#999999; border:#990000;" /></td><td width="122"> <input type=submit value="" style="background:url(images/login.png); width:114px; height:28px; border:none;"></td></tr></table>
      
  </div>
  </form>
</div>

<div align="center">
<table width=1000 cellspacing="0" cellpadding="0" style="background:url(images/background.jpg) 0 0 no-repeat; background-position:center; background-color:#FFFFFF "><tr><td>
<table width="996" height="363" border="0" cellpadding="0" cellspacing="0">
					<form name="search" method="post" action="result.php" enctype="multipart/form-data"> 
<tr>
						<td width="270" rowspan="14">&nbsp;</td>
						<td height="2" colspan="2"></td>
					</tr>
					<tr>
						<td width="128" height="26" align="left">&nbsp;</td>
					  <td width="598" height="26" align="left">&nbsp;					  </td>
					</tr>
					<tr>
						<td height="26" align="left" colspan="2" >&nbsp;<b><font face="Verdana" color="#800000">Search For Partner</font></b>&nbsp;</td>
					</tr>
					<tr>
						<td height="18" align="left" colspan="2">						</td>
					</tr>
					<tr>
						<td width="128" height="42" align="left"><b><font face="Verdana" size="2" color="#999999">
						Looking For : </font>
		</b>        				</td>
						<td width="598" height="42" align="left">
        
          <font face="Verdana" size="3">
          <select name="select" style="width:210px; background-color:#666666; color:#FFFFFF">
            <option value="1" 
                                selected="selected">Brides</option>
            <option 
                                value="0">Grooms</option>
          </select></font></td>
					</tr>
					<tr>
						<td width="128" height="42" align="left"><b><font face="Verdana" size="2" color="#999999">
						Age :</font></b></td>
						<td width="598" align="left">
    
        <font face="Verdana" size="3">
        <select name="agefrom" style=" background-color:#666666; color:#FFFFFF">
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
        </select></font><b><font size="2" face="Verdana"> to </font></b>
		<font face="Verdana" size="3">
        <select name="ageto"style=" background-color:#666666; color:#FFFFFF">
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
        </select></font></td>
					</tr>
					<tr>
						<td width="128" height="45" align="left"><b><font face="Verdana" size="2" color="#999999">
						Location : </font></b>        				</td>
						<td width="598" align="left">
       
          <font face="Verdana">
          <select name="state1"style=" background-color:#666666; color:#FFFFFF; width:210px;">
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
          </select></font></td>
					</tr>
					<tr>
						<td width="128" height="22" align="left"></td>
						<td width="598" height="22" align="left"></td>
					</tr>
					<tr>
						<td width="128" height="40">&nbsp;</td>
						<td width="598" height="40" valign="top">
    
       
          <input type="submit" name="" value="" style="float: left; background:url(images/search.jpg); color:#CCCCCC; border:none; width:170px; height:28px;" /></td>
					</tr>
					<tr>
						<td width="128" height="26">&nbsp;</td>
						<td width="598" height="26">
					  <p align="left"></td>
					</tr>
					
					<tr>
						<td width="128" height="26">&nbsp;</td>
						<td width="598" height="26">&nbsp;</td>
					</tr>
					</form>
		</table>
</td></tr></table>
</div>
<div class="footer">
  <div id="footer-bound">
	<p align="center">Copyright 2011. All rights reserved.</div>
</div>
</body>
</html>
