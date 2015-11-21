<?php

    class RefeicaoDAO extends GenericDao{
        
        function __construct() {
            parent::__construct();
        }

        function cadastrarRefeicao($refeicao) {
            $arrayDadosRefeicao = array("nome", $refeicao->nome, "tiporefeicao", $refeicao->tipoRefeicao->id);
            
            $this->salvar("refeicao", $arrayDadosRefeicao);
        }
    }
?>