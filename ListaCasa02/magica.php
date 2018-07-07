<?php
$a = 5;
if( isset ( $_GET ["a" ]))
	$a = $_GET ["a"];

$b = 4;
if( isset ( $_GET ["b" ]))
	$b = $_GET ["b"];

$c = -3;
for (;$a >$b;$b ++){
	$c += $a;
}
echo $c;
?>