<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$vinicius = new Conta (new Titular(new CPF('123.456.789-10'), 'Vinicius Dias'));

$vinicius->deposita(500);
$vinicius->saca(300);

echo $vinicius->recuperaNomeTitular() . PHP_EOL;
echo $vinicius->recuperaCpfTitular() . PHP_EOL;
echo $vinicius->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia');
$segundaConta = new Conta($patricia);


$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg'));
unset($segundaConta);
echo "Numero de contas ativas: " .Conta::recuperaNumeroDeContas();
