<?php
session_start();
session_unset();
session_destroy();
	
	require("../script/common.php");
	require("../script/mysql.php");
require("../script/openfile.php");


	$link = connect($hname,$uname,$passwd);
	usedatabase($dbname,$link);	
	
	$login="logout";
        echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../admin.php?login=".$login."');\n");
		echo("-->\n");
		echo("</script>");
 
	
?>