<?php


$idade = 18;
$name = 'vinicius';

echo "Você só pode entrar se tiver mais do que 18 anos\n";

if($idade >= 18 and $name == 'vinicius'){
    echo "Voce tem $idade anos. Então pode entrar!";

}else{
    echo "Voce tem $idade anos. Portanto não pode entrar!";
}
