<?php

$dados = [
   'nome' => 'Erick', 
    'nota' => 10, 
    'idade' => 23
];

extract($dados); //Só pode fazer extract de dados que você criou ou utiliza na logica, nunca em dados extraidos de outro lugar

var_dump($nome, $nota, $idade);

var_dump(compact('nome', 'nota', 'idade')); //Compact associa variáveis às chaves passadas dentro da função



