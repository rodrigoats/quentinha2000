<?php
    include '../entity/Pedido.class.php';


    class PedidoDAO extends GenericDao{
        
        function __construct() {
            parent::__construct();
        }

        function cadastrarPedido($pedido){
            $arrayDadosPedido = array("usuario", $pedido->usuario->id,
                "data", $pedido->data, "valor", $pedido->valorTotal);
            
            $this->salvar("pedido", $arrayDadosPedido);
        }
        
        function listarPedidos(){
            $this->findAll("pedido");
        }
    }
?>