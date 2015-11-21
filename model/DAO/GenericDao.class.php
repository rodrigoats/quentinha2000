<?php
    include 'InterfaceDao.class.php';

    class GenericDao implements InterfaceDao{
        var $conn;
        
        function __construct() {
            $this->conn = new PDO('mysql:host=localhost;dbname=sistema','root','root');
        }

        function salvar($tabela, $arrayObj){
            $sql = "INSERT INTO ". $tabela;
            
            for($i=0; $i<=count($arrayObj); $i++) {
                
                $sql = $sql . " (" . $arrayObj[$i] . ") VALUES ('" . $arrayObj[$i++] . "')";
            }
            
            $this->conn->exec($sql);
        }
        
        function findAll($tabela) {
            
            $sql = "SELECT * FROM " . $tabela;
            
            $retorno = $this->conn->query($sql);
            return $retorno;
        }
    }
?>