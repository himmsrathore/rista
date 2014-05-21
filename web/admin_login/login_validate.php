<?php
session_start();   

require("../script/common.php");
require("../script/mysql.php");
require("../script/openfile.php");
require("../script/validation.php");


	$link = connect($hname,$uname,$passwd);
	usedatabase($dbname,$link);	
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
   $result = queryselect("username,password","admin","username = '".$username."' and password = '".$password."'",$link);
if(mysql_num_rows($result)!=0)
{
    queryupdate("admin","last_login = '".date("l F d, Y, h:i A")."'","username='".$username."' AND password='".$password."'",$link);
$_SESSION['admin_username']=$username;
$_SESSION['admin_password']=$password;
}
        if($_SESSION['admin_username']==$username and $_SESSION['admin_password']==$password)
        {
            echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('index.php');\n");
		echo("-->\n");
		echo("</script>");
        }
        else{
            $login="invalid";
            }
        
    
echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../admin.php?login=".$login."');\n");
		echo("-->\n");
		echo("</script>");




	
?>