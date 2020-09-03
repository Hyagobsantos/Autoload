<?php 

//funcao para realizar o autoload nas classes da mesmo diretorio(pasta)
function registra($carregar){

    if(file_exists($carregar.".php") === true){

        require_once($carregar.".php");

    }

}

spl_autoload_register("registra");
//funcao para realizar o autoload nas classes de outros diretorios(pastas) a cima usa-se o nome da pasta antes da concatenação com o directory_separator 
spl_autoload_register(function($carregar){

        if(file_exists("Classes" . DIRECTORY_SEPARATOR . $carregar . ".php") === true){

            require_once("Classes" . DIRECTORY_SEPARATOR . $carregar . ".php");

        }


});


//funçâo basica do autoload chamando o autoload apenas no mesmo diretorio(pasta)

function __autoload($carregar){

    require_once($carregar.".php");

}



$carro = new DelRey();
$carro->acelerar(80);



?>