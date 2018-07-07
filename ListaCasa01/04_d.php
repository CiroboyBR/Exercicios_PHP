<?php

$str = "Palavra";
$tm	p = "0";
$i;

for($i = 0; $i < strlen($str); $i++)
	$tmp[$i] = $str[strlen($str) - $i -1];

echo "String invertida: $tmp<br>";

?>