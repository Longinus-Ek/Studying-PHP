<?php

use App\Alura\contato;
use App\Alura\usuario;

require 'autoload.php';

$usuario = new usuario($_POST['nome'], $_POST['senha'], $_POST['genero']);
$contato = new contato($_POST['email'], $_POST['endereco'], $_POST['cep'], $_POST['telefone']);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Curso Strings</title>
</head>
<body>

<div class="mx-5 my-5">
<h1>Cadastro feito com sucesso.</h1>
<p><?php echo htmlspecialchars($usuario->getTratamento()); ?>, seguem os dados de sua conta:</p>
<ul class="list-group">
    <li class="list-group-item">Primeiro nome: <?php echo htmlspecialchars($usuario->getNome()); ?></li class="list-group-item">
    <li class="list-group-item">Sobrenome: <?php echo htmlspecialchars($usuario->getSobrenome()); ?></li class="list-group-item">
    <li class="list-group-item">Usuário: <?php echo htmlspecialchars($contato->getUsuario()); ?> </li class="list-group-item">
    <li class="list-group-item">Senha: <?php echo htmlspecialchars($usuario->getSenha()); ?> </li class="list-group-item">
    <li class="list-group-item">Telefone: <?php echo htmlspecialchars($contato->getTelefone()); ?></li class="list-group-item">
    <li class="list-group-item">Email: <?php echo htmlspecialchars($contato->getEmail()); ?></li class="list-group-item">
    <li class="list-group-item">Endereço: <?php echo htmlspecialchars($contato->getEnderecoCep()); ?> </li class="list-group-item">
</ul>
</div>
</body>
</html>