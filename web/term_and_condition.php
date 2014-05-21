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
      <div class="link-holder2"><a href="search.php">search</a></div>
      <div class="link-holder3"><a href="about_us.php">About us </a></div>
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
<table width=1000 cellspacing="0" cellpadding="0"  bgcolor="#FFFFFF"><tr><td>
<table width="949" height="402" border="0" cellpadding="0" cellspacing="0">
					
                  <tr>
						<td width="50" rowspan="7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td height="28" colspan="2">&nbsp;</td>
		  </tr>
<tr>
						<td height="35" colspan="2">
			<p align="left"><b><font face="Verdana" color="#990033" size="+1">Terms And Conditions</font></b></td>
		  </tr>

					
					<tr>
						<td height="26" colspan="2" align="left">
						<p align="justify"><font  face="vardana" size="3" color="#999999">
						Welcome to Ristaa.com, the No.1 Matrimonial Services Provider. In order to use the Ristaa.com Site ("Site"), you must register as a member of the Site ("Member"). The Member or any users using the Site agree to be bound by these Terms of Use ("Agreement"). If you wish to become a Member and communicate with other Members and make use of the Ristaa.com service ("Service"), read these Terms of Use and follow the instructions in the Registration process. This Agreement sets out the legally binding terms for your membership. This Agreement may be modified by Ristaa.com from time to time.
						<ul >
						  <font color="#333333">1.</font> <font color="#333333"><b>Eligibility.</b> </font>To register as a member of ristaa.com or use this Site, you must be of legal marriageable age as per the laws of India (currently, 18 years or over for females and 21 years or over for males). The ristaa.com Site is only to facilitate lawful marriages between persons who are legally competent to enter into matrimony under the laws to which they are subject. Membership in the Service is void where prohibited. By using this Site, you represent and warrant that you have the right, authority, and legal capacity to enter into this Agreement and that you are not prohibited or prevented by any applicable law for the time being in force or any order or decree or injunction from any court, tribunal or any such competent authority restraining you from entering into matrimony. You also agree to abide by all of the terms and conditions of this Agreement. If at any time ristaa.com is of the opinion (in its sole discretion) or has any reason to believe that you are not eligible to become a member or that you have made any misrepresentation about your eligibility, ristaa.com reserves the right to forthwith terminate your membership and / or your right to use the Service without any refund to you of any of your unutilized subscription fee.
</ul>
<ul lang="af">
<font color="#333333">2.</font> <font color="#333333"><b>Term.</b></font> You may terminate your membership at any time, for any reason by writing to ristaa.com. In the event you terminate your membership, you will not be entitled to a refund of any unutilized subscription fees. ristaa.com may terminate your access to the Site and/or your membership for any reason effective upon sending notice to you at the email address you provide in your application for membership or such other email address as you may later provide to ristaa.com. If ristaa.com terminates your membership in the ristaa.com Service because you have breached the Agreement, you will not be entitled to any refund of any unused Subscription fees. Even after this Agreement is terminated, certain provisions will remain in effect including sections 4,5,7,9 -14, inclusive, of this Agreement.
</ul>
</font><ul><font color="#999999" size="3" face="vardana">
  <font color="#333333">3.</font> <font color="#333333"><b>Non-Commercial Use by Members.</b></font> The ristaa.com Site is for the personal use of individual members only, and cannot be used in connection with any commercial endeavors. This includes providing links to other web sites, whether deemed competitive to ristaa.com or otherwise. Organizations, companies, and/or businesses cannot become Members of ristaa.com and should not use the ristaa.com Service or Site for any purpose. Illegal and/or unauthorized uses of the Site, including unauthorized framing of or linking to the Site will be investigated, and appropriate legal action will be taken, including without limitation, civil, criminal, and injunctive redress.

</font>
</ul>
<font  face="vardana" size="3" color="#999999"><ul>
<font color="#333333">4.</font><font color="#333333"><b> Proprietary Rights in Content on ristaa.com.</b></font> ristaa.com owns and retains all proprietary rights in the ristaa.com Site and the ristaa.com Service. The Site contains the copyrighted material, trademarks, and other proprietary information of ristaa.com, and its licensors. Except for that information which is in the public domain or for which you have been given permission, you cannot copy, modify, publish, transmit, distribute, perform, display, or sell any such proprietary information. Any such act or an attempted act on your part shall constitute a violation of this Agreement and your membership is liable to be terminated forthwith by ristaa.com without refund of any of your unused Subscription fees.
</ul>
<ul>
<font color="#333333">5.</font> You are solely responsible for the Content that you publish or display (hereinafter, "post") on the ristaa.com service or on ristaa.com Site or transmit to other ristaa.com Members. ristaa.com reserves the right to verify the authenticity of Content posted on the Site. In exercising this right, ristaa.com may ask you to provide any documentary or other form of evidence supporting the Content you post on the Site. If you fail to produce such evidence, ristaa.com may, in its sole discretion, terminate your Membership without a refund.
</ul>
<ul>
<font color="#333333">6.</font> <font color="#333333"><b>Copyright Policy.</b></font> You cannot post, distribute, or reproduce in any way any copyrighted material, trademarks, or other proprietary information without obtaining the prior written consent of the owner of such proprietary rights. Without limiting the foregoing, if you believe that your work has been copied and posted on the ristaa.com service in a way that constitutes copyright infringement, please provide us with the following information: an electronic or physical signature of the person authorized to act on behalf of the owner of the copyright interest; a description of the copyrighted work that you claim has been infringed; a description of where the material that you claim is infringing is located on the our Site; your address, telephone number, and email address; a written statement by you that you have a good faith belief that the disputed use is not authorized by the copyright owner, its agent, or the law; a statement by you, made under penalty of perjury, that the above information in your Notice is accurate and that you are the copyright owner or authorized to act on the copyright owner's behalf. Notice of claims of copyright infringement can be sent to us in writing to the Mumbai address located under the Help/Contact section on the site.

