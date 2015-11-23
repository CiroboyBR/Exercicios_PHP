<?php

$livro = $_POST['livr'];
$tipo = $_POST['tip'];

echo "Nome do livro: $livro";

if ($tipo == 1) {
  echo "<br>Tipo de usuário: Professor";
  echo "<br>Total de dias: 10";
}
else {
  echo "<br>Tipo de usuário: Aluno";
  echo "<br>Total de dias: 3";
}
  

?>