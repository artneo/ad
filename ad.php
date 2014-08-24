<!DOCTYPE html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" charset="utf-8">
    <title>AD</title>
  </head>

<?php
	
		$ss = file_get_contents('ad.txt');
		$a = array('titl','text','phon','name','mail');
		$aa = array();

$x=-1;
while ($x++<10) {
	if ($x==5) break;							//отрезаем от текста лишнее по меткам
	$t = substr($ss, strpos($ss, $a[$x])+4); 	//в начале
	$t = substr($t, 0, strpos($t, $a[$x]));		//в конце
	$aa[]=$t;									//нарезанные куски в массив $aa
	$t='';
				}

$x=-1;
while ($x++<10) {
if ($x==5) break;
echo "<br><br>";
print $aa[$x];
}



?>
