<?php

$num = array(10,2,3,6,5,43,20,3,66,3,0);

$maior = $num[1];
$menor = $num[1];

for ($i = 0; $i < 11; $i++) {
    if ($num[$i] < $menor){
        $menor = $num[$i];
    }
    if ($num[$i] > $maior) {
        $maior = $num[$i];
    }
}

echo "Maior: "."$maior"."<br>";
echo "Menor: "."$menor"."<br>";
?>
