<?php

    class RefeicaoBO{
        
        function listarRefeicoes(){
            
            $refeicao = new RefeicaoDAO();
            
            return $refeicao->findAll("refeicao");
        }
        
        function getRefeicaoById($id) {
            
            $sql = "SELECT * FROM refeicao WHERE id = " . $id;
            
            return $this->conn->query($sql);
        }
    }
?>