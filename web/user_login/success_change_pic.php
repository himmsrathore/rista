<?php



session_start();

	require("../script/common.php");
	require("../script/mysql.php");
require("../script/openfile.php");


	$link = connect($hname,$uname,$passwd);
	usedatabase($dbname,$link);	
	
	$username=$_SESSION['username'];


if($username=="")
{
 $login="logout";
        echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../admin.php?login=".$login."');\n");
		echo("-->\n");
		echo("</script>");
		}
		
	$target_path = "../user_images/";

$data=mysql_query("select image_url from user_info where username='$username'");
$data1=mysql_fetch_array( $data );
$delete_img="../".$data1[0];
unlink($delete_img);

$targetpath = basename( $_FILES['uploadedfile']['name']);

$target_path = $target_path . $targetpath; 



move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path);
echo "Image ".  basename( $_FILES['uploadedfile']['name']). 
    " has been successfully uploaded.";
$news_img = "user_images/".$targetpath;
mysql_query("update user_info set image_url='$news_img' where username='$username'");

	
		
      echo("<SCRIPT LANGUAGE=\"JavaScript\">\n<!--\n");
		echo("self.location.replace('../user_login/my_profile.php?status=s');\n");
		echo("-->\n");
		echo("</script>");	
	
?>