<?php
namespace Gab\ProjetoBanco\Modelo;
trait Getter{

        public function __get(string $atributo):string{
        $metodo = 'get' . ucfirst($atributo);
       return  $this->$metodo()  . PHP_EOL; 
    }
}