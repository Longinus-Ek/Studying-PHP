<?php
$contasCorrentes = [
    12345678910 => [
        'titular' => 'Erick',
        'saldo' => 10000
    ],
    123245678911 => [
        'titular' => 'Maria',
        'saldo' => 90000
    ],
    12345678912 => [
        'titular' => 'Jose',
        'saldo' => 900
    ]
];

//Utilizando foreach no php

foreach ($contasCorrentes as $chave => $conteudoChave) {
       echo "$chave pertence a " . $contasCorrentes[$chave]['titular'] . PHP_EOL; 
}