<?php
namespace Gab\ProjetoBanco\Modelo\Funcionario;
use Gab\ProjetoBanco\Modelo\Funcionario\Funcionario;
use Gab\ProjetoBanco\Modelo\Autenticavel;
class Diretor extends Funcionario implements Autenticavel{

    private float $senha;
    public function calculaBonificacao():float{
        return $this->getSalario()  * 1;
    }
    public function podeAutenticar($senha):bool{

        return $senha === '1234';
    }

}