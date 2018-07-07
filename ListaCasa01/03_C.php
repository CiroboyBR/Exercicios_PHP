<?php

$str = "Comentários do Facebook não estão disponíveis no Google";

echo "String normal: $str<br>";

$str = str_replace("Facebook", "Grp", $str);

$str = str_replace("Google", "Facebook", $str);

$str = str_replace("Grp", "Google", $str);

echo "String trocada: $str<br>";




?>