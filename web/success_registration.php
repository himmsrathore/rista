<?php
	require("script/common.php");
	require("script/mysql.php");
require("script/openfile.php");
require("script/validation.php");


	$link = connect($hname,$uname,$passwd);
	usedatabase($dbname,$link);	
	$username=$_REQUEST['uname'];
$result = queryselect("*","user_info","username = '".$username."'",$link);
if(mysql_num_rows($result)!=0)
{
 $row_result = mysql_fetch_row($result); 
 $user="duplicate";
        echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('register.php?uname=".$user."');\n");
		echo("-->\n");
		echo("</script>");
		exit();
 }
 
 $email=$_REQUEST['email'];
$result1 = queryselect("*","user_info","email = '".$email."'",$link);
if(mysql_num_rows($result1)!=0)
{
 $row_result1 = mysql_fetch_row($result1); 
 $email_id="duplicate";
        echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('register.php?email=".$email_id."');\n");
		echo("-->\n");
		echo("</script>");
		exit();
 }
 $mobile_no=$_REQUEST['mobile_no'];
$result1 = queryselect("*","user_info","mobile_no = '".$mobile_no."'",$link);
if(mysql_num_rows($result1)!=0)
{
 $row_result1 = mysql_fetch_row($result1); 
 $mobile_no="duplicate";
        echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('register.php?mobile=".$mobile_no."');\n");
		echo("-->\n");
		echo("</script>");
		exit();
 }

	
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

