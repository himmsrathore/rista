<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
</head>
<body>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center"><?php
	require("script/common.php");
	require("script/mysql.php");
require("script/openfile.php");
require("script/validation.php");


	$link = connect($hname,$uname,$passwd);
	usedatabase($dbname,$link);	
	
	$uname=$_REQUEST['uname'];
$condition = "username = '$uname'";

$result = queryselect("username","user_info",$condition,$link);

if(mysql_num_rows($result) != 0)
{
		$available = 0;	
		echo "<font color=red>This User name is used by another user.</font>";
}
	
else
{
	$available = 1;
	echo "<font color=green>This User name is available for use.</font";
	
}
	
	
	
?></p>
</body>
</html>