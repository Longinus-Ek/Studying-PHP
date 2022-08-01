<?php

class Conta
{
    private  $cpfTitular;
    private  $nomeTitular;
    private  $saldo = 0;

    public function saca(float $valorASacar) : void{
        if($valorASacar > $this->saldo){
            echo "Saldo Indisponível";
            return;
        } 
    $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar) : void{
        if($valorADepositar < 0){
            echo "Valor precisa ser positivo";
            return;   
        }    
    $this->saldo += $valorADepositar;    
    }
    public function transfere(Conta $contaDestino, float $valorATransferir) : void{
        if($valorATransferir > $this->saldo){ 
            echo "Você não tem saldo suficiente";
            return;
        }   
    $this->saca($valorATransferir); 
    $contaDestino->deposita($valorATransferir);
    }
    
    public function defineCpf (string $cpf) : void{
        $this->cpfTitular = $cpf;
    }
    public function defineNome (string $nome) : void{
        $this->nomeTitular = $nome;
    }
    public function recuperaSaldo() : float{
        return $this->saldo;
    }
    public function recuperaCpfTitular() : string {
        return $this->cpfTitular;
    }
    public function recuperaNomeTitular() : string {
        return $this->nomeTitular;
    }
}