<?php

    namespace App\Models;

    class Produto {
        protected $db;
        //bug -> o parametro "$db" deveria ser tipado como "\PDO" *******RESOLVER BUG**********
        public function __construct(\PDO $db){
            $this->db = $db;
        }

        public function getProdutos(){

            $query = "select id, descricao, preco from tb_produtos";
            return $this->db->query($query)->fetchAll();
        }
    }

?>