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

function validate()
{
	
	if(document.forgot_pass.username.value=="" && document.forgot_pass.email_id.value=="")
		{
			alert("Please Specify User Name Either Email Id.");
			document.forgot_pass.username.focus();
			return false;
		}
	if(document.forgot_pass.username.value!="" && document.forgot_pass.email_id.value!="")
		{
			alert("Please Specify User Name Or Email Id Not Both.");
			document.forgot_pass.username.focus();
			return false;
		}
		
	return true;
} 

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
<div class="login-bg">
  <div class="login-holder" style="width: 705px; height: 56px">
    &nbsp;</div>
</div>
<div align="center">
<table width=1000 cellspacing="0" cellpadding="0" background="images/main.jpg"><tr><td>
<table border="0" width="650" cellspacing="0" cellpadding="0">
					<form name="forgot_pass" onSubmit="return validate();" method="POST" action="forgot_pass_result.php" enctype="multipart/form-data">
 
<tr>
						<td width="6" rowspan="14">&nbsp;</td>
						<td colspan="2">
</td>
					</tr>
					<tr>
						<td width="162" height="26" align="left">&nbsp;</td>
						<td width="482" height="26" align="left">
										&nbsp;</td>
					</tr>
					<tr>
						<td width="644" height="26" align="left" colspan="2">&nbsp;<b><font face="Verdana">Forgot 
						Password</font></b>&nbsp;</td>
					</tr>
					<tr>
						<td width="644" height="26" align="left" colspan="2">
						<?php
             if($_REQUEST['username']=="invalid")
              {
               	echo("<tr><td width=\"100%\" colspan=\"2\" align=\"left\"><b><font color=\"maroon\">");
				echo "You are not registered with this User Name.";
				echo("</font></b></td></tr>");
			}
            
			  if($_REQUEST['email_id']=="invalid")
              {
               	echo("<tr><td width=\"100%\" colspan=\"2\" align=\"left\"><b><font color=\"maroon\">");
				echo "You are not registered with this Email-ID.";
				echo("</font></b></td></tr>");
			}
              ?>      

						</td>
					</tr>
					<tr>
						<td width="162" height="26" align="left"><b>
						<font color="#333333" face="Verdana" size="2">Username *</font></b></td>
						<td width="482" height="26" align="left">
										<font color="#333333" face="Arial">
		<input type=text tabindex="1" name="username" style="font-weight: 700" /> </font></td>
					</tr>
					<tr>
						<td width="162" height="26" align="left">&nbsp;</td>
						<td width="482" align="left"><b>
						<font face="Verdana" size="2">Or</font></b></td>
					</tr>
					<tr>
						<td width="162" height="26" align="left"><b>
						<font color="#333333" face="Verdana" size="2">Email ID *</font></b></td>
						<td width="482" align="left"><font color="#333333" face="Arial">
		<input type=text tabindex="2" name="email_id" style="font-weight: 700" /></font></td>
					</tr>
					<tr>
						<td width="162" height="12" align="left"></td>
						<td width="482" height="12" align="left"></td>
					</tr>
					<tr>
						<td width="162" height="40">&nbsp;</td>
						<td width="482" height="40" valign="top">
						<p align="center">
						<input type=submit value="Submit" tabindex=3 style="float: left"></td>
					</tr>
					<tr>
						<td width="162" height="26">&nbsp;</td>
						<td width="482" height="26">
						<p align="left">&nbsp;</td>
					</tr>
					<tr>
						<td width="162" height="26">&nbsp;</td>
						<td width="482" height="26">&nbsp;</td>
					</tr>
					<tr>
						<td width="162" height="26">&nbsp;</td>
						<td width="482" height="26">&nbsp;</td>
					</tr>
					<tr>
						<td width="162" height="26">&nbsp;</td>
						<td width="482" height="26">&nbsp;</td>
					</tr>
					<tr>
						<td width="162" height="26">&nbsp;</td>
						<td width="482" height="26">&nbsp;</td>
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
