<?php

include 'model/DAO/PedidoDAO.class.php';
include 'model/entity/Boleto.class.php';

class PedidoBO

{
	function cadastrarPedido($pedido, $refeicao)
	
	{
		$pedidoDAO = new PedidoDAO();
		
		 $pedidoDAO->cadastrarPedido($pedido, $refeicao);				
		
	}
  
   function gerarBoleto($pedido)
   {
	      $boleto = new Boleto();
	      $boleto->gerarBoleto($pedido);
	   		 
   }   
	   
    function listarPedidos()
	{
		 $listar = new  PedidoDAO();
		 $listar->listarPedidos();
		
		
	}

	
	
}


?>