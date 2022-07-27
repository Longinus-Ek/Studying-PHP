<?php

$altura = 1.65; //
$peso = 60.5; //kgs

$imc = round(($peso / $altura**2), 2);


echo "O seu IMC é: $imc. Voce está com o IMC ";

if($imc < 18.5){
    echo "abaixo";
} else if($imc < 25){
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado";