<?php

$tabuada = 7.2;

echo "Tabuada do: $tabuada" . PHP_EOL;

for($i = 0;$i <10; $i++){
    $num = $i * $tabuada;
    
    echo "$i X $tabuada = $num" . PHP_EOL;
}