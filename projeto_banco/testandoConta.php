<?php

require_once 'autoLoader.php';
//require 'Modelo/Conta/conta.php';
//require 'Modelo/endereco.php';
//require 'Modelo/usuario.php';
//require 'Modelo/funcionario.php';
//require 'Modelo/Conta/titular.php';
//require 'Modelo/cpf.php';

use Gab\ProjetoBanco\Modelo\Usuario;
use Gab\ProjetoBanco\Modelo\Endereco;
use Gab\ProjetoBanco\Modelo\Cpf;
use Gab\ProjetoBanco\Modelo\Conta\Conta;
use Gab\ProjetoBanco\Modelo\Conta\Titular;
use Gab\ProjetoBanco\Modelo\Funcionario;


$endereco = new Endereco('Rua A', '297','Santa Felicidade','Curitiba');
$titular1 = new Titular('Isabela', new Cpf('123'), $endereco);
$titular2 = new Titular('Tazsmania',new Cpf('456'), $endereco);
$primeiroTeste = new Conta($titular1, $endereco);
$segundoTeste = new Conta($titular2, $endereco);

$umFuncionario = new Funcionario('Gabriel',new Cpf('123.456.789-10'),'Desenvolvedor');
var_dump($titular1);
//var_dump($umFuncionario);
# Por algum motivo, quando uma das contas possui o titular com nome < 3 caracteres, todas as outras variaveis nao funcionam;