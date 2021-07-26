<?php

    namespace App\Controllers;

    use MF\Controller\Action;
    use App\connection;
    use App\Models\Produto;

    class IndexController extends Action{

        public function index(){
            //instância de conexão
            //Chama o metodo getDb da classe connection definida como static em "App\connection", que faz a conexão com o banco de dados
            $connect = Connection::getDb();

           //instancia modelo com o parametro que fez a conexão
            $produto = new Produto($connect);
            $produtos = $produto->getProdutos();
            $this->view->dados = $produtos;

            $this->render('index');
        }

        public function sobreNos(){
            $this->render('sobreNos');
        }
    }

?>