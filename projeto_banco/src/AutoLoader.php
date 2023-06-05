<?php

spl_autoload_register(function (string $nomeCompletoClasse){
    $caminhoArquivo = str_replace('Gab\\ProjetoBanco\\','', $nomeCompletoClasse);


     $caminhoArquivo = str_replace('\\',DIRECTORY_SEPARATOR, $caminhoArquivo);
     $caminhoArquivo .= '.php';

    // echo $caminhoArquivo . PHP_EOL;
    // exit();
     //$nomeArquivo = basename($caminhoArquivo);
     //$nomeArquivoMinusculo = strtolower($nomeArquivo);

     //$caminhoArquivo = str_replace($nomeArquivo,$nomeArquivoMinusculo,$caminhoArquivo);

    //echo $caminhoArquivo . PHP_EOL;

    if(file_exists($caminhoArquivo)){
        require_once "$caminhoArquivo";
    }

});

?>