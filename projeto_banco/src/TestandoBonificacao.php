<?php

require_once 'AutoLoader.php';
use Gab\ProjetoBanco\Modelo\Cpf;
use Gab\ProjetoBanco\Servico\ControladorDeBonificacoes;
use Gab\ProjetoBanco\Modelo\Funcionario\{EditorVideo,Funcionario,Gerente, Diretor, Desenvolvedor};

$umaDiretora = new Diretor('lalaala', new Cpf('132.654.789.11'), 5000);
$umaGerente = new Gerente('Isabela',new Cpf('789.456.123-10'),2000);
$umDesenvolvedor = new Gerente('Gabriel',new Cpf('123.456.789-10'),1000);
$umEditorDeVideo = new EditorVideo('lulululu', new CPf('312.546.879-12'), 1000);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umaGerente);
$controlador->adicionaBonificacaoDe($umDesenvolvedor);
$controlador->adicionaBonificacaoDe($umaDiretora);
$controlador->adicionaBonificacaoDe($umEditorDeVideo);

var_dump($controlador);