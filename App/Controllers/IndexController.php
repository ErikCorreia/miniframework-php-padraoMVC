<?php

    namespace App\Controllers;

    class IndexController {
        public function index(){
            $dados = array('Tv', 'sofá', 'Cama');
            $this->render('index', $dados);
        }
        public function sobreNos(){
            $this->render('sobreNos');
        }

        public function render($view, $dados){
            $classeAtual = get_Class($this);
            str_replace('App\\Controllers\\', '', $classeAtual);
            echo $classeAtual;
            require_once "../App/Views/index/".$view.".phtml";
        }
    }

?>