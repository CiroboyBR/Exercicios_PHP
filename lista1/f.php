<?php

$A = array($_POST['a1'], $_POST['a2'], $_POST['a3'], $_POST['a4']);
$B = array($_POST['b1'], $_POST['b2'], $_POST['b3'], $_POST['b4']);
$C = array($_POST['c1'], $_POST['c2'], $_POST['c3'], $_POST['c4']);
$D = array($_POST['d1'], $_POST['d2'], $_POST['d3'], $_POST['d4']);

$E = array (array (),array (),array (),array ());

$i = 0;
$j = 0;

	for ($i = 0; $i < 4; $i++)  {
    $E[0][$i] = ($A[$i] * 2);
    $E[1][$i] = ($B[$i] * 3);
    $E[2][$i] = ($C[$i] * 4);
    $E[3][$i] =  fatorial($D[$i]) ;
		
  }
  //imprime
  for ($i = 0; $i < 4; $i++)  {
    for ($j = 0; $j < 4; $j++)  {
      echo $E[$i][$j] ;
      echo " " ;
    }
    echo "<br>";
  }
  
  function fatorial($n) {
    $x;
    $total = 1;
    
    for ($x = $n; $x > 1; $x-- ) {
      $total = $total * $x  ; 
    }
  
    return $total;
  }
  
?>