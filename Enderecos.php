<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Brusque', 'bairro', 'minha rua', '40');
$outroEndereco = new Endereco('SJB', 'eucentro', 'minha rua', '123');


echo $umEndereco->numero;

exit();
