<?php

$data1 = mktime(0,0,0,02,28,2016);
$data2 = mktime(0,0,0,03,04,2016);

$dif = ( $data2 - $data1 ) / (60 * 60 * 24);

echo $dif;

?>
