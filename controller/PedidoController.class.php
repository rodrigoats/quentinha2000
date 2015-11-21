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
	}
	
 ?>