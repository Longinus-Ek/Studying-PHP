<?php

namespace App\Label;

class Contato
{

    private $email;

    public function __construct(string $email)
    {
        $this->email = $email;
        
    }

    public function getUsuario() : string
    {
        $posicao = strpos($this->email, '@');

        if($posicao === false){
            return "Usuario Inválido";
        }
        return substr($this->email, 0, $posicao);
    }

    public function getEmail() : string
    {
        return $this->email;
    }

}
