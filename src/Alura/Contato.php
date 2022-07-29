<?php   

namespace App\Alura;

class Contato
{
    private $email;
    private $endereco;
    private $cep;
    private $telefone;

    public function __construct(string $email, string $endereco, string $cep, string $telefone)
    {
        $this->email = $email;
        if($this->validaEmail($email) !== false){
            $this->setEmail($email);
        } else {
            $this->setEmail("Email inválido, digite seu e-mail completo!");
        }

        $this->endereco = $endereco;
        $this->cep = $cep;
        $this->telefone = $telefone;
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

    public function getTelefone() : string
    {
       return $this->validaTelefone($this->telefone);
    }
           
    private function validaTelefone (string $telefone) : string

    { 
        //4899940-2516
        $this->telefone = trim($telefone);
        if(strlen($telefone) == 12 && strpos($telefone, "-", 0) == 7){
            $ddd = substr($telefone, 0, 2);
            $telefone = substr($telefone, 2);
            return "(" . $ddd . ")" . $telefone;
        } else if (strlen($telefone) == 11){
            $ddd = substr($telefone, 0, 2);
            $telefone1 = substr($telefone, 2, 5);
            $telefone2 = substr($telefone, 7);
            return "(" . $ddd . ")" . $telefone1 . "-" . $telefone2; 
        } else if (strlen($telefone) == 10 && strpos($telefone, "-", 0) == 6){
            $ddd = substr($telefone, 0, 2);
            $telefone = substr($telefone, 2);
            return "(" . $ddd . ")" . $telefone;
        } else if (strlen($telefone) == 9){
            $telefone1 = substr($telefone, 0, 5);
            $telefone2 = substr($telefone, 5);
            return $telefone1 . "-" . $telefone2;
        } else if (strlen($telefone) == 8){
            $telefone1 = substr($telefone, 0, 4);
            $telefone2 = substr($telefone, 4);
            return $telefone1 . "-" . $telefone2;
        } 
        return "Telefone Inválido";
    }
}