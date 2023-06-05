<?php

namespace Gab\ProjetoBanco\Modelo;

interface  Autenticavel{
    public function podeAutenticar(string $senha):bool;
}