function validate()
{
if(trim(document.code.activation_code.value)=="")
	{
		alert("Enter your activation code.");
		document.code.activation_code.focus();
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
     <td width="168"><font color="white" size="+1"><b>Member Login:</b></font></td> 
     <td width="89"><font color="white"> Username</font></td>
     <td width="142"> 
      <input name="username1" type="text" value="" size="18" style="background-color:#FFCCCC; color:#999999; border:#990000;" /></td> <td width="88"><font color="white">Password</font></td>
      <td width="153"> 
      <input name="password1" type="password" value="" size="20"style="background-color:#FFCCCC; color:#999999; border:#990000;" /></td><td width="122"> <input type=submit value="" style="background:url(images/login.png); width:114px; height:28px; border:none;"></td></tr></table>
      
  </div>
  </form>
</div>

<div align="center">
<table width=1000 cellspacing="0" cellpadding="0" background="images/main.jpg"><tr><td>
<table border="0" width="957" cellspacing="0" cellpadding="0">
	<?php
$username = $_REQUEST['uname'];
$password = $_REQUEST['pass1'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$gender = $_REQUEST['gender'];
$date_birth = $_REQUEST['DOB_date'];
$month_birth = $_REQUEST['DOB_month'];
$year_birth = $_REQUEST['DOB_year'];
$hour_birth = $_REQUEST['hour'];
$minutes_birth = $_REQUEST['minute'];
$am_birth = $_REQUEST['AM'];
$cast = $_REQUEST['cast'];
$mobile = $_REQUEST['mobile_no'];
$marital_status = $_REQUEST['marital_status'];
$country = $_REQUEST['country'];
$state = $_REQUEST['state'];
$city = $_REQUEST['city'];
$religion = $_REQUEST['religion'];
$height = $_REQUEST['height'];
$body_type = $_REQUEST['body_type'];
$complexion = $_REQUEST['complexion'];
$physical_status = $_REQUEST['physical_status'];
$education = $_REQUEST['education'];
$occupation = $_REQUEST['occupation'];
$annual_income = $_REQUEST['annual_income'];
$food = $_REQUEST['food'];
$smoking = $_REQUEST['smoking'];
$drinking = $_REQUEST['drinking'];
$manglik = $_REQUEST['manglik'];
$rashi = $_REQUEST['rashi'];
$family_status = $_REQUEST['family_status'];
$family_type = $_REQUEST['family_type'];
$family_values = $_REQUEST['family_values'];
$date = $_REQUEST['DOB_year']."-".$_REQUEST['DOB_month']."-".$_REQUEST['DOB_date'];
$child=$_REQUEST['child'];
$about_me=$_REQUEST['about_me'];
$about_family=$_REQUEST['about_family'];
$birth_place=$_REQUEST['birth_place'];

$inpDate = $date;
list($inpYear, $inpMonth, $inpDay) = explode("-", $inpDate);  
//get number of days in a month using following php function  
$numOfDays = cal_days_in_month(CAL_GREGORIAN, $inpMonth, $inpYear);  
//check if the day inputted is greater then number of days in month and set appropriately  
if($inpDay > $numOfDays) {  
$inpDay = $numOfDays;  
}  
//set month to 12 if greater then 12  
if($inpMonth > 12) {  
$inpMonth = 12;  
}  
//get the difference in year  
$diffYear = date("Y") - $inpYear;  
//get the difference in month  
$diffMonth = date("m") - $inpMonth;  
//get the day difference  
$diffDay = date("d") - $inpDay;  
//check if month is less than 0  
if($diffMonth < 0) {  
$diffYear -= 1;  
$diffMonth += 12;   
}  
//check if the day is less than 0  
if($diffDay < 0) {  
$diffMonth -= 1;  
$diffDay += $numOfDays;  
}  

$target_path = "user_images/";
$targetpath = $username."_".basename( $_FILES['uploadedfile']['name']);
$target_path = $target_path . $targetpath; 
move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path);
//echo "Image ".  basename( $_FILES['uploadedfile']['name']). " has been successfully uploaded.";
$user_img = $target_path;

// generate 5 digits random number
function random_num($n=5)
{
return rand(0, pow(10, $n));
}

$code = random_num(); 


$insert=mysql_query("INSERT INTO user_info (username,password,name,email,gender,date_birth,month_birth,year_birth,hour_birth,minutes_birth,am_birth,cast,mobile_no,marital_status,country,state,city,religion,image_url,height,body_type,complexion,physical_status,education,occupation,annual_income,food,smoking,drinking,manglik,rashi,family_status,family_type,family_values,birth_date,age,child,sent_code,about_me,about_family,birth_place) VALUES('$username','$password','$name','$email','$gender','$date_birth','$month_birth','$year_birth','$hour_birth','$minutes_birth','$am_birth','$cast','$mobile','$marital_status','$country','$state','$city','$religion','$user_img','$height','$body_type','$complexion','$physical_status','$education','$occupation','$annual_income','$food','$smoking','$drinking','$manglik','$rashi','$family_status','$family_type','$family_values','$date','$diffYear','$child','$code','$about_me','$about_family','$birth_place')");
$strBody= "New User Info."."<br><br>"."User Name :  ".$username. "<br>"."Password : ".$password ."<br>". "Name : ".$name ."<br>". "Email id : ".$email;
$tomail = $mailaddress1;
$subject="New User Information.";
     
     $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   
   $headers .= 'From:'. $mailaddress . "\r\n";

                                 
  mail($tomail,$subject,$strBody,$headers);
  
  $sitename = "http://www.ristaa.com/";
$strBody= "Dear ".$name.","."<br><br>"."Thank you for making the right decision by registering on Ristaa.com Matrimony. Your account details - "."<br>"."Login Name : ".$username."<br>". "Password : ".$password."<br><br>"."Thanks"."<br>"."Ristaa Team"."<br>".$sitename." ";
$tomail = $email; 
$subject="Your Account Information.";
     
     $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
     $headers .= 'From:'. $mailaddress . "\r\n";

                                 
  mail($tomail,$subject,$strBody,$headers);

//echo "Mobile no. - ".$mobile."<br>";
//echo "Activation Code - ".$code;
$name="rnminfo";
$word="bknrnm4P";
$to=$mobile;
$from="Ristaa";
$code=$code;
$text="Activation%20Code%20".$code."%20From%20Ristaa.com";
$url="http://8.6.95.141/smpp/sendsms?username=$name&password=$word&to=$to&from=$from&text=$text";
$result = file_get_contents($url);


?>				
<tr>
						<td width="122" rowspan="11">&nbsp;</td>
						<td colspan="2">&nbsp;</td>
		  </tr>
					
					<tr>
						<td height="79" align="left" colspan="2">
						<font face="Verdana" size="2" color="#006600"><b>We thank you very much 
						for registration on </b> <strong>Ristaa.com</strong><b>. 
						Please check your mobile and insert the activation code 
						for activate your profile.</b></font></td>
					</tr>
					
					<tr>
						<td height="24" colspan="2">&nbsp;</td>
					</tr>
					<form name="code" onSubmit="return validate();" method="POST" action="check_activationcode.php?username=<?php echo $username;?>" enctype="multipart/form-data">
					<tr>
						<td width="140" height="22" align="right"><font color="#006600">&nbsp;Activation code&nbsp;&nbsp;&nbsp;&nbsp; </font></td>
					  <td width="695" height="22" align="left"><input type=text name=activation_code tabindex=1 style="background-color:#999999; color:#FFFFFF;"></td>
					</tr>
					<tr>
						<td height="26" colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td width="140" height="26">&nbsp;</td>
					  <td width="695" height="26" align="left"><input type=submit value="Submit" name=submit style="background:url(images/send.gif); border:none; width:81px; color:#FFFFFF; height:32px;"></td>
					</tr>
					</form>
					<tr>
						<td width="140" height="26">&nbsp;</td>
						<td width="695" height="26">&nbsp;</td>
					</tr>
					
					<tr>
						<td width="140" height="26">&nbsp;</td>
						<td width="695" height="26">&nbsp;</td>
					</tr>
					
					<tr>
						<td width="140" height="26">&nbsp;</td>
						<td width="695" height="26">&nbsp;</td>
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
