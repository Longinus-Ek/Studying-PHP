<?php 
// //Utilizado para ler arquivos zip
// echo file_get_contents('zip://lista-cursos.zip#lista-cursos.txt');

//Utilizado para ler arquivos zip com senha
$contexto = stream_context_create([
    'zip' => [
        'password' => '123456'
    ]
]);

echo file_get_contents(
    'zip://arquivos.zip#lista-cursos.txt',
    false,
    $contexto);


