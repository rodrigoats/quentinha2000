<?php
    include_once 'InterfaceDao.class.php';

    class GenericDao implements InterfaceDao{
        var $conn;
        
        function __construct() {
            $this->conn = new PDO('mysql:host=localhost;dbname=sistema','root','root');
        }

        function salvar($tabela, $arrayObj){

            $sql = "INSERT INTO `". $tabela."`";

            $columns = "";
            $values = "";
           
            $int = 0;
            
            do{

                         
                $columns .= "`".$arrayObj[$int]."`";                

                if($int != count($arrayObj) - 2)
                    $columns .=", ";
                $int++;
                
                if(is_int($arrayObj[$int]) || is_float($arrayObj[$int])){
                    $values .= $arrayObj[$int];
                }
                else{
                    $values .= "'".$arrayObj[$int]."'";
                }

                if($int != count($arrayObj) - 1)
                    $values .=", ";
                $int++;
          

            }while($int != count($arrayObj));


            $sql = $sql . " (" . $columns . ") VALUES (" . $values . ")";
            echo $sql;
            $this->conn->exec($sql);
            return $this->conn->lastInsertId();
        }
        
        function findAll($tabela) {
            
            $sql = "SELECT * FROM " . $tabela;
            
            $retorno = $this->conn->query($sql);
            return $retorno;
        }
    }
?>