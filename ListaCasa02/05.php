<?php

if( isset ( $_GET ["qtd" ]))
	$quantidade = $_GET ["qtd"];

if($quantidade < 12)
	$valorFinal = $quantidade * 1.3;
else
	$valorFinal = $quantidade * 1.0;

echo "<br>Valor total da compra: ".$valorFinal;
?>