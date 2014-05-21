<?php
	require("common.php");
	function connect($hname,$uname,$passwd){
	
		if(!($link=mysql_connect($hname,$uname,$passwd)))
		{
			echo("<B>error : ".mysql_error()." Error in connection</B>");
			exit();
		}
		return $link;
	}
	
	
	function usedatabase($dbname,$link)
	{
		if(!(mysql_select_db($dbname,$link)))
		{
			echo("<B>error : " .mysql_error()." Could not use database $dbname </B>");
			exit();
		}
	}

	
	function query($query,$link)
	{
		
		if($result = mysql_query($query,$link)){
		echo("<B>error : " .mysql_error()." query returned error</B>");
		exit();
		}
		return $result;

	}
	
	
	function queryinsert($tablename,$valuelist,$link)
	{
		
		$query = "INSERT INTO $tablename VALUES($valuelist)";
		if(!(mysql_query($query,$link)))
		{
			echo("Error during insertion of data : The query was \"$query\" <BR />".mysql_error());
			exit();
		}
	}


	function queryselectiveinsert($tablename,$columnlist,$valuelist,$link)
	{
		
		$query = "INSERT INTO $tablename ($columnlist) VALUES($valuelist)";
		if(!(mysql_query($query,$link)))
		{
			echo("Error during insertion of data : The query was \"$query\" <BR />".mysql_error());
			exit();
		}
	}

	
	function querydelete($tablename,$condition,$link)
	{	
		$query = "DELETE FROM $tablename WHERE $condition";
		
		if(!(mysql_query($query,$link)))
		{
			echo("Error in executing \"$query\" query<br />Error:".mysql_error());
			exit();
		}
		
	}
	
	function queryalterchange($tablename,$operation,$field,$newfield,$link)
	{
		$query = "ALTER TABLE $tablename $operation $field $newfield";
		
		if(!(mysql_query($query,$link)))
		{
			echo("Error in executing \"$query\" query<br />Error:".mysql_error());
			exit();
		}
	}
	
	function queryalteraddordroporrename($tablename,$operation,$field,$link)
	{
		$query = "ALTER TABLE $tablename $operation $field";
		
		if(!(mysql_query($query,$link)))
		{
			echo("Error in executing \"$query\" query<br />Error:".mysql_error());
			exit();
		}
	}
	
	function queryupdate($tablename,$setfield,$condition,$link)
	{
		$query = "UPDATE $tablename SET $setfield WHERE $condition";
		
		if(!(mysql_query($query,$link)))
		{
			echo("Error in executing \"$query\" query<br />Error:".mysql_error());
			exit();
		}
	}
	
	function queryselect($attributelist,$tablelist,$condition,$link)
	{	
		$query = "SELECT $attributelist FROM $tablelist";
		if($condition!="")
			$query = $query." WHERE $condition";
           
		
		if(!($res=mysql_query($query,$link)))
		{
			echo("Error in executing \"$query\" query<br />Error:".mysql_error());
			
			
			exit();
		}
		return $res;
	}

?>