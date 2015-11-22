<?php

  $nome = $_POST['nome'];
  $salario = $_POST['sal'];
  $dependentes = $_POST['dep'];  
  $liquido = 0;
 
  if ($salario <= 300)
     $liquido = $salario -  ($salario * 0.08) + ( (15.00 * $dependentes) + 40.00 + 100.00 ) ;
  else if ($salario > 300 && $salario <= 700)
     $liquido = $salario -  ($salario * 0.09) + ( (15.00 * $dependentes) + 40.00 + 100.00 ) ;
  else if ($salario > 700)
     $liquido = $salario -  ($salario * 0.10) + ( (15.00 * $dependentes) + 40.00 + 100.00 ) ;
  
  
  echo "Nome: $nome <br>";
  echo "Salário Líquido: $liquido <br>";
?>