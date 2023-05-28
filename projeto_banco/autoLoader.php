<?php

spl_autoload_register(function (string $nomeCompletoClasse){
    $caminhoArquivo = str_replace('Gab\\ProjetoBanco\\Modelo','Modelo', $nomeCompletoClasse);

     $caminhoArquivo = str_replace('\\',DIRECTORY_SEPARATOR, $caminhoArquivo);
     $caminhoArquivo .= '.php';

     $nomeArquivo = basename($caminhoArquivo);
     $nomeArquivoMinusculo = strtolower($nomeArquivo);

     $caminhoArquivo = str_replace($nomeArquivo,$nomeArquivoMinusculo,$caminhoArquivo);

    //echo $caminhoArquivo . PHP_EOL;

    if($caminhoArquivo){
        require_once "$caminhoArquivo";
    }

});

?>