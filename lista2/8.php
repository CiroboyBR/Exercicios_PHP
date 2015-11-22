<?php

  $v = array($_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['n4'], $_POST['n5']);
  $capacidade = $_POST['cap'];
  
  $i = 0;
  
  $total = 0;
 
  for ($i = 0; $i < 5; $i++)
    $total = ($total+$v[$i]);
  
  if ($total <= $capacidade)
    echo $total . "Kg, Liberado para Subir!";
  else
    echo $total . "Kg, Excedeu a carga máxima!";
  
        
    
      
  
?>