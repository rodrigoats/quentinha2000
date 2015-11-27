<?php

    include_once 'GenericDao.class.php';
    class RefeicaoDAO extends GenericDao{
        
        function __construct() {
            parent::__construct();
        }

        function cadastrarRefeicao($refeicao) {
            // $refeicao = new Refeicao();
            // $refeicao = serialize($ref);
            $arrayDadosRefeicao = array("nome", $refeicao->getNome());
             $this->salvar("refeicao", $arrayDadosRefeicao);
        }
    }
?>