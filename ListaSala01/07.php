<?php

$num1 = $_POST['n1'];
$num2 = $_POST['n2'];


if ($num1 > $num2)
  echo "$num1"." eh maior que "." $num2";
else if ($num1 < $num2)
  echo "$num2"." eh maior que "."$num1";
else
  echo "$num1"." e $num2 sao iguais";


?>
