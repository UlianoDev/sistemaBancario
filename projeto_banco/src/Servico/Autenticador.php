<?php

namespace Gab\ProjetoBanco\Servico;
use Gab\ProjetoBanco\Modelo\Autenticavel;
class Autenticador{

    public function tentaLogin(Autenticavel $autenticavel, string $senha): void{
        if($autenticavel->nome){
            $nome = $autenticavel->nome;
        } else{
            $nome = 'Não_Identificado';
        }
        if ($autenticavel->podeAutenticar($senha)){
            echo "Usuário ($nome) autenticado e logado" . PHP_EOL;
                
        }else{
        echo "Usuário ($nome) não atenticado, senha incorreta" . PHP_EOL;}
    }
}