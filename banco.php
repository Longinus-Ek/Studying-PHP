<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;




$endereco = new Endereco('Sao joão batista', 'Kalbarras', 'Presidente Ribeiro Silva', '403');
$vinicius = new Conta (new Titular(new CPF('123.456.789-10'), 'Erick Dias', $endereco));

$vinicius->deposita(500);
$vinicius->saca(300);

echo $vinicius->recuperaNomeTitular() . PHP_EOL;
echo $vinicius->recuperaCpfTitular() . PHP_EOL;
echo $vinicius->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);

echo "Numero de contas ativas: " .Conta::recuperaNumeroDeContas();
