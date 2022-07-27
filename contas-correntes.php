<?php

$conta1 = [
    'titular' => 'Erick',
    'saldo' => 10000
];
$conta2 = [
    'titular' => 'Maria',
    'saldo' => 90000
];
$conta3 = [
    'titular' => 'Jose',
    'saldo' => 900
];

$contasCorrentes = [$conta1, $conta2, $conta3];

//Acessando dados com indices declarados (Arrays associativos)

echo $conta2['titular'];


