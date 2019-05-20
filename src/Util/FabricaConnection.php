<?php
class FabricaConnection{
  
   public static function conectar(){
        try{
            $conexao = new PDO("mysql:host=10.150.150.30;dbname=divida_ativa","root","creadf");
            return $conexao;
            
        }catch(PDOException $erro){
            echo "Erro na conexao com o banco de dados".$erro->getMessage();

        }catch(Exception $erro){
            echo "Erro".$erro->getMessage();
            
        }
    }

}


?>
