<?php
/*
Ao executar os códigos a seguir, escreva como ficará o resultado
na tela do navegador.
*/
//Letra a
$data = date('d-m-Y');
echo "Data = $data<br>";
//Letra b
$jan1 = mktime(0,0,0,1,31, 2014);
$jan1_30 = mktime(0, 30, 0, 1, 31, 2014);
$dif = $jan1_30 - $jan1;
echo $dif;
//Letra c
$msg = "<br>Olá, mundo!";
echo lcfirst($msg)."<br>";
echo ucfirst($msg)."<br>";
echo ucwords($msg)."<br>";
echo strtolower($msg)."<br>";
echo strtoupper($msg)."<br>";
//Letra d
$msg = " Cheio de espaços ";
echo ltrim($msg)."<br>";
echo rtrim($msg)."<br>";
echo trim($msg)."<br>";
//Letra e
$busca = "nome";
$troca = "Marinalva";
$frase = "E aí, nome!";
$msg = str_replace($busca, $troca, $frase);
echo $msg;
//Letra f
$msg = "Oi, como foi seu dia?";
echo strlen($msg)."<br>";
echo substr_count($msg, 'oi');
//Letra g
$msg = "abcdefghijklmnopqrstuvwxyz";
echo substr($msg, 0, 1)."<br>";
echo substr($msg, 3, 5)."<br>";
echo substr($msg, 10, -2)."<br>";
echo substr($msg, strlen($msg)-2, 1);
?>