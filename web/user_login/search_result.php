<?php
session_start();
	require("../script/common.php");
	require("../script/mysql.php");
require("../script/openfile.php");
require("../script/validation.php");
include('../ps_pagination.php');

	$link = connect($hname,$uname,$passwd);
	usedatabase($dbname,$link);	
	

$username=$_SESSION['username'];

$check_data=mysql_query( "select upgrade_status from user_info where username='$username'" );
$check_data1 = mysql_fetch_array( $check_data );

if($username=="")
{
 $login="logout";
        echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../login.php?login=".$login."');\n");
		echo("-->\n");
		echo("</script>");
		}
        $gender=$_REQUEST['gender'];
        $agefrom=$_REQUEST['agefrom'];
		$ageto=$_REQUEST['ageto'];
        $marital_status=$_REQUEST['marital_status'];
        $child=$_REQUEST['child'];
        $cast=$_REQUEST['cast'];
        $physical_status=$_REQUEST['physical_status'];
        $manglik=$_REQUEST['manglik'];
        $state=$_REQUEST['state'];
        $status2="VY";
 $conn = mysql_connect($hname,$uname,$passwd);
	if(!$conn) die("Failed to connect to database!");
	$status = mysql_select_db($dbname, $conn);
	if(!$status) die("Failed to select database!");
    
    if($marital_status!="" and $child!="" and $cast!="" and $physical_status!="" and $manglik!="" and $state!="")
    {
        if($cast=="all")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND marital_status='".$marital_status."' AND physical_status='".$physical_status."' AND manglik='".$manglik."' AND state='".$state."' AND child='".$child."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    else
    {
      $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND marital_status='".$marital_status."' AND cast='".$cast."' AND physical_status='".$physical_status."' AND manglik='".$manglik."' AND state='".$state."' AND child='".$child."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    }
    elseif($marital_status=="" and $child=="" and $cast=="" and $physical_status=="" and $manglik=="" and $state=="")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND status='".$status2."' ORDER BY registeration_no DESC"; 
    }
    elseif($marital_status!="" and $child=="" and $cast=="" and $physical_status=="" and $manglik=="" and $state=="")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND marital_status='".$marital_status."' AND status='".$status2."' ORDER BY registeration_no DESC";
    }
    elseif($marital_status!="" and $child!="" and $cast=="" and $physical_status=="" and $manglik=="" and $state=="")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND marital_status='".$marital_status."' AND child='".$child."' AND status='".$status2."' ORDER BY registeration_no DESC";
    }
    elseif($marital_status!="" and $child!="" and $cast!="" and $physical_status=="" and $manglik=="" and $state=="")
    {
        if($cast=="all")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND marital_status='".$marital_status."' AND child='".$child."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    else
    {
      $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND marital_status='".$marital_status."' AND cast='".$cast."' AND child='".$child."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    }
    elseif($marital_status!="" and $child!="" and $cast!="" and $physical_status!="" and $manglik=="" and $state=="")
    {
        if($cast=="all")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND marital_status='".$marital_status."' AND child='".$child."' AND physical_status='".$physical_status."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    else
    {
      $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND marital_status='".$marital_status."' AND cast='".$cast."' AND child='".$child."' AND physical_status='".$physical_status."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    }
    elseif($marital_status!="" and $child!="" and $cast!="" and $physical_status!="" and $manglik!="" and $state=="")
    {
        if($cast=="all")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND marital_status='".$marital_status."' AND child='".$child."' AND physical_status='".$physical_status."' AND manglik='".$manglik."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    else
    {
      $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND marital_status='".$marital_status."' AND cast='".$cast."' AND child='".$child."' AND physical_status='".$physical_status."' AND manglik='".$manglik."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    }
    elseif($marital_status=="" and $child=="" and $cast!="" and $physical_status=="" and $manglik=="" and $state=="")
    {
        if($cast=="all")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    else
    {
      $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND cast='".$cast."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    }
    elseif($marital_status=="" and $child=="" and $cast!="" and $physical_status!="" and $manglik=="" and $state=="")
    {
        if($cast=="all")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND physical_status='".$physical_status."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    else
    {
      $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND cast='".$cast."' AND physical_status='".$physical_status."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    }
    elseif($marital_status=="" and $child=="" and $cast!="" and $physical_status!="" and $manglik!="" and $state=="")
    {
        if($cast=="all")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND physical_status='".$physical_status."' AND manglik='".$manglik."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    else
    {
      $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND cast='".$cast."' AND physical_status='".$physical_status."' AND manglik='".$manglik."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    }
    elseif($marital_status=="" and $child=="" and $cast!="" and $physical_status!="" and $manglik!="" and $state!="")
    {
        if($cast=="all")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND physical_status='".$physical_status."' AND manglik='".$manglik."' AND state='".$state."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    else
    {
      $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND cast='".$cast."' AND physical_status='".$physical_status."' AND manglik='".$manglik."' AND state='".$state."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    }
    elseif($marital_status!="" and $child=="" and $cast!="" and $physical_status=="" and $manglik=="" and $state=="")
    {
        if($cast=="all")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND marital_status='".$marital_status."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    else
    {
      $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND cast='".$cast."' AND marital_status='".$marital_status."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    }
    elseif($marital_status!="" and $child=="" and $cast=="" and $physical_status!="" and $manglik=="" and $state=="")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND cast='".$cast."' AND marital_status='".$marital_status."' AND physical_status='".$physical_status."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    elseif($marital_status=="" and $child=="" and $cast=="" and $physical_status=="" and $manglik!="" and $state=="")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND manglik='".$manglik."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    elseif($marital_status!="" and $child=="" and $cast=="" and $physical_status=="" and $manglik!="" and $state=="")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND manglik='".$manglik."' AND marital_status='".$marital_status."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    elseif($marital_status!="" and $child=="" and $cast=="" and $physical_status=="" and $manglik!="" and $state!="")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND manglik='".$manglik."' AND marital_status='".$marital_status."' AND state='".$state."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    elseif($marital_status=="" and $child=="" and $cast=="" and $physical_status!="" and $manglik!="" and $state=="")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND manglik='".$manglik."' AND physical_status='".$physical_status."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    elseif($marital_status=="" and $child=="" and $cast=="" and $physical_status!="" and $manglik!="" and $state!="")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND manglik='".$manglik."' AND physical_status='".$physical_status."' AND state='".$state."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    elseif($marital_status=="" and $child=="" and $cast!="" and $physical_status=="" and $manglik!="" and $state=="")
    {
        if($cast=="all")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND manglik='".$manglik."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    else{
       $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND manglik='".$manglik."' AND cast='".$cast."' AND status='".$status2."' ORDER BY registeration_no DESC";
 
    }
    }
    elseif($marital_status=="" and $child=="" and $cast=="" and $physical_status=="" and $manglik!="" and $state!="")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND manglik='".$manglik."' AND state='".$state."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    elseif($marital_status=="" and $child!="" and $cast=="" and $physical_status!="" and $manglik=="" and $state=="")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND child='".$child."' AND physical_status='".$physical_status."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    elseif($marital_status!="" and $child!="" and $cast=="" and $physical_status!="" and $manglik=="" and $state=="")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND child='".$child."' AND physical_status='".$physical_status."' AND marital_status='".$marital_status."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    elseif($marital_status=="" and $child=="" and $cast=="" and $physical_status!="" and $manglik=="" and $state!="")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND physical_status='".$physical_status."' AND state='".$state."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    elseif($marital_status=="" and $child!="" and $cast=="" and $physical_status=="" and $manglik=="" and $state=="")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND child='".$child."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    elseif($marital_status=="" and $child=="" and $cast=="" and $physical_status!="" and $manglik=="" and $state=="")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND physical_status='".$physical_status."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    elseif($marital_status=="" and $child=="" and $cast=="" and $physical_status=="" and $manglik=="" and $state!="")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND state='".$state."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    elseif($marital_status!="" and $child=="" and $cast!="" and $physical_status=="" and $manglik!="" and $state=="")
    {
        if($cast=="all")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND marital_status='".$marital_status."' AND manglik='".$manglik."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    else
    {
      $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND marital_status='".$marital_status."' AND cast='".$cast."' AND manglik='".$manglik."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    }
    elseif($marital_status=="" and $child!="" and $cast=="" and $physical_status=="" and $manglik!="" and $state=="")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND manglik='".$manglik."' AND child='".$child."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    elseif($marital_status!="" and $child=="" and $cast!="" and $physical_status=="" and $manglik=="" and $state!="")
    {
        if($cast=="all")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND marital_status='".$marital_status."' AND state='".$state."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    else
    {
      $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND marital_status='".$marital_status."' AND state='".$state."' AND cast='".$cast."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    }
    elseif($marital_status=="" and $child=="" and $cast!="" and $physical_status=="" and $manglik=="" and $state!="")
    {
        if($cast=="all")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND state='".$state."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    else
    {
      $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND state='".$state."' AND cast='".$cast."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    }
    elseif($marital_status=="" and $child=="" and $cast!="" and $physical_status=="" and $manglik!="" and $state!="")
    {
        if($cast=="all")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND state='".$state."' AND manglik='".$manglik."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    else
    {
      $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND manglik='".$manglik."' AND state='".$state."' AND cast='".$cast."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    }
    elseif($marital_status=="" and $child!="" and $cast!="" and $physical_status=="" and $manglik=="" and $state=="")
    {
        if($cast=="all")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND child='".$child."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    else
    {
      $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND cast='".$cast."' AND child='".$child."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    }
    elseif($marital_status!="" and $child=="" and $cast=="" and $physical_status=="" and $manglik=="" and $state!="")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND state='".$state."' AND marital_status='".$marital_status."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    elseif($marital_status=="" and $child!="" and $cast=="" and $physical_status=="" and $manglik=="" and $state!="")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND state='".$state."' AND child='".$child."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    elseif($marital_status!="" and $child=="" and $cast=="" and $physical_status!="" and $manglik!="" and $state=="")
    {
        $sql = "SELECT * FROM user_info WHERE gender='".$gender."' AND age between '" . $agefrom . "' AND '" . $ageto."' AND manglik='".$manglik."' AND marital_status='".$marital_status."' AND physical_status='".$physical_status."' AND status='".$status2."' ORDER BY registeration_no DESC";
	}
    
    
    
    
    
    
    
    
        
    
    
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ristaa.com - Hindu Matrimony, Hindu Matrimonial</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../css/style-tango.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" media="all" href="../css/chat.css" />
<link type="text/css" rel="stylesheet" media="all" href="../css/screen.css" />
<script language="JavaScript" src="../js/mm_menu.js"></script>
<script language="JavaScript" src="../js/mm_bar.js"></script>

</head>
<body>
<script language="JavaScript1.2">mmLoadMenus();</script>
<div class="topbg-logo2">
  <div class="topbg-logo">
    <div class="logo-holder"></div>

    <div class="link-holder">

      <div class="link-holder3"><a href="index.php">My Ristaa</a></div>
      <div class="link-holder2"><a href="my_profile.php">My Profile</a></div>
      <div class="link-holder2"><a href="about_us.php">About us </a></div>
      <div class="link-holder2"><a href="contact.php">contact us</a></div>
<?php

if( $check_data1[0] == 'upgraded' ){
echo "<div class='link-holder2'><a href='user_chat.php'>Chat</a></div>";
}
?>
      
      <div class="link-holder2"><a href="logout.php">Logout</a></div>
   </div>
  </div>
</div>
<div class="header-bg1">
&nbsp;</div>
<div class="login-bg" style="width: 1000px; height: 60px"><center>
<center>
    <div class="login-holder" style="width: 879px; height: 47px"> <font face="Verdana" size="2"  color="white"><b><a style="text-decoration: none" href="interests_received.php"> <font  color="white">Interests Received</font></a>&nbsp; |&nbsp; <a style="text-decoration: none" href="interests_expressed.php"> <font  color="white">Interests Expressed</font></a>&nbsp; |&nbsp; <a href="#" name="link1" id="link1" style="text-decoration: none" onmouseover="MM_showMenu(window.mm_menu_0521105438_0,-4,20,null,'link1')" onmouseout="MM_startTimeout();"><font color="white">Search</font></a> &nbsp; | <a href="#" name="link2" id="link2" style="text-decoration: none" onmouseover="MM_showMenu(window.mm_menu_0521105438_1,-4,20,null,'link2')" onmouseout="MM_startTimeout();"><font color="white">Upgrade</font></a> | &nbsp;<a style="text-decoration: none" href="change_password.php"> <font  color="white">Change Password</font></a>&nbsp; |&nbsp; <a style="text-decoration: none" href="delete_account.php"> <font  color="white">Delete Account</font></a>

</b></font></div>
  </center></div>
<div align="center">
<table width=1000 cellspacing="0" cellpadding="0" background="../images/main.jpg"><tr><td></td><td>
<table border="0" width="988" cellspacing="0" cellpadding="0">
					

					
					
					<tr>
						<td width="988" height="26">
						<table border="0" cellSpacing="0" cellPadding="0" width="988">
						
	<tr>
									<td height="26" align="left" colspan="6">&nbsp;									</td>
						  </tr>
								 
	<tr>
									<td height="47" align="left" colspan="6"><b> <font face="Verdana" size="+1" color="#FF0000">&nbsp;&nbsp;&nbsp;&nbsp;Advanced Search</font></b></td>
        </tr><form name="search" method="post" action="search_result.php" enctype="multipart/form-data">
        <tr>
          <td width="135" height="37" align="left" valign="middle"><b> <font face="Verdana" size="2" color="#006600">Gender :&nbsp;&nbsp; </font> </b> <font color="#333333" face="Arial">&nbsp; </font></td>
          <td width="200" height="37" align="left" valign="middle"><font color="#333333" face="Arial">
            <select id="gender" name="gender" tabindex="1" style="font-weight: 700; width:200px; color:#FFFFFF; background-color:#999999; " >
              <option value="<?php echo $gender;?>" selected><?php echo $gender;?></option>
			  <option value="Female">Female&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
              <option value="Male">Male</option>
            </select>
          </font></td>
          <td width="91" height="37" align="left" valign="middle"><b><font face="Verdana" size="2" color="#006600"> Age :</font></b></td>
          <td width="207" height="37" align="left" valign="middle"><font face="Verdana" size="3">
            <select name="agefrom" style="font-weight: 700; width:50px; color:#FFFFFF; background-color:#999999; " tabindex="2">
              
        	<option value="<?php echo $agefrom;?>" selected><?php echo $agefrom; ?></option><option> 18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
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
            </select>
            </font><b><font size="2" face="Verdana"> to </font></b> <font face="Verdana" size="3">
            <select name="ageto"  style="font-weight: 700; width:50px; color:#FFFFFF; background-color:#999999; " tabindex="3">
              <option value="<?php echo $ageto;?>" selected><?php echo $ageto; ?></option><option>18</option>
              <option> 19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option> 23</option>
              <option>24</option>
              <option>25</option>
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
            </select>
          </font></td>
          <td width="155" height="37" align="left" valign="middle"><b><font face="Verdana" size="2" color="#006600">Marital Status :</font></b></td>
          <td width="200" height="37" align="left" valign="middle"><b> <font color="#333333" face="Verdana" size="2">
            <select id="marital_status0" name="marital_status" size="1" tabindex="4" style="font-weight: 700; width:200px; color:#FFFFFF; background-color:#999999; "><?php if($marital_status!="")
                  {
                  ?>
                  <option selected value="<?php echo $marital_status;?>"><?php echo $marital_status;?></option>
                  <option value="">Select</option>
					<?php } else {?>
                  <option selected value="">Select</option>
                  <?php } ?>
              <option selected="selected" value="">Select&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
              <option value="Unmarried">Unmarried</option>
              <option value="Widower">Widower</option>
              <option value="Divorced">Divorced</option>
              <option value="Awaiting Divorce">Awaiting Divorce</option>
            </select>
          </font></b></td>
        </tr>
        <tr>
          <td height="54" valign="middle" align="left"><b><font face="Verdana" size="2" color="#006600">Have Children :</font></b></td>
          <td height="54" valign="middle" align="left"><b><font color="#333333" face="Verdana" size="2">
            <select id="marital_status" name="child" size="1" tabindex="5"  style="font-weight: 700; width:200px; color:#FFFFFF; background-color:#999999; ">
               <?php if($child!="")
                  {
                  ?>
                  <option selected value="<?php echo $child;?>"><?php echo $child;?></option>
                  <option value="">Select</option>
					<?php } else {?>
                  <option selected value="">Select</option>
                  <?php } ?><option selected="selected" value="">Select</option>
              <option value="No">No</option>
              <option value="Yes, Living Together">Yes, Living Together</option>
              <option value="Yes, Not Living Together">Yes, Not Living 
                Together</option>
            </select>
          </font></b></td>
          <td height="54" valign="middle" align="left"><b><font face="Verdana" size="2" color="#006600"> Cast :</font></b> </td>
          <td height="54" valign="middle" align="left"><b> <font color="#333333" face="Verdana" size="2">
            <select id="cast" name="cast" size="1" tabindex="6"  style="font-weight: 700; width:200px; color:#FFFFFF; background-color:#999999; ">
               <?php if($cast!="")
                  {
                  ?>
                  <option selected value="<?php echo $cast;?>"><?php echo $cast;?></option>
                  <option value="">Select</option>
					<?php } else {?>
                  <option selected value="">Select</option>
                  <?php } ?><option selected="selected" value="">Select&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
              <option value="all">Caste No Bar</option>
              <option>Agarwal</option>
              <option>Baniya</option>
              <option>Bishnoi/Vishnoi</option>
              <option>Brahmin</option>
              <option>Chandravanshi</option>
              <option>Kahar</option>
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
              <option>SC</option>
              <option>ST</option>
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
            </select>
          </font></b></td>
          <td height="54" valign="middle" align="left"><b><font face="Verdana" size="2" color="#006600"> Physical Status :</font></b></td>
          <td height="54" valign="middle" align="left"><b> <font color="#333333" face="Verdana" size="2">
            <select id="physical_status" name="physical_status" size="1" tabindex="7" style="font-weight: 700; width:200px; color:#FFFFFF; background-color:#999999; ">
                   <?php if($physical_status!="")
                  {
                  ?>
                  <option selected value="<?php echo $physical_status;?>"><?php echo $physical_status;?></option>
                  <option value="">Select</option>
					<?php } else {?>
                  <option selected value="">Select</option>
                  <?php } ?>

              <option selected="selected" value="">Select</option>
              <option value="Normal">Normal</option>
              <option value="Physically Challanged">Physically Challanged </option>
            </select>
          </font></b></td>
        </tr>
        <tr>
          <td height="36" valign="middle" align="left"><b> <font face="Verdana" size="2" color="#006600">Manglik :</font></b></td>
          <td height="36" valign="middle" align="left"><b> <font color="#333333" face="Verdana" size="2">
            <select id="manglik" name="manglik" size="1" tabindex="8" style="font-weight: 700; width:200px; color:#FFFFFF; background-color:#999999; ">
       <?php if($manglik!="")
                  {
                  ?>
                  <option selected value="<?php echo $manglik;?>"><?php echo $manglik;?></option>
                  <option value="">Select</option>
					<?php } else {?>
                  <option selected value="">Select</option>
                  <?php } ?>
              <option selected="selected" value="">Select&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>

              <option value="No">No</option>
              <option value="Yes">Yes</option>
              <option value="Don&#39;t Know">Don&#39;t Know</option>
            </select>
          </font></b></td>
          <td height="36" valign="middle" align="left"><b><font face="Verdana" size="2" color="#006600"> Location :</font></b></td>
          <td height="36" valign="middle" align="left"><font face="Verdana">
            <select name="state"  style="font-weight: 700; width:200px; color:#FFFFFF; background-color:#999999; " tabindex="12" size="1">
               <?php if($state!="")
                  {
                  ?>
                  <option selected value="<?php echo $state;?>"><?php echo $state;?></option>
                  <option value="">Select</option>
					<?php } else {?>
                  <option selected value="">Select</option>
                  <?php } ?><option value="">Select</option>
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
            </select>
          </font></td>
          <td height="36" valign="middle" align="left">&nbsp;</td>
          <td height="36" valign="middle" align="left">&nbsp;</td>
        </tr>
        <tr>
          <td height="51" align="left">&nbsp;</td>
          <td height="51" align="left" colspan="5"><input type="submit" name="Submit" value="" style="background:url(../images/search.jpg); width:176px; height:28px;float: left; border:none;" />
          <p></p></td>
        </tr>
        
        </form>
								 
	<tr>
									<td height="26" align="left" colspan="6">&nbsp;									</td>
						  </tr>
								 
	<tr>
									<td height="26" align="left" colspan="6">									</td>
						  </tr>
								<tr>
						<td height="26" align="left" colspan="6"><b>
						<font face="Verdana" color="#FF0000">&nbsp;&nbsp;&nbsp;&nbsp; Search Results</font></b></td>
								</tr><tr>
								<?php 
                           $pager = new PS_Pagination($conn, $sql, 5, 5, "param1=valu1&param2=value2");
	
	
	$pager->setDebug(true);
	
	
	$rs = $pager->paginate();
	if(!$rs) die(mysql_error());
	while($row = mysql_fetch_assoc($rs)) 
    {

        ?>
								<tr>
						<td height="26" align="left" colspan="6">
						
						
						<div align="center">
							<table border="0" width="703" cellspacing="0" cellpadding="0" style="border: 1px solid #000000">
								<tr>
									<td width="158" rowspan="6" valign="middle">
									<p align="center">
									<a target="_blank" href="view_user.php?no=<?php echo $row['registeration_no'];?>">
								  <img border="0" src="../<?php echo $row['image_url'];?>" width="123" height="148" style="border: 1px solid #000000" title="<?php echo $row['name'];?>"></a></td>
									<td valign="bottom" height="15" colspan="2" align="left">
									<font face="Verdana" size="2" color="#006600"><b>Name :</b> <font color="#666666"><?php echo $row['name'];?></font></font></td>
								</tr>
								<tr>
									<td valign="bottom" height="15" colspan="2" align="left">
									<font face="Verdana" size="2" color="#006600"><b>Email :</b><font color="#666666"> <?php 
								$ch=mysql_query("select upgrade_status from user_info where username='$username'");
								$ch1=mysql_fetch_array($ch);
								if($ch1[0]=='upgraded'){ echo $row['email'];}?></font></font></td>
								</tr>
								<tr>
									<td valign="bottom" height="15" width="249" align="left">
									<font face="Verdana" size="2" color="#006600"><b>Date of 
									Birth :</b><font color="#666666"> <?php echo $row['date_birth']."-".$row['month_birth']."-".$row['year_birth'];?></font></font></td>
									<td valign="bottom" height="15" width="294" align="left">									
									<font face="Verdana" size="2" color="#006600"><b>Time of 
									Birth :</b><font color="#666666"> <?php echo $row['hour_birth'].":".$row['minutes_birth'].":".$row['am_birth'];?></font></font></td>
								</tr>
								
								<tr>
									<td valign="bottom" height="15" width="249" align="left">
									<font face="Verdana" size="2" color="#006600"><b>Marital 
									Status :</b><font color="#666666"> <?php echo $row['marital_status'];?></font></font></td>
									<td valign="bottom" height="15" width="294" align="left"><?php
									$ch=mysql_query("select upgrade_status from user_info where username='$username'");
									$ch1=mysql_fetch_array($ch);
									if($ch1[0]=='upgraded'){
									echo "<a target='_blank' style='text-decoration: none; font-weight: 700' href=interest_expressed.php?no=".$row['registeration_no']."><font color='red' face='Verdana' size='2'>
									Interest Express</font></a>";}
									else{
									echo "<a target='_blank' style='text-decoration: none; font-weight: 700' href=in_exp.php?no=".$row['registeration_no']."><font color='red' face='Verdana' size='2'>
									Interest Express</font></a>";
									}
									
?></td>
								</tr>
								<tr>
									<td valign="bottom" height="15" colspan="1" align="left">
									<font face="Verdana" size="2" color="#006600"><b>Location :</b> <font color="#666666"><?php echo $row['country']." - ".$row['state']." - ".$row['city'];?></font></font></td>
									<td align="left"><a target="_blank" href="view_user.php?no=<?php echo $row['registeration_no'];?>" style="text-decoration:none;"><font color="#666666" face="Verdana">View Profile</font></a></td>
								</tr>
								<tr>
									<td height="5" colspan="2" align="left">&nbsp;								  </td>
								</tr>
						  </table></div>						</td>
					</tr>
					<tr><td colspan="6">&nbsp;</td></tr>
								<?php
	}
    ?><tr>
									<td height="26" align="left" colspan="6">&nbsp;									</td>
								</tr>
								<tr>
									<td height="26" align="right" colspan="6"><font face="Verdana" size="2"><b><?php echo "<table><tr><td>".$pager->renderFullNav()."</td></tr></table>";?></b></font>
									&nbsp;</td>
								</tr>	<tr>
									<td height="26" width="100%" align="center" colspan="7"><font face="Verdana" size="2" color="#006600"><b>
									<?php 
                                        
    $que=mysql_query($sql);
										$row1 = mysql_fetch_array($que);
										if($row1[0]==NULL){
										echo "<font color=red>No Result Found</font>";
										}
									
									?></b></font>
									&nbsp;</td>
								</tr>
					<tr>
						<td width="980" height="91" colspan="3">&nbsp;</td>
						<td width="6" height="91">&nbsp;</td>
					</tr>
						</table>
						 </td>
					</tr>
					
					
		</table>
</td></tr></table>
</div>
<div class="footer">
  <div id="footer-bound">
	<p align="center">Copyright 2011. All rights reserved.</div>
</div>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/chat.js"></script>
</body>
</html>
