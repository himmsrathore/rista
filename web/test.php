<?php
$username="rnminfo";
$password="bknrnm4P";
$to="9950518896";
$from="Ristaa";
$code="1245";
$text="Activation%20Code%20".$code."%20From%20Ristaa.com";
$url="http://8.6.95.141/smpp/sendsms?username=$username&password=$password&to=$to&from=$from&text=$text";
$result = file_get_contents($url);
echo "Status - ".$result;


?>
