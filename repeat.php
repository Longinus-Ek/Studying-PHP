<?php

// //Enquanto
// $i = 0;
// while ($i <= 15){
//     echo "#$i" . PHP_EOL;
//     $i++;
// }

// //for

// for ($j = 0; $j <=15; $j++){
//     echo "&$j" . PHP_EOL;
// }

//Pulando interações com continue 

for ($j = 0; $j <=15; $j++){
    if($j == 13){
        continue;
    }
    echo "&$j" . PHP_EOL;
}

//Parando interações com break 

for ($k = 0; $k <=15; $k++){
    if($k == 13){
        break;
    }
    echo "&$k" . PHP_EOL;
}