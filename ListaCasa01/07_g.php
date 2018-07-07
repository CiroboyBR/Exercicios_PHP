<?php

$n = rand(1, 30);

echo "N = ".$n."<br><br>";

if( $n % 2 == 0)
	echo $n." é multiplo de 2.<br>";
if( $n % 3 == 0)
	echo $n." é multiplo de 3.<br>";
if( $n % 7 == 0)
	echo $n." é multiplo de 7.<br>";

?>