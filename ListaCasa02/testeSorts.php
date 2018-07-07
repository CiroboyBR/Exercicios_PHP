<?php
$x [2] = 2;
$x [3] = 3;
$x [4] = 4;
$x [1] = 1;
foreach ($x as $k => $v)
echo $k." - ".$v."<br >";

echo "<br>Sort<br>";

sort($x);
foreach ($x as $k => $v)
echo $k." - ".$v."<br >";

echo "<br>Rsort<br>";

rsort($x);
foreach ($x as $k => $v)
echo $k." - ".$v."<br >";

?>