</ul>
<ul>

<font color="#333333">7.</font> <font color="#333333"><b>Member Disputes.</b></font> You are solely responsible for your interactions with other ristaa.com Members. ristaa.com reserves the right, but has no obligation, to monitor disputes between you and other Members. ristaa.com also reserves the right to take appropriate action against errant members. However, ristaa.com is not obliged to share such action with other members, including complainants. ristaa.com expressly disclaims any responsibility or liability for any transactions or interactions between the members inter-se.
</ul>
<ul>
<font color="#333333">8.</font> <font color="#333333"><b>Privacy.</b></font> Use of the ristaa.com Site and/or the ristaa.com Service is governed by our Privacy Policy.
</ul>
<ul>
<font color="#333333">9.</font> <font color="#333333"><b>Disclaimers.</b></font> ristaa.com is not responsible for any incorrect or inaccurate Content posted on the Site or in connection with the ristaa.com Service, whether caused by Users, Members or by any of the equipment or programming associated with or utilized in the Service, nor for the conduct of any User and/or Member of the ristaa.com Service whether online or offline. ristaa.com assumes no responsibility for any error, omission, interruption, deletion, defect, delay in operation or transmission, communications line failure, theft or destruction or unauthorized access to, or alteration of, User and/or Member communications or any communications by ristaa.com to its Members. ristaa.com is not responsible for any problems or technical malfunction of any telephone network or lines, computer on-line-systems, servers or providers, computer equipment, software, failure of email or players on account of technical problems or traffic congestion on the Internet or at any web site or combination thereof, including injury or damage to Users and/or Members or to any other person's computer related to or resulting from participating or downloading materials in connection with the ristaa.com Site and/or in connection with the ristaa.com Service. Under no circumstances will ristaa.com be responsible for any loss or damage resulting from anyone's use of the Site or the Service and/or any Content posted on the ristaa.com Site or transmitted to ristaa.com Members. The exchange of matrimonial profile(s) through or by "ristaa.com" is not a matrimonial offer and/or recommendation from/by ristaa.com. ristaa.com shall not be responsible for any loss or damage to any individual arising out of, or subsequent to, any relations (including but not limited to matrimonial relations) established pursuant to the use of ristaa.com. The Site and the Service are provided "AS-IS" and ristaa.com expressly disclaims any warranty of fitness for a particular purpose or non-infringement. ristaa.com cannot guarantee and does not promise any specific results from use of the Site and/or the ristaa.com Service. 

ristaa.com expressly disclaims any liability or responsibility whatsoever and howsoever arising as a result of any Content posted on the Site / made available to ristaa.com by any Members or the users of the Site or any third party. ristaa.com does not assume any responsibility or liability for any illegal Content posted on the Site by any Members, users or any third party. All liability, whether civil or criminal arising out of any Content that is Posted on the Site will be of that Member / user / third party who has Posted such Content and ristaa.com reserves its right to claim damages from such Member/ user / third party that it may suffer as a result of such Content Posted on the Site. ristaa.com does not claim ownership of Content you submit or make available for inclusion on the Service.
</ul>
<ul>
<font color="#333333">10.</font><font color="#333333"><b> Limitation on Liability.</b></font>In no event will ristaa.com be liable to you or any third person for any indirect, consequential, exemplary, incidental, special or punitive damages, including also lost profits arising from your use of the Site or the ristaa.com Service, even if ristaa.com has been advised of the possibility of such damages. Notwithstanding anything to the contrary contained herein, ristaa.com's, liability to you for any cause whatsoever, and regardless of the form of the action, will at all times be limited to the amount paid, if any, by you to ristaa.com, for the Service during the term of membership.
</ul>
<ul>
<font color="#333333">11.</font> <font color="#333333"><b>Disputes.</b></font> If there is any dispute about or involving the Site and/or the Service, by using the Site, you unconditionally agree that all such disputes and/or differences will be governed by the laws of India and shall be subject to the exclusive jurisdiction of the Competent Courts in Mumbai, India only.
</ul>
</font>
						<ul>
  <font color="#999999" size="3" face="vardana">
<font color="#333333">12.</font><font color="#333333"><b> Indemnity.</b></font> You agree to indemnify and hold ristaa.com, its subsidiaries, affiliates, officers, agents, and other partners and employees, fully indemnified and harmless from any loss, liability, claim, or demand, including reasonable attorney's fees, made by any third party due to or arising out of your use of the Service in violation of this Agreement and/or arising from a breach of these Terms of Use and/or any breach of your representations and warranties set forth above and/or any fraudulent act on your part.


</font>
</ul>
                        <font  face="vardana" size="4" color="#999999"><ul>

</ul>
</font></td>
					</tr>
					<tr>
						<td width="8" height="26">&nbsp;</td>
						<td width="891" height="26">&nbsp;</td>
					</tr>
					<tr>
						<td width="8" height="26">&nbsp;</td>
						<td width="891" height="26">&nbsp;</td>
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

