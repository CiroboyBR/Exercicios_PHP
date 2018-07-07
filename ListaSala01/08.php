<?php

$lado1 = $_POST['l1'];
$lado2 = $_POST['l2'];
$lado3 = $_POST['l3'];
$lado4 = $_POST['l4'];


if ( $lado1 == $lado2 && $lado2  == $lado3 && $lado3 == $lado4)
	echo "Quadrado";
else if ( $lado1 == $lado3 && $lado2  == $lado4)
	echo "Retangulo";
else if ( ($lado1 != $lado2 && $lado1  != $lado3 && $lado1  != $lado4) && ( $lado2  != $lado3 && $lado2  != $lado4) && ($lado3  != $lado4) )
	echo "Trapezio";


?>
