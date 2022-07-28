<?php
$alunos2022 = [
    'Ana',
    'joão',
    'carlos',
    'pedro',
    'jonny'
];

$novosAlunos = [
    'andre',
    'vinicius',
    'leandro',
    'beatriz'
];




// $alunos2022 = array_merge($alunos2022, $novosAlunos); //Juntando arrays

$alunos2023 = [...$alunos2022, ...$novosAlunos]; //Desempacotando arrays

//Adicionando elementos em uma array com php

array_push($alunos2022, 'jose', 'erineu'); //Adicionar vários arrays ao mesmo tempo

$alunos2022[] = 'luiz'; // setando manualmente

array_unshift($alunos2022, 'stephane'); //Adicionando na frente da array

echo array_shift($alunos2022) . PHP_EOL; //remove o primeiro elemento da array e retorna ele

echo array_pop($alunos2022) . PHP_EOL;

var_dump($alunos2022);