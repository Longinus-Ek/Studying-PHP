<?php   

namespace App\Alura;

class Contato
{
    private $email;
    private $endereco;
    private $cep;

    public function __construct(string $email, string $endereco, string $cep)
    {
        $this->email = $email;
        if($this->validaEmail($email) !== false){
            $this->setEmail($email);
        } else {
            $this->setEmail("Email inválido, digite seu e-mail completo!");
        }

        $this->endereco = $endereco;
        $this->cep = $cep;
    }

    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }
    
    public function getUsuario(): string
    {
        $posicaoarroba = strpos($this->email, '@');
        
        if($posicaoarroba === false){
            return "Usuário Inválido, digite seu e-mail completo!";
        } else {
            return substr($this->email, 0, $posicaoarroba);
        }
    }    
    private function validaEmail(string $email) 
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);        
    }
    private function validaCep(string $cep)
    {
        $this->cep = $cep;
        if(strlen($cep) === 9){   
            if(strpos($cep, '-') === 5){
                return $this->cep = $cep;
            } else {
                $firstCep = substr($cep, 0, 5);
                $secondCep = substr($cep, 5);
                $newCep = $firstCep . '-' . $secondCep;
                return $newCep;
            }
        } else {
            $firstCep = substr($cep, 0, 5);
            $secondCep = substr($cep, 5);
            $newCep = $firstCep . '-' . $secondCep;
            return $newCep;
        }
    }
    
    public function getEmail() : string
    {
        return $this->email;
    }
    
    public function getEnderecoCep() :string
    {
        $endereco = $this->endereco;
        $cep = $this->validaCep($this->cep);
        
        if(strlen($cep) === 9){
            return implode(' - ', [$endereco, $cep]);
        } else{
            return "Digite um Cep válido";
        }
        
        
    }
    
        
         

}