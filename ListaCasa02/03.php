<?php

if( isset ( $_GET ["custoFab" ]))
	$custoFabrica = $_GET ["custoFab"];
	
	$custoFinal = ($custoFabrica * 1.28) * 1.45;

echo "<br>Custo da Fábrica: ".$custoFabrica;
echo "<br>Custo Final: ".$custoFinal;
?>