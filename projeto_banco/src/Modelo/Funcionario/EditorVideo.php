<?php

namespace Gab\ProjetoBanco\Modelo\Funcionario;
use Gab\ProjetoBanco\Modelo\Funcionario\Funcionario;

class EditorVideo extends Funcionario{

    public function calculaBonificacao():float{
        return 600;
    }
}