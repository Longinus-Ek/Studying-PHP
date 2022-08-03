<?php 

require 'meuFiltro.php';

$arquivo = fopen('lista-cursos.txt', 'r');

stream_filter_register('alura.partes', MeuFiltro::class);
stream_filter_append($arquivo, 'alura.partes');

$conteudo = fread($arquivo, filesize('lista-cursos.txt'));

echo $conteudo;