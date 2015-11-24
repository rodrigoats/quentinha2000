<?php 
	
	// include_once '../model/BO/PedidoBO.class.php';
	


	/**
	* 
	*/
class PedidoController
	{
		var $pedidoBO;




		function listarPedidos(){
			$pedidoBO = new PedidoBO();
			$pedidoBO->listarPedidos();

		}

		function imprimeBoleto($pedido){
			$pedidoBO = new PedidoBO();
			$pedidoBO->gerarBoleto($pedido);
		}

		function cadastrarPedido(){
            $usuario = $_SESSION['login'];
            
            date_default_timezone_set('America/Sao_Paulo');
            $dataAtual = date('d/m/Y');
            
            $idRefeicaoSelect = $_POST['opcaoRefeicao'];
            echo $idRefeicaoSelect;
            $refeicaoBO = new RefeicaoBO();
            $refeicaoSelecionada = $refeicaoBO->getRefeicaoById($idRefeicaoSelect);
            
            $pedido = new Pedido($usuario,$dataAtual,$refeicaoSelecionada->getValor());

            echo $pedido->getValorTotal();
            $pedidoBO = new PedidoBO();
            $pedidoBO->cadastrarPedido($pedido);
        }
	}
	
 ?>