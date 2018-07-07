<?php

if( isset ( $_GET ["carrosVend" ]))
	$carrosVendidos = $_GET ["carrosVend"];

if( isset ( $_GET ["valorVend" ]))
	$valorVendas = $_GET ["valorVend"];
	
if( isset ( $_GET ["salario" ]))
	$salarioFixo = $_GET ["salario"];
	
$salarioTotal = $salarioFixo + ($carrosVendidos * 50) + ($valorVendas * 0.05);


echo "<br>Salario Final: ".$salarioTotal;
?>