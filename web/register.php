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
<?php
echeck("registration_form") ;
email_ValidateForm("registration_form");
 isProperPass();
 isProper();
 isPass();
isProper_name();

?>
function getExtension(value)
{
var mytext = value.substring(value.lastIndexOf('.') + 1,value.length);
return mytext.toLowerCase();
}

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

function getQueryVariable(variable) 
{
  var query = window.location.search.substring(1);
  var vars = query.split("&");
  for (var i=0;i<vars.length;i++) {
    var pair = vars[i].split("=");
    if (pair[0] == variable) {
      return pair[1];
    }
  } 
  return "";
 }

function checkavailability()
{
	 
  var docF=document.registration_form;
  var theUrl = 'checkavailability.php';
  var winName ='Availability';
  var features = 'scrollbars=yes,width=410,height=220';
  	if(document.registration_form.uname.value=="")
	{
		alert("User Name Not Specified.");
		document.registration_form.uname.focus(); 
		return;
	}
	
	if(document.registration_form.uname.value.length<6)
	{
		alert("Please Enter A User Name of At Least 6 Letters.");
		document.registration_form.uname.focus(); 
		document.registration_form.uname.select();
		return;
	}

       if (isProper(document.registration_form.uname.value)==false)
       {
         alert("User Name Accepts Only Alphanumeric Characters.");  
         document.registration_form.uname.focus();
  	 document.registration_form.uname.select();
	 return false
	}

  window.open(theUrl + "?uname=" + docF.uname.value,winName,features);

}

function getExtension(value)
{
var mytext = value.substring(value.lastIndexOf('.') + 1,value.length);
return mytext.toLowerCase();
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

function validate()
{
	
	if(trim(document.registration_form.uname.value)=="")
	{
		alert("Enter The User Name.");
		document.registration_form.uname.focus();
		return false;
	}
	else if(document.registration_form.uname.value.length<6)
	{
		alert("User Name Should Have At Least 6 Letters.");
		document.registration_form.uname.focus();
		document.registration_form.uname.select();
		return false;
	}
	
	if(trim(document.registration_form.pass1.value)=="")
	{
		alert("Enter The Password.");
		document.registration_form.pass1.focus();
		return false;
	}
	else if(document.registration_form.pass1.value.length<6)
	{
		alert("Password Should Have At Least 6 Letters.");
		document.registration_form.pass1.focus();
		document.registration_form.pass1.select();
		return false;
	}
	
	if (isPass(document.registration_form.pass1.value)==false)
       {
        alert("Valid Password Accepts Only Alphanumeric Characters.");  
        document.registration_form.pass1.focus();
  	document.registration_form.pass1.select();
	return false;
	}
	
	
	if(trim(document.registration_form.pass2.value)=="")
	{
		alert("Enter The Confirm Password.");
		document.registration_form.pass2.focus();
		return false;
	}
	
	
var pass=trim(document.registration_form.pass1.value);
	var conf_pass=trim(document.registration_form.pass2.value);
	if(pass !=conf_pass)
	{
		alert("The Password And Confirm Password Should Match.");
		document.registration_form.pass2.focus();
		document.registration_form.pass2.select();
		return false;

	}

	if(trim(document.registration_form.name.value)=="")
		{
		alert("Please Specify Your Name.");
		document.registration_form.name.focus();
		document.registration_form.name.select();
		return false;
		}
       	if(document.registration_form.email.value=="")
		{
		alert("Please Specify Your Email Address.");
		document.registration_form.email.focus();
		return false;
		}
		if(document.registration_form.email.value !="")
        {
			if(echeck(document.registration_form.email.value)==false)
			{
			alert("Please Specify Correct Email Address.");
			document.registration_form.email.focus();
			document.registration_form.email.select();
			return false;
			}
        }
        if(document.registration_form.gender.value =="")
	{
		alert("Please Select Your Gender.");
		document.registration_form.gender.focus();
		return false;
	}
	
	if(document.registration_form.DOB_date.value =="")
	{
		alert("Please Select A Date Of Birth.");
		document.registration_form.DOB_date.focus();
		return false;
	}
	if(document.registration_form.DOB_month.value =="")
	{
		alert("Please Select A Month Of Birth.");
		document.registration_form.DOB_month.focus();
		return false;
	}
	if(document.registration_form.DOB_year.value =="")
	{
		alert("Please Select A Year Of Birth.");
		document.registration_form.DOB_year.focus();
		return false;
	}
	if(document.registration_form.hour.value =="")
	{
		alert("Please Select hour of birth time.");
		document.registration_form.hour.focus();
		return false;
	}
    if(document.registration_form.minute.value =="")
	{
		alert("Please Select minute of birth time.");
		document.registration_form.minute.focus();
		return false;
	}
    if(document.registration_form.birth_place.value =="")
	{
		alert("Please Enter Your Place Of Birth.");
		document.registration_form.birth_place.focus();
		return false;
	}
    
    if(document.registration_form.cast.value=="Select")
	{
		alert("Please Select your cast.");
		document.registration_form.cast.focus();
		return false;
	}
    
    var y = document.registration_form.mobile_no.value;
           if(isNaN(y)||y.indexOf(" ")!=-1)
           {
              alert("Enter numeric value");
			  document.registration_form.mobile_no.focus();
              return false; 
           }
           if (y.length<10)
           {
                alert("Enter 10 digits.");
				document.registration_form.mobile_no.focus();
                return false;
           }
        
    
    
    
    if(document.registration_form.marital_status.value=="")
	{
		alert("Please Select your marital Status.");
		document.registration_form.marital_status.focus();
		return false;
	}
	if(document.registration_form.child.value=="")
	{
		alert("please Select Your Children Status.");
		document.registration_form.child.focus();
		return false;
	}
	
	
	

 
    if(document.registration_form.country.value=="")
	{
		alert("Please Select your country.");
		document.registration_form.country.focus();
		return false;
	}
	
	
	
    if(document.registration_form.state.value=="")
	{
		alert("Please Select your state.");
		document.registration_form.state.focus();
		return false;
	}
    if(document.registration_form.city.value=="")
	{
		alert("Enter your city name.");
		document.registration_form.city.focus();
		return false;
	}
	var ext = getExtension(document.registration_form.uploadedfile.value);

if ((document.registration_form.uploadedfile.value != "") && ext != 'jpeg' && ext != 'jpg' && ext != 'gif' && ext != 'pjpeg')
{
aa="You Can Upload .jpg, .jpeg, .gif or pjpeg.";
alert(aa);
document.registration_form.uploadedfile.focus();
return false;
}
if(document.registration_form.uploadedfile.value=="")
	{
		alert("Please upload image.");
		document.registration_form.uploadedfile.focus();
		return false;
	}
    
if(document.registration_form.physical_status.value=="")
	{
		alert("Please Select your Physical Status.");
		document.registration_form.physical_status.focus();
		return false;
	}
	if(document.registration_form.manglik.value=="")
	{
		alert("Please Specify You are manglik or not.");
		document.registration_form.manglik.focus();
		return false;
	}
if(document.registration_form.family_status.value=="")
	{
		alert("Please Select your Family Status.");
		document.registration_form.family_status.focus();
		return false;
	}
if(document.registration_form.family_type.value=="")
	{
		alert("Please Select Your Family Type.");
		document.registration_form.family_type.focus();
		return false;
	}
if(document.registration_form.family_values.value=="")
	{
		alert("Please Select Your Family Values.");
		document.registration_form.family_values.focus();
		return false;
	}
if(document.registration_form.tnc.checked==false)
	{
		alert("Please Accept Terms And Conditions.");
        
		document.registration_form.tnc.focus();
		return false;
	}

    	
	return true;
} 

function check10(){

var coun=document.getElementById('country');
if(coun == 'india'){

alert("this is india");
}
}


function echeck(str) {

var at="@"
var dot="."
var lat=str.indexOf(at)
var lstr=str.length
var ldot=str.indexOf(dot)
if (str.indexOf(at)==-1)
{
return false;
}

if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr)
{
	return false;
}

if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr)
{
return false;
}

