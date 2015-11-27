<?php
    include 'model/DAO/RefeicaoDAO.class.php';
    
    class RefeicaoBO{
        
        function listarRefeicoes(){
            
            $refeicao = new RefeicaoDAO();
            
            return $refeicao->findAll("refeicao");
        }
        
        function getRefeicaoById($id) {
            $refeicao = new RefeicaoDAO();
            $sql = "SELECT * FROM refeicao WHERE id = " . $id;
            $retorno = $refeicao->conn->query($sql);

           if($retorno)
            foreach ($retorno as $value) {
                $refeicao = new Refeicao();
                $refeicao->setId($value['id']);
                $refeicao->setNome($value['nome']);
                $refeicao->setTipoRefeicao($value['tiporefeicao']);
                $refeicao->setValor($value['valor']);

                return $refeicao;
            }
        }
    }
?>