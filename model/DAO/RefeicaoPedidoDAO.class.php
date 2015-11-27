<?php

    class RefeicaoPedidoDAO extends GenericDao{
        
        function __construct() {
            parent::__construct();
        }

        function cadastrarTipoRefeicao($idPedido, $idRefeicao) {
            $arrayDadosRefeicaoPedido = array("idpedido", $idPedido, "idrefeicao", $idRefeicao);
            
            $this->salvar("refeicaopedido", $arrayDadosRefeicaoPedido);
        }
    }
?>