if (str.indexOf(at,(lat+1))!=-1)
{
return false;
}

if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot)
{
return false;
}

if (str.indexOf(dot,(lat+2))==-1)
{
return false;
}

if (str.indexOf(" ")!=-1)
{
return false;
}

if(str.lastIndexOf(dot) > (str.length-3))
{
 return false;
}
return true;
}

-->
</script></head>
<body>
<div class="topbg-logo2">
  <div class="topbg-logo">
    <div class="logo-holder"></div>

    <div class="link-holder">
      <div class="link-holder2"><a href="index.php">Home</a></div>
      <div class="link-holder3"><a href="register.php">register</a></div>
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
<div class="login-bg"> <form name="login" onSubmit="return validate1();" method="post" action="user_login/login_validate.php" enctype="multipart/form-data">
  <div class="login-holder" style="width: 785px; height: 56px">
     
     <table width="790">
       <tr>
     <td width="168"><font  color="white" size="+1"><b>Member Login:</b></font></td> 
     <td width="89"><font  color="white"> Username</font></td>
     <td width="142"> 
      <input name="username1" type="text" value="" size="18" style="background-color:#FFCCCC; color:#999999; border:#990000;" /></td> <td width="88"><font  color="white">Password</font></td>
      <td width="153"> 
      <input name="password1" type="password" value="" size="20"style="background-color:#FFCCCC; color:#999999; border:#990000;" /></td><td width="122"> <input type=submit value="" style="background:url(images/login.png); width:114px; height:28px; border:none;"></td></tr></table>
      
  </div>
  </form>
</div>
<div align="center">
<table width=1000 cellspacing="0" cellpadding="0"  align="center" bgcolor="#FFFFFF"><tr><td height="1255" align="center" valign="top">
<table height="1603" border="0" cellpadding="0"  cellspacing="0" bgcolor="#FFFFFF">
					<form name="registration_form" onSubmit="return validate();" method="post" action="success_registration.php" enctype="multipart/form-data">
						<tr>
						
						<td colspan="2" height="10">&nbsp;</td>
					</tr>
<tr>
			  <td height="35" colspan="2" bgcolor="#161616">
			  <p align="center"><font color="white" size="+2" style="text-decoration:underline"> Join Ristaa.com . Free Registration !! </font></td>
					</tr>
