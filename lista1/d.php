<?php

$N = array($_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['n4'], $_POST['n5'], $_POST['n6'], $_POST['n7'], $_POST['n8'], $_POST['n9'], $_POST['n10'], $_POST['n11'], $_POST['n12'], $_POST['n13'], $_POST['n14'], $_POST['n15'], $_POST['n16'], $_POST['n17'], $_POST['n18'], $_POST['n19'], $_POST['n20']);

$i = 0;
$menor = $N[0];
$maior = $N[0];
$pmen = 0;
$pmai = 0;

  for ($i = 1; $i < 20; $i++) {
    if ($N[$i] > $maior) {
      $maior = $N[$i];
      $pmai = $i;
    }
    
    if ($N[$i] < $menor) {
      $menor = $N[$i];
      $pmen = $i;
    }
  }

  echo "O menor elemento é: $menor, e sua posição no vetor é: $pmen ";
  echo "<br>O maior elemento é: $maior, e sua posição no vetor é: $pmai ";

?>