<?php 

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor, EditorVideo};

$umFuncionario = new Desenvolvedor(
    'Erick Dias', 
    new CPF ('123.456.789-10'),
          1000
);

$umaFuncionaria = new Gerente(
    'Itala', 
    new CPF (
        '789.456.123-10'),
          3000
);

$Diretor = new Diretor(
    'Beatriz', 
    new CPF (
        '987.123.456-13'),
        5000
);

$EditorVideo = new EditorVideo(
    'Paulo', 
    new CPF (
        '456.123.123-14'),
        1500
);

$controlador = new ControladorDeBonificacoes();
$umFuncionario->sobeDeNivel();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($Diretor);
$controlador->adicionaBonificacaoDe($EditorVideo);

echo $controlador->recuperaTotal();