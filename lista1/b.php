<?php

$c1 = $_POST['prato'];
$c2 = $_POST['sobremesa'];
$c3 = $_POST['bebida'];

$total = $c1 + $c2 + $c3;

echo "Total de calorias consumidas: $total";


?>