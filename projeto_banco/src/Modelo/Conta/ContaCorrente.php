<?php
namespace Gab\ProjetoBanco\Modelo\Conta;
use Gab\ProjetoBanco\Modelo\Conta\Titular;
use Gab\ProjetoBanco\Modelo\Endereco;

class ContaCorrente extends Conta{
   protected function valorTarifa():float{
    return 0.05;
   }

}


?>