<tr>
						<td colspan="2" height="10">&nbsp;</td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font face="Verdana" size="2" color="#A0A0A4" >Username *</font></td>
						<td width="458" height="26" align="left">
										<font  color="#A0A0A4" face="Arial">
		<input type=text tabindex="1" name="uname"  style="background-color:#A0A0A4; width:300px;" /> </font><a href="#" onClick="checkavailability()" >
		<font  color="#A0A0A4" face="Arial">
		<input type="button" value="Check Availability" name="B1" tabindex="2" ></font></a></td>
					</tr>
					<?php
              if($_REQUEST['uname']=="duplicate")
              {
               	echo("<tr><td  colspan=\"2\"><font color=\"maroon\">");
				echo "Please Enter Other User Name. It's already used by other user.";
				echo("</font></td></tr>");
			}
              ?>   
					<tr>
						<td width="333" height="26" align="left">
						<font  face="Verdana" size="2" color="#A0A0A4">Password *</font></td>
						<td width="458" align="left"><font  color="#A0A0A4" face="Arial">
		<input type="password" tabindex="3" name="pass1"  size="18" style="background-color:#A0A0A4; width:300px;"/></font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Confirm 
						Password *</font></td>
						<td width="458" align="left"><font  color="#A0A0A4" face="Arial">
		<input type="password" tabindex="4" name="pass2" style="background-color:#A0A0A4; width:300px;" size="18" /></font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font color="#666666" face="Verdana">General Info.</font></td>
						<td width="458" align="left">&nbsp;</td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Name *</font></td>
						<td width="458" align="left"><font  color="#A0A0A4" face="Arial">
		<input tabindex="5" name="name" type=text style="background-color:#A0A0A4; width:300px;" /></font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Email *</font></td>
						<td width="458" align="left"><font  color="#A0A0A4" face="Arial">
		<input tabindex="6" type=text name="email" style="background-color:#A0A0A4; width:300px;" /></font></td>
					</tr>
					<?php
              if($_REQUEST['email']=="duplicate")
              {
               	echo("<tr><td  colspan=\"2\"><font color=\"maroon\">");
				echo "Please Enter Other Email-ID. It's already registered.";
				echo("</font></td></tr>");
			}
              ?>   
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Gender *</font></td>
						<td width="458" align="left"><font  color="#A0A0A4" face="Arial">
		<select id="gender" name="gender" size="1" tabindex="7" style="background-color:#A0A0A4; width:300px;">
                  <option selected>Select</option>
                  <option value="Female">Female</option>
                  <option value="Male">Male</option>
                  </select></font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Date of 
						Birth *</font></td>
						<td width="458" align="left"><font  color="#A0A0A4" face="Arial">
		<select name="DOB_date"  id="DOB_date" tabindex="8" style="background-color:#A0A0A4">
                                    <option name="date" value="">Date</option>
                                    <option name="date" value="1"> 1 </option>
                                    <option name="date" value="2"> 2 </option>
                                    <option name="date" value="3"> 3 </option>
                                    <option name="date" value="4"> 4 </option>
                                    <option name="date" value="5"> 5 </option>
                                    <option name="date" value="6"> 6 </option>
                                    <option name="date" value="7"> 7 </option>
                                    <option name="date" value="8"> 8 </option>
                                    <option name="date" value="9"> 9 </option>
                                    <option name="date" value="10"> 10 </option>
                                    <option name="date" value="11"> 11 </option>
                                    <option name="date" value="12"> 12 </option>
                                    <option name="date" value="13"> 13 </option>
                                    <option name="date" value="14"> 14 </option>
                                    <option name="date" value="15"> 15 </option>
                                    <option name="date" value="16"> 16 </option>
                                    <option name="date" value="17"> 17 </option>
                                    <option name="date" value="18"> 18 </option>
                                    <option name="date" value="19"> 19 </option>
                                    <option name="date" value="20"> 20 </option>
                                    <option name="date" value="21"> 21 </option>
                                    <option name="date" value="22"> 22 </option>
                                    <option name="date" value="23"> 23 </option>
                                    <option name="date" value="24"> 24 </option>
                                    <option name="date" value="25"> 25 </option>
                                    <option name="date" value="26"> 26 </option>
                                    <option name="date" value="27"> 27 </option>
                                    <option name="date" value="28"> 28 </option>
                                    <option name="date" value="29"> 29 </option>
                                    <option name="date" value="30"> 30 </option>
                                    <option name="date" value="31"> 31 </option>
                        </select></font><font size="2" face="Arial"  color="#A0A0A4">
								  </font><font  color="#A0A0A4" face="Arial">
								  <select name="DOB_month" tabindex="9" id="DOB_month" style="background-color:#A0A0A4" >
                                  <option name="date" value="">Month</option>
                                    <option name="date" value="1"> 1 </option>
                                    <option name="date" value="2"> 2 </option>
                                    <option name="date" value="3"> 3 </option>
                                    <option name="date" value="4"> 4 </option>
                                    <option name="date" value="5"> 5 </option>
                                    <option name="date" value="6"> 6 </option>
                                    <option name="date" value="7"> 7 </option>
                                    <option name="date" value="8"> 8 </option>
                                    <option name="date" value="9"> 9 </option>
                                    <option name="date" value="10"> 10 </option>
                                    <option name="date" value="11"> 11 </option>
                                    <option name="date" value="12"> 12 </option>
                                  </select></font><font size="2" face="Arial"  color="#A0A0A4">
								  </font><font  color="#A0A0A4" face="Arial">
								  <select name="DOB_year"  id="DOB_year" tabindex="10" style="background-color:#A0A0A4">
                                  <option name="date" value="">Year</option>
                                    <option name="date" value="1960"> 1960 </option>
                                    <option name="date" value="1961"> 1961 </option>
                                    <option name="date" value="1962"> 1962 </option>
                                    <option name="date" value="1963"> 1963 </option>
                                    <option name="date" value="1964"> 1964 </option>
                                    <option name="date" value="1965"> 1965 </option>
                                    <option name="date" value="1966"> 1966 </option>
                                    <option name="date" value="1967"> 1967 </option>
                                    <option name="date" value="1968"> 1968 </option>
                                    <option name="date" value="1969"> 1969 </option>
                                    <option name="date" value="1970"> 1970 </option>
                                    <option name="date" value="1971"> 1971 </option>
                                    <option name="date" value="1972"> 1972 </option>
                                    <option name="date" value="1973"> 1973 </option>
                                    <option name="date" value="1974"> 1974 </option>
                                    <option name="date" value="1975"> 1975 </option>
                                    <option name="date" value="1976"> 1976 </option>
                                    <option name="date" value="1977"> 1977 </option>
                                    <option name="date" value="1978"> 1978 </option>
                                    <option name="date" value="1979"> 1979 </option>
                                    <option name="date" value="1980"> 1980 </option>
                                    <option name="date" value="1981"> 1981 </option>
                                    <option name="date" value="1982"> 1982 </option>
                                    <option name="date" value="1983"> 1983 </option>
                                    <option name="date" value="1984"> 1984 </option>
                                    <option name="date" value="1985"> 1985 </option>
                                    <option name="date" value="1986"> 1986 </option>
                                    <option name="date" value="1987"> 1987 </option>
                                    <option name="date" value="1988"> 1988 </option>
                                    <option name="date" value="1989"> 1989 </option>
                                    <option name="date" value="1990"> 1990 </option>
                                    <option name="date" value="1991"> 1991 </option>
                                    <option name="date" value="1992"> 1992 </option>
                                    <option name="date" value="1993"> 1993 </option>
                                    <option name="date" value="1994"> 1994 </option>
                                    <option name="date" value="1995"> 1995 </option>
                                    <option name="date" value="1996"> 1996 </option>
                                    <option name="date" value="1997"> 1997 </option>
                                    <option name="date" value="1998"> 1998 </option>
                                    <option name="date" value="1999"> 1999 </option>
                                    <option name="date" value="2000"> 2000 </option>
                      </select></font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Birth 
						Time *</font></td>
						<td width="458" align="left"><font size="2" face="Arial"  color="#A0A0A4">
						<select size="1" name="hour" tabindex="11" style="background-color:#A0A0A4">
		<option selected>Hour</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		</select> <select size="1" name="minute" tabindex="12" style="background-color:#A0A0A4">
		<option selected>Minutes</option>
		<option value="00">00</option>
		<option value="01">01</option>
		<option value="02">02</option>
		<option value="03">03</option>
		<option value="04">04</option>
		<option value="05">05</option>
		<option value="06">06</option>
		<option value="07">07</option>
		<option value="08">08</option>
		<option value="09">09</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
		<option value="32">32</option>
		<option value="33">33</option>
		<option value="34">34</option>
		<option value="35">35</option>
		<option value="36">36</option>
		<option value="37">37</option>
		<option value="38">38</option>
		<option value="39">39</option>
		<option value="40">40</option>
		<option value="41">41</option>
		<option value="42">42</option>
		<option value="43">43</option>
		<option value="44">44</option>
		<option value="45">45</option>
		<option value="46">46</option>
		<option value="47">47</option>
		<option value="48">48</option>
		<option value="49">49</option>
		<option value="50">50</option>
		<option value="51">51</option>
		<option value="52">52</option>
		<option value="53">53</option>
		<option value="54">54</option>
		<option value="55">55</option>
		<option value="56">56</option>
		<option value="57">57</option>
		<option value="58">58</option>
		<option value="59">59</option>
	
		</select> <select size="1" name="AM" tabindex="13" style="background-color:#A0A0A4">
		<option selected value="AM">AM</option>
		<option value="PM">PM</option>
		</select></font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Place of Birth 
						*</font></td>
						<td width="458" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">
		<input tabindex="15" type=text name="birth_place" style="background-color:#A0A0A4; width:300px;" /></font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						
						<font  color="#A0A0A4" face="Verdana" size="2">Cast *</font></td>
						<td width="458" align="left">
						
						<font  color="#A0A0A4" face="Verdana" size="2">
		<select id="cast" name="cast" size="1" tabindex="14" style="background-color:#A0A0A4; width:300px;">
                 <option value="Select" selected>Select</option>
