<?php
namespace Gab\ProjetoBanco\Modelo;

abstract class Usuario{
    use Getter;
    public string $nome;
    public Cpf $cpf;
    public function __construct(string $nome, Cpf $cpf){
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }
    public function getNome(){
        return $this->nome;
    }
        public function getCpf(){
        return $this->cpf;
    }
        final protected function validaNome($nomeParametro){
        if(strlen($nomeParametro) < 3){
            echo 'Nome com número de caracteres inválido';
            exit();
        }

    }
}