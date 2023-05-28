<?php

namespace Gab\ProjetoBanco\Modelo;
use Gab\ProjetoBanco\Modelo\Usuario;
use Gab\ProjetoBanco\Modelo\Cpf;

//require_once 'usuario.php';
class Funcionario extends Usuario{

        private string $cargo;

    public function __construct(string $nomeFuncionario, Cpf $cpfFuncionario, string $cargo){

        parent::__construct($nomeFuncionario, $cpfFuncionario);
        $this->cargo = $cargo;
    }
    public function getCargo(){
        return $this->cargo;
    }
}