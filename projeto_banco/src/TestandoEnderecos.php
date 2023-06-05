<?php
require 'autoLoader.php';
use Gab\ProjetoBanco\Modelo\Endereco;
use Gab\ProjetoBanco\Modelo\Usuario;
use Gab\ProjetoBanco\Modelo\Cpf;
use Gab\ProjetoBanco\Modelo\Conta\Titular;
$endereco1 = new Endereco('Rua A', '777','Bairro B','Chuvitiba');
$endereco2 = new Endereco('Rua Alagoinha', '666','Alagoao','Alagoas');
$titular2 = new Titular('Tazsmania',new Cpf('456'), $endereco1);
echo $endereco1;
echo $endereco2;
echo $endereco1->rua;
echo $titular2->nome;