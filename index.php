<!DOCTYPE html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" charset="utf-8">
    <title>AD</title>
  </head>


<?php
	




$url = "http://www.0432.ua/doska/add";

	$s = file_get_contents($url);
	$s = str_replace(
		'<input type="text" name="name" id="name" value="', 
		'<input type="text" name="name" id="name" value="',$s);
	
	print $s;

//$captcha = substr($s, strpos($s, '/tmp/captcha/'));

//$captcha = substr($captcha, 0, strpos($captcha, '"'));

		

		//print "<img src='http://www.0432.ua$captcha'>";


?>