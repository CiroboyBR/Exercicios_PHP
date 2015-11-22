<?php

  $v = array($_POST['n1'], $_POST['n2'], $_POST['n3']);
    
  $media = bcdiv( ( ($v[0]+$v[1]+$v[2]) ) , '3', 2 );

  echo "Media das notas: " . $media;
  
  if($media >= 7) {
    echo "<br>Aprovado";
  }
  else if($media >= 4 && $media < 7) {
    echo "<br>Prova final";
  }
  else if($media < 4 ) {
    echo "<br>Reprovado";
  }
  
?>