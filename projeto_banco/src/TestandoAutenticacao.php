<?php

require 'autoLoader.php';
use Gab\ProjetoBanco\Modelo\Cpf;
use Gab\ProjetoBanco\Modelo\Funcionario\{EditorVideo,Funcionario,Gerente, Diretor, Desenvolvedor};
use Gab\ProjetoBanco\Servico\Autenticador;
$umaDiretora = new Diretor('Isabela', new Cpf('132.654.789.11'), 5000);
$umGerente = new Gerente('Gabriel', new Cpf('222.444.555.11'), 5000);
$autenticador = new Autenticador();

$autenticador->tentaLogin($umaDiretora,'1234');
$autenticador->tentaLogin($umGerente,'1234');

