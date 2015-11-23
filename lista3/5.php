<?php

  $valor =  $_POST['des'];
  $idaevolta = $_POST['volta'];
  $preco;
  
  if ($valor == 1){
    $preco = 500;
  }
  else if ($valor == 2){
    $preco = 350;
  }
  else if ($valor == 4){
    $preco = 350;
  }
  else if ($valor == 3) {
    $preco = 300;
  }
  
  if ($idaevolta == 1) {
    if ($valor == 1 || $valor == 4)
      echo "Valor da passagem: " . ( ($preco * 2) - 100);
    else if ($valor == 2 || $valor == 3)
      echo "Valor da passagem: " . ( ($preco * 2) - 50);
    }
  else 
    echo "Valor da passagem: " . $preco;
  
 ?>
  