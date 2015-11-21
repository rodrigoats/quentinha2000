<?php
    class GenericDao implements InterfaceDao{
        private $conn;
        
        function __construct() {
            $this->conn = new PDO('mysql:host=localhost;dbname=sistema','root','unipe');
        }

        function salvar($tabela, $arrayObj){
            $sql = "INSERT INTO ". $tabela;
            
            for($i=0; $i<=count($arrayObj); $i++) {
                
                $sql = $sql . " (" . $arrayObj[$i] . ") VALUES ('" . $arrayObj[$i++] . "')";
            }
            
            return $this->conn->exec($sql);
        }
        
        function findAll($tabela) {
            
            $sql = "SELECT * FROM " . $tabela;
            
            return $this->conn->query($sql);
        }
    }
?>