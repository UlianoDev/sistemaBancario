<?php

require_once 'AutoLoader.php';
//require 'src/Modelo/Endereco.php';

use Gab\ProjetoBanco\Modelo\Usuario;
use Gab\ProjetoBanco\Modelo\Endereco;
use Gab\ProjetoBanco\Modelo\Cpf;
use Gab\ProjetoBanco\Modelo\Conta\Conta;
use Gab\ProjetoBanco\Modelo\Conta\ContaCorrente;
use Gab\ProjetoBanco\Modelo\Conta\ContaPoupanca;
use Gab\ProjetoBanco\Modelo\Conta\Titular;


$endereco = new Endereco('Rua A', '777','Bairro B','Chuvitiba');
$titular1 = new Titular('Isabela', new Cpf('123'), $endereco);
$titular2 = new Titular('Tazsmania',new Cpf('456'), $endereco);


$testeContaCorrente = new ContaCorrente($titular1, $endereco);
$testeContaCorrente->depositar(200);
$testeContaCorrente->sacar(100);
$testeContaPoupanca = new ContaPoupanca($titular1, $endereco);
$testeContaPoupanca->depositar(200);
$testeContaPoupanca->sacar(100);


//echo $controlador->recuperaTotal();
var_dump($testeContaCorrente);
//var_dump($umFuncionario);
# Por algum motivo, quando uma das contas possui o titular com nome < 3 caracteres, todas as outras variaveis nao funcionam;