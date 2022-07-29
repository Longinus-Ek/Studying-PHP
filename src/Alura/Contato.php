<?php   

namespace App\Alura;

class Contato
{
    private $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function getUsuario(): string
    {
        $posicaoarroba = strpos($this->email, '@');
        
        if($posicaoarroba === false){
            return "Email Inválido";
        } else {
            return substr($this->email, 0, $posicaoarroba);
        }

        

    }

}