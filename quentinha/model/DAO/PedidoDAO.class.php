<?php
    include '../entity/Pedido.class.php';


    class PedidoDAO extends GenericDao{
        
        function __construct() {
            parent::__construct();
        }

        function cadastrarPedido($pedido, $refeicao){
            $arrayDadosPedido = array("usuario", $pedido->usuario->id,
                "data", $pedido->data, "valor", $pedido->valorTotal);
            
            $idNovoPedido = $this->salvar("pedido", $arrayDadosPedido);
            
            //cria uma refeicao
            $refeicaoDao = new RefeicaoDAO();
            $idNovaRefeicao = $refeicaoDao->cadastrarRefeicao($refeicao);
            
            //cria a ligacao
            $refeicaoPedidoDao = new RefeicaoPedidoDAO();
            $refeicaoPedidoDao->cadastrarTipoRefeicao($idNovoPedido, $idNovaRefeicao);
        }
        
        function listarPedidos(){
            $this->findAll("pedido");
        }
    }
?>