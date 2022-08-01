<?php

spl_autoload_register(function (string $nomeComppletoDaClasse) {
    //Alura\Banco\Modelo\Endereco <- NOME COMPLETO
    //src/Modelo/endereco.php <- Nome que queremos
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeComppletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';
    if(file_exists($caminhoArquivo)){
        require_once $caminhoArquivo;
    }
});