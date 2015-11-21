<?php

class PedidoBO

{
	function cadastrarPedido($pedido)
	
	{
		$pedidoDAO = new PedidoDAO();
		
		 $pedidoDAO->cadastrarPedido($pedido);				
		
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