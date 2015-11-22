<?php

  $v = array($_POST['n1'], $_POST['n2'], $_POST['n3']);
  $i = 0;
  $j = 0;
  $tmp;
  
  for ($i = 0; $i < 3; $i++)
    for ($j = 0; $j < 3; $j++) 
      if ($v[$i] < $v[$j]) {
         $tmp = $v[$i];
         $v[$i] = $v[$j];
         $v[$j] = $tmp;
      }
  
  for ($i = 0; $i < 3; $i++)
    echo $v[$i] . " ";
        
    
      
  
?>