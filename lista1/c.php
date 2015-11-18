<?php

$v1 = array(1,2,3,4,5,6,7,8,9,10);
$v2 = array(1,2,3,4,5,6,7,8,9,10);
$v3 = array("+","/","*","*","+","-","/","*","+","-");
$i = 0;

for ($i = 0; $i < 10; $i++) {
  if ($v3[$i] == "+") {
    echo "<br>$v1[$i] + $v2[$i]: ";
    echo $v1[$i] + $v2[$i];
  }
  else if ($v3[$i] == "-") {
    echo "<br>$v1[$i] - $v2[$i]: "; 
    echo $v1[$i] - $v2[$i];
  }
  else if ($v3[$i] == "/") {
    echo "<br>$v1[$i] / $v2[$i]: "; 
    echo $v1[$i] / $v2[$i];
  }
  else if ($v3[$i] == "*") {
    echo "<br>$v1[$i] * $v2[$i]: "; 
    echo $v1[$i] * $v2[$i];
  }
}

?>