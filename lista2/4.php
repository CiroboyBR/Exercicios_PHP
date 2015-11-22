<?php

  $v = $_POST['v'];
  

    echo "Total com 10% de desconto: " . ($v * 0.9);
    echo "<br>Valor da parcela 3x: " . number_format( ($v / 3), 2 );
    echo "<br>Comissão de 5% a vista do vendedor: " . ( (0.05) * ($v * 0.9) );
    echo "<br>Comissão de 5% a parcelado do vendedor: " . ( $v * 0.05 );
    
?>