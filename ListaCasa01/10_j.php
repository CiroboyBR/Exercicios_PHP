<?php
$ladoA = $_POST['la'];
$ladoB = $_POST['lb'];
$ladoC = $_POST['lc'];

echo $ladoA."<br>";
echo $ladoB."<br>";
echo $ladoC."<br>";

if ($ladoA == $ladoB && $ladoC == $ladoB)
	echo "Equilátero!";
else if ( ( $ladoA == $ladoB && $ladoA != $ladoC) or  ( $ladoC == $ladoB && $ladoC != $ladoA) or ( $ladoA == $ladoC && $ladoA != $ladoB))
	echo "Isóceles!";
else
	echo "Escaleno!";


?>