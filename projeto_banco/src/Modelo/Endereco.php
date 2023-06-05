<?php

namespace Gab\ProjetoBanco\Modelo;

final class Endereco{
    use Getter;
    private string $rua;
    private string $numero;
    private string $bairro;
    private string $cidade;
    private Endereco $endereco;

    public function __construct(string $rua, string $numero, string $bairro, string $cidade){

        $this->rua = $rua;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        

    }
    public function __toString(): string {
        return "Rua {$this->rua}, {$this->numero} - Bairro: {$this->bairro}, Cidade: {$this->cidade}" . PHP_EOL;
    }

    public function getRua(){
        return $this->rua;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function getCidade(){
        return $this->cidade;
    }

}