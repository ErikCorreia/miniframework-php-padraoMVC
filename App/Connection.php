<?php

   namespace App;
//Função para fazer a conexão com o banco de dados
   Class Connection {
      public static function getDb() {
         try {
            //a variavel responsavel pela conexão deve ser alteradas de acordo com o banco de dados da aplicação, alterando o "host" e "dbname"
            $Connect = new \PDO(
               "mysql:host=localhost; dbname=mvc; charset=utf8",
               //usuario
               "root",
               //senha
               ""
            );
            return $Connect;

         } catch (\PDOException $e) {
            //fazer tratativas de erros 
         }
      }
   }

?>
