<?php

namespace Gab\ProjetoBanco\Modelo\Funcionario;
use Gab\ProjetoBanco\Modelo\Funcionario\Funcionario;
use Gab\ProjetoBanco\Modelo\Autenticavel;
class Gerente extends Funcionario implements Autenticavel{
    public function calculaBonificacao():float{
        return $this->getSalario() * 0.5;
    }
        public function podeAutenticar($senha):bool{

        return $senha === '321';
    }
}