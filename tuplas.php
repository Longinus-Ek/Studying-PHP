<?php

$dados = ['Erick', 10, 23];

list($nome, $nota, $idade) = $dados; //Podendo ter essa sintaxe ou/
[$nomes, $nota, $idade] = $dados; //Podendo ter essa sintaxe///////


var_dump($nome, $nota, $idade);
