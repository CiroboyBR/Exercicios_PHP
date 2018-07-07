<?php

date_default_timezone_set('America/Sao_Paulo');
$date = date('H');
$hora = date('H');
$min = date('i');
$seg = date('s');
echo $hora."h:".$min."m:".$seg."s";

if ( $date < 12) {
	echo "Bom Dia!<br>";
	echo '<p style="color: green;">Bom dia!</p>';
}
else if ( $date >= 12 &&  $date < 18) {
	echo "Boa Tarde!<br>";
	echo '<p style="color: red;">Boa Tarde!</p>';
}
else if ( $date >= 18) {
	echo '<p style="color: blue;">Boa Noite!</p>';
}


?>
