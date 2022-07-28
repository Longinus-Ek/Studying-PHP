<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Erick Dias',
        'saldo' => 1700
    ],
    '123.456.689-11' => [
        'titular' => 'Carlos Imhof',
        'saldo' => 7000
    ],
    '123.256.789-12' => [
        'titular' => 'Claudio Nery Junior',
        'saldo' => 5000
    ]
];

// $contasCorrentes['123.456.789-10'] = sacar(
//     $contasCorrentes['123.456.789-10'],
//     0
// );

// $contasCorrentes['123.256.789-12'] = depositar(
//     $contasCorrentes['123.256.789-12'],
//     0
// );

unset ($contasCorrentes['123.456.689-11']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <ul>
        <dl>
            <?php foreach($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
            </dt>
            <dd>
                 Saldo: <?= "R$ " . number_format($conta['saldo'], 2, ',', ''); ?>
            </dd>
            <?php } ?>
        </dl>    
</body>
</html>