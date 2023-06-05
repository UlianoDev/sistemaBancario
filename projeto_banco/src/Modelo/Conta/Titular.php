<?php
namespace Gab\ProjetoBanco\Modelo\Conta;

use Gab\ProjetoBanco\Modelo\Usuario;
use Gab\ProjetoBanco\Modelo\Cpf;
use Gab\ProjetoBanco\Modelo\Endereco;

class Titular extends Usuario{

    private Endereco $endereco;

    public function __construct(string $nomeTitular, Cpf $cpfTitular, Endereco $enderecoTitular){
        parent::__construct($nomeTitular, $cpfTitular);
        $this->endereco = $enderecoTitular;

    }


}

