<?php

$array = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
];

function ordenaNotas(array $nota1, array $nota2):int
{
   return $nota1['nota'] <=> $nota2['nota'];
}


usort($array, 'ordenaNotas');

var_dump($array);

