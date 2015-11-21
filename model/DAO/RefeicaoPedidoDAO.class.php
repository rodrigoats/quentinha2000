<?php

    class RefeicaoPedidoDAO extends GenericDao{
        
        function __construct() {
            parent::__construct();
        }

        function cadastrarTipoRefeicao($idPedido, $idRefeicao) {
            $arrayDadosRefeicaoPedido = array("idPedido", $idPedido, "idRefeicao;", $idRefeicao);
            
            $this->salvar("refeicaopedido", $arrayDadosRefeicaoPedido);
        }
    }
?>