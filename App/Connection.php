<?php

   namespace App;
//Função para fazer a conexão com o banco de dados
   Class Connection {
      public static function getDb() {
         try {
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