<option>Agarwal</option>
<option>Baniya</option>
<option>Bishnoi/Vishnoi</option>
<option>Brahmin</option>
<option>Chandravanshi</option><option>Kahar</option>
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
                  <option>Other</option>
                  </select></font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Mobile No. 
						*</font></td>
						<td width="458" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">
		<input tabindex="15" type=text name="mobile_no" style="background-color:#A0A0A4; width:300px;" /></font></td>
					</tr>
					<?php
              if($_REQUEST['mobile']=="duplicate")
              {
               	echo("<tr><td colspan=\"2\"><font color=\"maroon\">");
				echo "Please Enter Other Mobile No. It's already registered.";
				echo("</font></td></tr>");
			}
              ?>   

					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Marital 
						Status *</font></td>
						<td width="458" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">
		<select id="marital_status" name="marital_status" size="1" tabindex="16" style="background-color:#A0A0A4; width:300px;">
                  <option selected>Select</option>
                  <option value="Unmarried">Unmarried</option>
					<option value="Widower">Widower</option>
					<option value="Divorced">Divorced</option>
					<option value="Awaiting Divorce">Awaiting Divorce</option>
                  </select></font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
    
        <font face="Verdana" size="2"  color="#A0A0A4">Have Children *</font></td>
						<td width="458" height="26" align="left">
    
        <font  color="#A0A0A4" face="Verdana" size="2">
		<select id="marital_status0" name="child" size="1" tabindex="17" style="background-color:#A0A0A4; width:300px;">
                  <option value="No" selected>No</option>
					<option value="Yes, Living Together">Yes, Living Together</option>
					<option value="Yes, Not Living Together">Yes, Not Living 
					Together</option>
                </select></font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Country *</font></td>
						<td width="458" height="26" align="left">
                   <font face="Verdana" color="#00348A">
                  <select id="Country" name="country" size="1" onclick="check10()" tabindex="18" style="background-color:#A0A0A4; width:300px;">
                  <option selected>Select</option>
				  
				  
                  <option value="Australia ">Australia</option>
                  <option value="Bahrain ">Bahrain</option>
                  <option value="Bangladesh ">Bangladesh</option>
                  <option value="Belgium ">Belgium</option>
                  <option value="Canada ">Canada</option>
                  <option value="Doha ">Doha</option>
                  <option value="Dubai ">Dubai</option>
                  <option value="France ">France</option>
                  <option value="Germany ">Germany</option>
                  <option value="Hong Kong ">Hong Kong</option>
                  <option value="India">India</option>
                  <option value="Indonesia ">Indonesia</option>
                  <option value="Ireland ">Ireland</option>
                  <option value="Italy ">Italy</option>
                  <option value="Japan ">Japan</option>
                  <option value="Kenya ">Kenya</option>
                  <option value="Kuwait ">Kuwait</option>
                  <option value="Lebanon ">Lebanon</option>
                  <option value="Libya ">Libya</option>
                  <option value="Malaysia ">Malaysia</option>
                  <option value="Maldives ">Maldives</option>
                  <option value="Mauritius ">Mauritius</option>
                  <option value="Mexico ">Mexico</option>
                  <option value="Nepal ">Nepal</option>
                  <option value="Netherlands ">Netherlands</option>
                  <option value="New Zealand ">New Zealand</option>
                  <option value="Norway ">Norway</option>
                  <option value="Oman ">Oman</option>
                  <option value="Other   ">Other</option>
                  <option value="Pakistan ">Pakistan</option>
                  <option value="Qatar ">Qatar</option>
                  <option value="Quilon ">Quilon</option>
                  <option value="Russia ">Russia</option>
                  <option value="Saudi Arabia ">Saudi Arabia</option>
                  <option value="Singapore ">Singapore</option>
                  <option value="South Africa ">South Africa</option>
                  <option value="South Korea ">South Korea</option>
                  <option value="Spain ">Spain</option>
                  <option value="Sri Lanka ">Sri Lanka</option>
                  <option value="Sweden ">Sweden</option>
                  <option value="Switzerland ">Switzerland</option>
                  <option value="Thailand ">Thailand</option>
                  <option value="UAE ">UAE</option>
                  <option value="UK ">UK</option>
                  <option value="US ">US</option>
                  <option value="Yemen ">Yemen</option>
                  <option value="Zimbabwe ">Zimbabwe</option>
                  <option value="Other">Other</option>

				  
				  
				  
                  </select></font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">State *</font></td>
						<td width="458" height="26" align="left">
                  <font face="Verdana" color="#00348A">
                  <select id="state" name="state" size="1" tabindex="19" style="background-color:#A0A0A4; width:300px;">
                  <option selected>Select</option>
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
                  </select></font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">City *						</font></td>
						<td width="458" height="26" align="left">
					  <input name="city" tabindex=20 style="background-color:#A0A0A4; width:300px;"></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Religion *</font></td>
						<td width="458" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">
		<select id="religion" name="religion" size="1" tabindex="21" style="background-color:#A0A0A4; width:300px;">
                  <option selected value="Hindu">Hindu</option>
                  </select></font></td>
					</tr>
					<tr>
						<td width="400" height="112" align="left"><font  color="#A0A0A4" face="Verdana" size="2">About Me *</font></td>
					  <td width="381" height="112" align="left"><textarea name="about_me" rows="5" cols="35" style="background-color:#999999;"></textarea></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Photo *</font></td>
						<td width="458" height="26" align="left"><input type="hidden" name="MAX_FILE_SIZE" value="1100000" />
                  <input type="file" name="uploadedfile" size="40" tabindex="22" style="background-color:#A0A0A4"/><font face="Verdana" size="2"> 
					  (only .jpg or .jpeg)</font></td>
					</tr>
					<tr>
						<td height="26" colspan="2" align="left">
						<font color="#666666" face="Verdana">Physical Attributes</font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Height </font></td>
						<td width="458" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">
						<select size="1" name="height" tabindex=23 style="background-color:#A0A0A4; width:300px;">
																				<option selected value="None">Feet/Inches</option>
																				<option value="4ft 6in">4ft 6in</option>
																				<option value="4ft 7in">4ft 7in</option>
																				<option value="4ft 8in">4ft 8in</option>
																				<option value="4ft 9in">4ft 9in</option>
																				<option value="4ft 10in">4ft 10in</option>
																				<option value="4ft 11in">4ft 11in</option>
																				<option value="5ft">5ft</option>
																				<option value="5ft 1in">5ft 1in</option>
																				<option value="5ft 2in">5ft 2in</option>
																				<option value="5ft 3in">5ft 3in</option>
																				<option value="5ft 4in">5ft 4in</option>
																				<option value="5ft 5in">5ft 5in</option>
																				<option value="5ft 6in">5ft 6in</option>
																				<option value="5ft 7in">5ft 7in</option>
																				<option value="5ft 8in">5ft 8in</option>
																				<option value="5ft 9in">5ft 9in</option>
																				<option value="5ft 10in">5ft 10in</option>
																				<option value="5ft 11in">5ft 11in</option>
																				<option value="6ft">6ft</option>
																				<option value="6ft 1in">6ft 1in</option>
																				<option value="6ft 2in">6ft 2in</option>
																				<option value="6ft 3in">6ft 3in</option>
																				<option value="6ft 4in">6ft 4in</option>
																				<option value="6ft 5in">6ft 5in</option>
																				<option value="6ft 6in">6ft 6in</option>
																				<option value="6ft 7in">6ft 7in</option>
																				<option value="6ft 8in">6ft 8in</option>
																				<option value="6ft 9in">6ft 9in</option>
																				<option value="6ft 10in">6ft 10in</option>
																				<option value="6ft 11in">6ft 11in</option>
																				<option value="7ft">7ft</option>
					  </select></font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Body Type </font></td>
						<td width="458" height="26" align="left">

						<font  color="#A0A0A4" face="Verdana" size="2">
		<select id="body_type" name="body_type" size="1" tabindex="24" style="background-color:#A0A0A4; width:300px;">
                  <option selected value="None">Select</option>
                  <option value="Average">Average</option>
					<option value="Athletic">Athletic</option>
					<option value="Slim">Slim</option>
					<option value="Heavy">Heavy</option>
                  </select></font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Complexion </font></td>
						<td width="458" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">
		<select id="complexion" name="complexion" size="1" tabindex="25" style="background-color:#A0A0A4; width:300px;">
                  <option selected value="None">Select</option>
                  <option value="Very Fair">Very Fair</option>
					<option value="Fair">Fair</option>
					<option value="Wheatish">Wheatish</option>
					<option value="Wheatish Brown">Wheatish Brown</option>
					<option value="Dark">Dark</option>
                  </select></font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Physical 
						Status *</font></td>
						<td width="458" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">
		<select id="physical_status" name="physical_status" size="1" tabindex="26" style="background-color:#A0A0A4; width:300px;">
                  <option value="" selected>Select</option>
                  
                  <option value="Normal">Normal</option>
					<option value="Physically Challanged">Physically Challanged
					</option>
                  

                  </select></font></td>
					</tr>
					<tr>
						<td height="26" colspan="2" align="left">
						<font color="#666666" face="Verdana">Education &amp; 
						Occupation</font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Education </font></td>
						<td width="458" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">
						<select name=education id=education tabindex=27 size="1" style="background-color:#A0A0A4">
																				<option selected value="None">Select</option>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Bachelors - Engineering/ Computers --">
																				<option value="BE/B Tech">BE/B Tech</option>
																				<option value="BCA">BCA</option>
																				<option value="Aeronautical Engineering">Aeronautical Engineering</option>
																				<option value="B Arch">B Arch</option>
																				<option value="B Plan">B Plan</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Masters - Engineering/ Computers --">
																				<option value="MCA/PGDCA">MCA/PGDCA</option>
																				<option value="ME/M Tech">ME/M Tech</option>
																				<option value="MS (Engg.)">MS (Engg.)</option>
																				<option value="M Arch">M Arch</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Bachelors - Arts/ Science/ Commerce/ B Phil/... --">
																				<option value="B Phil">B Phil</option>
																				<option value="BCom">BCom</option>
																				<option value="BSc">BSc</option>
																				<option value="BA">BA</option>
																				<option value="BHM">BHM</option>
																				<option value="B Ed">B Ed</option>
																				<option value="Aviation Degree">Aviation Degree</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Masters - Arts/ Science/ Commerce/ M Phil/... --">
																				<option value="M Phil">M Phil</option>
																				<option value="M Com">M Com</option>
																				<option value="M Sc">M Sc</option>
																				<option value="MA">MA</option>
																				<option value="MHM">MHM</option>
																				<option value="M Ed">M Ed</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Management - BBA/ MBA/... --">
																				<option value="MBA/PGDM">MBA/PGDM</option>
																				<option value="BBA">BBA</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Medicine - General/ Dental/ Surgeon/... --">
																				<option value="MD/MS (Medical)">MD/MS (Medical)</option>
																				<option value="MBBS">MBBS</option>
																				<option value="MDS">MDS</option>
																				<option value="MVSc">MVSc</option>
																				<option value="MPT">MPT</option>
																				<option value="BDS">BDS</option>
																				<option value="BVSc">BVSc</option>
																				<option value="BPT">BPT</option>
																				<option value="BHMS">BHMS</option>
																				<option value="BAMS">BAMS</option>
																				<option value="M Pharm">M Pharm</option>
																				<option value="B Pharm">B Pharm</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Legal - BL/ ML/ LLB/ LLM/... --">
																				<option value="ML/LLM">ML/LLM</option>
																				<option value="BGL/BL/LLB">BGL/BL/LLB</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Finance - ICWAI / CA / CS /... --">
																				<option value="CA">CA</option>
																				<option value="ICWA">ICWA</option>
																				<option value="CS">CS</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Service - IAS/ IPS/ IRS/ IES/ IFS... --">
																				<option value="IAS/ IPS/ IRS/ IES/ IFS">IAS/ IPS/ IRS/ IES/ IFS</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- PhD --">
																				<option value="Ph D">Ph D</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Diploma --">
																				<option value="Trade School">Trade School</option>
																				<option value="Diploma">Diploma</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Higher Secondary/ Secondary --">
																				<option value="Higher Secondary School/High School">Higher Secondary School/High School</option>
																				</optgroup>
					  </select></font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Occupation </font></td>
						<td width="458" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">
						<select id="occupation" name="occupation" tabindex=28 size="1" style="background-color:#A0A0A4">
																				<option selected value="None">Select</option>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ADMIN --">
																				<option value="Manager">Manager</option>
																				<option value="Supervisor">Supervisor</option>
																				<option value="Officer">Officer</option>
																				<option value="Administrative Professional">Administrative Professional</option>
																				<option value="Executive">Executive</option>
																				<option value="Clerk">Clerk</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- AGRICULTURE --">
																				<option value="Agriculture &amp; Farming Professional">Agriculture &amp; Farming Professional</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- AIRLINE --">
																				<option value="Pilot">Pilot</option>
																				<option value="Air Hostess">Air Hostess</option>
																				<option value="Airline Professional">Airline Professional</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ARCHITECT &amp; DESIGN --">
																				<option value="Architect">Architect</option>
																				<option value="Interior Designer">Interior Designer</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BANKING &amp; FINANCE --">
																				<option value="Chartered Accountant">Chartered Accountant</option>
																				<option value="Company Secretary">Company Secretary</option>
																				<option value="Accounts/Finance Professional">Accounts/Finance Professional</option>
																				<option value="Banking Service Professional">Banking Service Professional</option>
																				<option value="Auditor">Auditor</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BEAUTY &amp; FASHION --">
																				<option value="Fashion Designer">Fashion Designer</option>
																				<option value="Beautician">Beautician</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- CIVIL SERVICES --">
																				<option value="Civil Services (IAS/IPS/IRS/IES/IFS)">Civil Services (IAS/IPS/IRS/IES/IFS)</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- DEFENCE --">
																				<option value="Army">Army</option>
																				<option value="Navy">Navy</option>
																				<option value="Airforce">Airforce</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- EDUCATION --">
																				<option value="Professor / Lecturer">Professor / Lecturer</option>
																				<option value="Teaching / Academician">Teaching / Academician</option>
																				<option value="Education Professional">Education Professional</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- HOSPITALITY --">
																				<option value="Hotel / Hospitality Professional">Hotel / Hospitality Professional</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- IT &amp; ENGINEERING --">
																				<option value="Software Professional">Software Professional</option>
																				<option value="Hardware Professional">Hardware Professional</option>
																				<option value="Engineer - Non IT">Engineer - Non IT</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- LEGAL --">
																				<option value="Lawyer &amp; Legal Professional">Lawyer &amp; Legal Professional</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- LAW ENFORCEMENT --">
																				<option value="Law Enforcement Officer">Law Enforcement Officer</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MEDICAL --">
																				<option value="Doctor">Doctor</option>
																				<option value="Health Care Professional">Health Care Professional</option>
																				<option value="Paramedical Professional">Paramedical Professional</option>
																				<option value="13">Nurse</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MARKETING &amp; SALES --">
																				<option value="Marketing Professional">Marketing Professional</option>
																				<option value="Sales Professional">Sales Professional</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MEDIA &amp; ENTERTAINMENT --">
																				<option value="Journalist">Journalist</option>
																				<option value="Media Professional">Media Professional</option>
																				<option value="Entertainment Professional">Entertainment Professional</option>
																				<option value="Event Management Professional">Event Management Professional</option>
																				<option value="Advertising / PR Professional">Advertising / PR Professional</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MERCHANT NAVY --">
																				<option value="Mariner / Merchant Navy">Mariner / Merchant Navy</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- SCIENTIST --">
																				<option value="Scientist / Researcher">Scientist / Researcher</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- TOP MANAGEMENT --">
																				<option value="CXO / President, Director, Chairman">CXO / President, Director, Chairman</option>
																				</optgroup>
																				<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- OTHERS --">
																				<option value="Consultant">Consultant</option>
																				<option value="Customer Care Professional">Customer Care Professional</option>
																				<option value="Social Worker">Social Worker</option>
																				<option value="Sportsman">Sportsman</option>
																				<option value="Technician">Technician</option>
																				<option value="Arts &amp; Craftsman">Arts &amp; Craftsman</option>
																				<option value="Not Working">Not Working</option>
																				</optgroup>
					  </select></font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Annual 
						Income </font></td>
						<td width="458" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">
					  <input name=annual_income tabindex=29 style="background-color:#A0A0A4; width:300px;"></font></td>
					</tr>
					<tr>
						<td height="26" colspan="2" align="left">
						<font color="#666666" face="Verdana">Habits</font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Food </font></td>
						<td width="458" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">
		<select id="food" name="food" size="1" tabindex="30" style="background-color:#A0A0A4; width:300px;">
                  <option selected value="None">Select</option>
                  
                  <option value="Vegetarian">Vegetarian</option>
					<option value="Non-Vegiterian">Non-Vegiterian</option>
                  
                  </select></font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Smoking </font></td>
						<td width="458" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">
		<select id="smoking" name="smoking" size="1" tabindex="31" style="background-color:#A0A0A4; width:300px;">
                  <option selected value="None">Select</option>                  
                  <option value="No">No</option>
					<option value="Yes">Yes</option>
                  <option value="Occasionally">Occasionally</option>
                  </select></font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Drinking </font></td>
						<td width="458" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">
		<select id="drinking" name="drinking" size="1" tabindex="32" style="background-color:#A0A0A4; width:300px;">
                  <option selected value="None">Select</option>                  
                  <option value="No">No</option>
					<option value="Yes">Yes</option>
                  <option value="Occasionally">Occasionally</option>
                  </select></font></td>
					</tr>
					<tr>
						<td height="26" colspan="2" align="left">
						<font color="#666666" face="Verdana">Astrological Info.</font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Manglik *</font></td>
						<td width="458" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">
		<select id="manglik" name="manglik" size="1" tabindex="33" style="background-color:#A0A0A4; width:300px;">
                  <option value="" selected>Select</option>                  
                  <option value="No">No</option>
					<option value="Yes">Yes</option>
                  <option value="Don&amp;#39;t Know">Don&#39;t Know</option>
                  </select></font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Rashi </font></td>
						<td width="458" height="26" align="left">
						<select id="rashi" name="rashi" tabindex=34 style="background-color:#A0A0A4; width:300px;" size="1">
																				<option selected value="None">Select</option>
																				<option value="Dhanu (Sagittarius)">Dhanu (Sagittarius)</option>
																				<option value="Kanya (Virgo)">Kanya (Virgo)</option>
																				<option value="Kark (Cancer)">Kark (Cancer)</option>
																				<option value="Kumbh (Aquarius)">Kumbh (Aquarius)</option>
																				<option value="Makar (Capricorn)">Makar (Capricorn)</option>
																				<option value="Meen (Pisces)">Meen (Pisces)</option>
																				<option value="Mesh (Aries)">Mesh (Aries)</option>
																				<option value="Mithun (Gemini)">Mithun (Gemini)</option>
																				<option value="Simha (Leo)">Simha (Leo)</option>
																				<option value="Tula (Libra)">Tula (Libra)</option>
																				<option value="Vrishabh (Taurus)">Vrishabh (Taurus)</option>
																				<option value="Vrishchik (Scorpio)">Vrishchik (Scorpio)</option>
					  </select></td>
					</tr>
					<tr>
						<td height="26" colspan="2" align="left">
						<font color="#666666" face="Verdana">Family Profile</font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Family 
						Status *</font></td>
						<td width="458" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">
		<select id="family_status" name="family_status" size="1" tabindex="35" style="background-color:#A0A0A4; width:300px;">
                  <option value="" selected>Select</option>                  
                  
                  <option value="Afflunet">Afflunet</option>
					<option value="Rich">Rich</option>
					<option value="Upper Middle Class">Upper Middle Class
					</option>
					<option value="Middle Class">Middle Class</option>
                  
                  </select></font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Family 
						Type *</font></td>
						<td width="458" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">
		<select id="family_type" name="family_type" size="1" tabindex="36" style="background-color:#A0A0A4; width:300px;">
                  <option value="" selected>Select</option>                  
                  <option value="Joint">Joint</option>
					<option value="Nuclear">Nuclear</option>
                  </select></font></td>
					</tr>
					<tr>
						<td width="333" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">Family 
						Values *</font></td>
						<td width="458" height="26" align="left">
						<font  color="#A0A0A4" face="Verdana" size="2">
		<select id="family_values" name="family_values" size="1" tabindex="37" style="background-color:#A0A0A4; width:300px;">
                  <option value="" selected>Select</option>                  
                  <option value="Orthodox">Orthodox</option>
					<option value="Traditional">Traditional</option>
					<option value="Moderate">Moderate</option>
					<option value="Liberal">Liberal</option>
                  </select></font></td>
					</tr>
					<tr>
						<td width="400" height="112" align="left"><font  color="#A0A0A4" face="Verdana" size="2">About My Family *</font></td>
					  <td width="381" height="112" align="left"><textarea name="about_family" rows="5" cols="35" style="background-color:#999999;"></textarea></td>
					</tr>
					<tr>
					  <td width="458" height="49" align="center" colspan="2"> <input type="checkbox" name="tnc" value="dsdaa"/>
				      &nbsp;&nbsp;&nbsp;<a href="term_and_condition.php" ><font color="#666666" face="vardana" size="2">Accept Terms And Conditions</font></a> </td>
					</tr>
					<tr>
						<td width="333" height="43">&nbsp;</td>
					  <td width="458" height="43" align="left"><input name="submit" type="submit" tabindex="38" value="Submit" style=" background: url(images/send.gif); color:#FFFFFF; border:none; width:81px; height:32px; color:#FFFFFF;" /></td>
					</tr>
					<tr>
						<td width="400" height="83">&nbsp;</td>
						<td width="381" height="83">&nbsp;</td>
						
					</tr>
					</form>
		</table>
</td><td></td></tr></table>
</div>
<div class="footer">
  <div id="footer-bound">
	<p align="center">Copyright 2011. All rights reserved.</div>
</div>
</body>
</html>
