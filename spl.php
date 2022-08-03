<?php 

$arquivosCursos = new SplFileObject('cursos.csv');

while(!$arquivosCursos->eof()){
    $linha = $arquivosCursos->fgetcsv(';');
    $conteudo = implode(" | ", $linha);
    echo utf8_encode($conteudo) . PHP_EOL;
}


$date = new DateTime();
$date->setTimestamp($arquivosCursos->getCTime());


echo $date->format('d/m/Y');