<?php

  $VB = $_POST['VB'];
  $VA = $_POST['VA'];
  
  $tmp = $VA;
  $VA = $VB;
  $VB = $tmp;

    echo "VA: $VA <br> ";
    echo "VB: $VB";

?>