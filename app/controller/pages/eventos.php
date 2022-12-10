<?php 

    namespace App\Controller\Pages;

    use \App\utils\view;
    use \App\model\entidade\empresa;

    class Eventos extends page{
        
        public static function getEventos(){
           

            $conteudo = view::render('pages/eventos',[
            ]);
            return parent::getPage('Eventos',$conteudo);
        }
    }
?>