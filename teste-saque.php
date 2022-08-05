<?php

use Alura\Banco\Modelo\{CPF, Endereco, nomeCurtoException};
use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, SaldoInsuficienteException, Titular};

require_once 'autoload.php';
try{
$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-1'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);
} catch (nomeCurtoException $exception){
    echo "Nome muito curto, Digite um nome com mais de 5 letras!";
} catch (InvalidArgumentException $exception){
    echo "CPF Inválido!";
}

echo 'Nome: '.$conta->recuperaNomeTitular() . PHP_EOL;
echo 'CPF: '.$conta->recuperaCpfTitular();
// try{
// $conta->deposita(-500);
// } catch (InvalidArgumentException $exception) {
//     echo "O valor precisa ser positivo!" . PHP_EOL;
// }
// try{
// $conta->saca(600);
// } catch (SaldoInsuficienteException $exception){
//     echo "Você não tem saldo para realizr este saque." . PHP_EOL;
//     echo $exception->getMessage();
// }
// echo $conta->recuperaSaldo();
