<?php 

namespace Alura\Banco\Modelo;

use DomainException;

class nomeCurtoException extends DomainException
{
    public function __construct()
    {   
       $mensagem = "Nome muito curto, digite um nome maior!";
       parent::__construct($mensagem);
    }
}