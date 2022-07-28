<?php

function imprimeMensagem(string $mensagem)
{
    echo $mensagem . '<br>';
}

function sacar(array $conta, float $valor): array
{
    if($conta['saldo'] < $valor){
        imprimeMensagem("Você não pode sacar pois está sem dinheiro! Seu saldo é: " . $conta['saldo']);
    } else{
        $conta['saldo'] -= $valor;
    } return $conta;
}

function depositar(array $conta, float $valor): array
{
    if($valor > 0){
    $conta['saldo'] += $valor;
    } else {
        imprimeMensagem("O valor deve ser positivo!");
    }
    return $conta;
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
    
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;

    echo "<li>Titular: $titular Saldo: $saldo</li>";
}