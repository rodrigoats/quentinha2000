<?php 

	include 'controller/PedidoController.class.php';

	$pedidoController = new PedidoController();
	$pedidoController->cadastrarPedido();
	header("location:../quentinha/index.php");

 ?>