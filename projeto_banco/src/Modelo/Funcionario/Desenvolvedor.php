<?php
namespace Gab\ProjetoBanco\Modelo\Funcionario;
use Gab\ProjetoBanco\Modelo\Funcionario\Funcionario;
class Desenvolvedor extends Funcionario{
    public function calculaBonificacao():float{
        return $this->salario * 0.5;
    }
    public function sobeDeCargo(){
        return  $this->recebeAumento($this->getSalario()  * 0.75);
    }
}