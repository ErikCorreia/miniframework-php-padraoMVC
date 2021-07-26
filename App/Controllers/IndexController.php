<?php

    namespace App\Controllers;

    //recurssos do miniframework
    use MF\Controller\Action;
    use MF\Model\Container;

    //Models
   

    class IndexController extends Action{

        public function index(){
            $this->render('index');
        }

    }

?>