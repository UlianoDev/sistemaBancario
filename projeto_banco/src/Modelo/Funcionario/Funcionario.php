<?php

namespace Gab\ProjetoBanco\Modelo\Funcionario;
use Gab\ProjetoBanco\Modelo\Usuario;
use Gab\ProjetoBanco\Modelo\Cpf;

//require_once 'usuario.php';
abstract class Funcionario extends Usuario{


        private float $salario;

    public function __construct(string $nomeFuncionario, Cpf $cpfFuncionario, float $salario){

        parent::__construct($nomeFuncionario, $cpfFuncionario);

        $this->salario = $salario;
    }

    public function getSalario(){
        return $this->salario;
    }
    abstract public function calculaBonificacao():float;

    
    public function recebeAumento(float $valorAumento){
        if($valorAumento < 0){
            echo "Aumento deve ser positivo";
            return;
        }
        $this->salario += $valorAumento;
    }
}