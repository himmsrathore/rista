<?php
function echeck($form) {
?>
function echeck(str) 
{

		var at="@";
		var dot=".";
		var lat=str.indexOf(at);
		var lstr=str.length;
		var ldot=str.indexOf(dot);
		
		
		if((str.substring(0,1)<"a" || str.substring(0,1)>"z") && (str.substring(0,1)<"A" || str.substring(0,1)>"Z"))
		{
		alert("The Email should begin with an alphabetic character.");
		return false;
		}
	
	for (var i = 1; i < str.length; i++) 
		{
		var ch = str.substring(i, i + 1);
		if ( ((ch < "a" || "z" < ch) && (ch < "A" || "Z" < ch)) && (ch < "0" || "9" < ch) && (ch != '_') && (ch != '.') && (ch != '@')) 
		{
			alert("\nThe Email field  accepts letters,numbers & underscore.\n\nPlease re-enter your Email.");
			document.<?php echo($form); ?>.email.select();
			document.<?php echo($form); ?>.email.focus();
			return false;
		}
	}
if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID");
		   document.<?php echo($form); ?>.email.focus();
		   return false;
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID");
		   document.<?php echo($form); ?>.email.focus();
		   return false;
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID");
			document.<?php echo($form); ?>.email.focus();
		    return false;
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID");
			document.<?php echo($form); ?>.email.focus();
		    return false;
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID");
			document.<?php echo($form); ?>.email.focus();
		    return false;
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID");
			document.<?php echo($form); ?>.email.focus();
		    return false;
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID");
			document.<?php echo($form); ?>.email.focus();
		    return false;
		 }


 		 return true;
		 }
		 <?php					
	}
?>


<?php
function email_ValidateForm($form){
?>

function email_ValidateForm()
{

	var emailID=document.<?php echo($form); ?>.email;
                
	
	if ((emailID.value==null)||(emailID.value=="")){
		alert("Please Enter your Email ID");
		document.<?php echo($form); ?>.email.focus();
		return false;
	}
	if (echeck(trim(emailID.value))==false){
		emailID.value="";
		document.<?php echo($form); ?>.email.focus();
		return false;
	}
	return true;
	}
<?php	
 }
?>

<?php
function isProperPass() {
?>
	
function isProperPass(string) 
{


   if (!string) return false;
   var iChars = "*|,\":<>[]{}`\';()@&$#%._~!^+-?/=";

   for (var i = 0; i < string.length; i++) {
      if (iChars.indexOf(string.charAt(i)) != -1)
         return false;
   }
   return true;
   }
   <?php
   }
   ?>


   <?php
function isProper() {
?>
  
 function isProper(string) 
 {
 

   if (!string) return false;
   // fred var iChars = "*|,\":<>[]{}`\';()@&$#%~!^+-?/=";
     var iChars = "*|,\":<>[]{}`\';()@&$#%~!^+-?/= ";
   for (var i = 0; i < string.length; i++) {
      if (iChars.indexOf(string.charAt(i)) != -1)
         return false;
   }
   return true;
   }
   <?php
   }
   ?>  


    <?php
function isPass() {
?>
  
  function isPass(string) 
 {
 

   if (!string) return false;
   var iChars = "*._|,\":<>[]{}`\';()@&$#%~!^+-?/= ";

   for (var i = 0; i < string.length; i++) {
      if (iChars.indexOf(string.charAt(i)) != -1)
         return false;
   }
   return true;
   }   <?php
   }
   ?>





    <?php
function isName($form) {
?>
   function isName(str) 
{
	var str = document.<?php echo($form); ?>.email.value;
if (str == ""){
	if(document.<?php echo($form); ?>.temail)
	{
			document.<?php echo($form); ?>.email.value = document.<?php echo($form); ?>.temail.value;
			str = document.<?php echo($form); ?>.temail.value;
		}
		else{
			alert("\nThe Email field is blank .\n\nPlease re-enter your Email.")
			document.<?php echo($form); ?>.email.focus();
			return false;
		}
		}
	if((str.substring(0,1)<"a" || str.substring(0,1)>"z") && (str.substring(0,1)<"A" || str.substring(0,1)>"Z"))
	{
		alert("The Email should begin with an alphabetic character.");
		return false;
	}
	for (var i = 1; i < str.length; i++) 
	{
		var ch = str.substring(i, i + 1);
		if ( ((ch < "a" || "z" < ch) && (ch < "A" || "Z" < ch)) && (ch < "0" || "9" < ch) && (ch != '_') && (ch != '.')) 
		{
			alert("\nThe Email field  accepts letters,numbers & underscore.\n\nPlease re-enter your Email.");
			document.<?php echo($form); ?>.email.select();
			document.<?php echo($form); ?>.email.focus();
			return false;
		}
	}
	return true;
}
 <?php					
	}
?>

   <?php
function isProper_name() {
?>
  
 function isProper_name(string) 
 {
 

   if (!string) return false;
   var iChars = "=*|,\":<>[]{}`\';()@&$#%~!^+-?1234567890 ";

   for (var i = 0; i < string.length; i++) {
      if (iChars.indexOf(string.charAt(i)) != -1)
         return false;
   }
   return true;
   }
   <?php
   }
   ?> 
   
   
   
   
   <?php
function echeck1($form,$email) {
?>
function echeck1(str) 
{

		var at="@";
		var dot=".";
		var lat=str.indexOf(at);
		var lstr=str.length;
		var ldot=str.indexOf(dot);
		
		
		if((str.substring(0,1)<"a" || str.substring(0,1)>"z") && (str.substring(0,1)<"A" || str.substring(0,1)>"Z"))
		{
		alert("The Email should begin with an alphabetic character.");
		return false;
		}
	
	for (var i = 1; i < str.length; i++) 
		{
		var ch = str.substring(i, i + 1);
		if ( ((ch < "a" || "z" < ch) && (ch < "A" || "Z" < ch)) && (ch < "0" || "9" < ch) && (ch != '_') && (ch != '.') && (ch != '@')) 
		{
			alert("\nThe Email field  accepts letters,numbers & underscore.\n\nPlease re-enter your Email.");
			document.<?php echo($form); ?>.<?php echo($email); ?>.select();
			document.<?php echo($form); ?>.<?php echo($email); ?>.focus();
			return false;
		}
	}
if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID");
		   document.<?php echo($form); ?>.<?php echo($email); ?>.focus();
		   return false;
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID");
		   document.<?php echo($form); ?>.<?php echo($email); ?>.focus();
		   return false;
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID");
			document.<?php echo($form); ?>.<?php echo($email); ?>.focus();
		    return false;
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID");
			document.<?php echo($form); ?>.<?php echo($email); ?>.focus();
		    return false;
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID");
			document.<?php echo($form); ?>.<?php echo($email); ?>.focus();
		    return false;
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID");
			document.<?php echo($form); ?>.<?php echo($email); ?>.focus();
		    return false;
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID");
			document.<?php echo($form); ?>.<?php echo($email); ?>.focus();
		    return false;
		 }


 		 return true;
		 }
		 <?php					
	}
?>

<?php
function email_ValidateForm1($form,$email){
?>

function email_ValidateForm1(str)
{

	var emailID=document.<?php echo($form); ?>.<?php echo($email); ?>;
	
	if ((str==null)||(str=="")){

		return false;
	}
	if (echeck1(str)==false){

		return false;
	}
	return true;
	}
<?php	
 }
?>

