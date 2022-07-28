<?php
$notas = [
    'Ana'=> 10,
    'joão' => null,
    'carlos' => 9,
    'pedro' => 6,
   
];

//Ordenação
// arsort($notas); //Decrescente pela chave
// asort($notas); //Crescente pela chave
// ksort($notas); //Decrescente pelo valor
// krsort($notas); //Crescente pelo valor
// var_dump($notas); //Exibe uma array com todos os dados associados

array_key_exists('joão', $notas);

echo "Ana fez a prova" . PHP_EOL;

var_dump(isset($notas['Ana']));//Diferença entre maiusculo, minusculo e acentos

echo "Alguém tirou 10?" . PHP_EOL;

var_dump(in_array(10, $notas, true));

echo "Quem tirou 10?" . PHP_EOL;

echo array_search(10, $notas);


// array_key_exists() = verifica se a chave existe
// in_array() = verifica se o valor existe
// isset() = verifica se a chave existe e não é nula


