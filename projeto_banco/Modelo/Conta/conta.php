<?php

namespace Gab\ProjetoBanco\Modelo\Conta;
use Gab\ProjetoBanco\Modelo\Conta\Titular;
use Gab\ProjetoBanco\Modelo\Endereco;
class Conta{

    private Titular $titular;
    private Endereco $endereco;
    private float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular, Endereco $endereco){
        $this->titular = $titular;
        $this->endereco = $endereco;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }
        
        public function __destruct(){
            if(self::$numeroDeContas > 2){
                self::$numeroDeContas--;
            }
        }

        public function getTitular(){
            return $this->titular;
        }
        public function getEndereco(){
            return $this->endereco;
        }
    public function sacar(float $valorASacar){
        if($this->saldo < $valorASacar){
            echo 'Saldo insuficiente';
            exit();
        }
        $this->saldo -= $valorASacar;
    }
    public function depositar(float $valorADepositar){
        $this->saldo += $valorADepositar;
    }
    public function transferir(float $valorATransferir, $contaDestino){
        if($this->saldo < $valorATransferir){
            echo 'Saldo Insuficiente';
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
    public static function buscaNumeroDeContas(): int{
        return self::$numeroDeContas;
    }

}
?>