<?php



function open($filename)

{ 

	if (!$file = fopen($filename,"r")){

		echo("<br>Could not perform request<br>");

		exit();

		}

	else

	{

		fpassthru($file);

	}

}

?>