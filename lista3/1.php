<?php

  $nome = $_POST['nom'];
  $sexo = $_POST['sex'];
  $idade = $_POST['id'];  
 
  if ($sexo == 2 && $idade < 25)
    echo "$nome ACEITA";
  else
    echo "$nome NÃO ACEITA";
  
  
?>