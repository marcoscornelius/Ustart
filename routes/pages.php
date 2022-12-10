<?php 

use \App\http\response;
use \App\controller\pages;

    // Pode incluir varias rotas para o mesmo lugar.
    $router->get('/' ,[ 
        function(){
            return new response(200,pages\home::getHome());
        }
    ]);
    
    // Rota diferente porém o response envia para o mesmo lugar.
    // $router->get('/teste_rota' ,[ 
    //     function(){
    //         return new response(200,pages\home::getHome());
    //     }
    // ]);

    $router->get('/eventos' ,[ 
        function(){
            return new response(200,pages\eventos::getEventos());
        }
    ]);

    $router->get('/sobre' ,[ 
        function(){
            return new response(200,pages\sobre::getSobre());
        }
    ]);

    $router->get('/inscricoes' ,[ 
        function(){
            return new response(200,pages\inscricoes::getInscricoes());
        }
    ]);
    // Inserir os dados
    $router->post('/inscricoes' ,[ 
        function($request){
            // echo '<pre>';
            // print_r($request);
            // echo '</pre>';
            // exit();
            return new response(200,pages\inscricoes::inserir_inscricoes($request));
        }
    ]);

?>