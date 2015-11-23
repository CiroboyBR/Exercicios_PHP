<?php

  $a =  $_POST['n1'];
  $b =  $_POST['n2'];
  $c =  $_POST['n3'];
 
  if ($a == $b && $a == $c)
    echo "TRÂNGULO EQUILÁTERO";
  else if ($a == $b || $a == $c || $b == $c)
    echo "TRIÂNGULO ISÓSCELES";
  else 
    echo "TRIÂNGULO ESCALENO";
?>