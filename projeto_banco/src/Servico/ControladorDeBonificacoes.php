<?php
//namespace use Gab\ProjetoBanco/Servico;
namespace Gab\ProjetoBanco\Servico;
use Gab\ProjetoBanco\Modelo\Funcionario\{Funcionario,Gerente, Diretor, Desenvolvedor};

class ControladorDeBonificacoes{
    private $totalBonificacao = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario){
        $this->totalBonificacao += $funcionario->calculaBonificacao();
    }
    public function getTotal():float{
        return $this->totalBonificacoes;
    }
}   

?>