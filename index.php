<?php
	include('header.php');
  include('controller/PedidoController.class.php');

  $pedidoController = new PedidoController();

  if(isset($_POST['submit'])){
    $pedido = $_POST['pedido'];
    $pedidoController->imprimeBoleto($pedido);
    $pedido = null;
  }

 ?>


<h3>Pedidos</h3>
<table class="table table-striped">
  <th>Data</th>
  <th>Cliente</th>
  <th>Valor do Pedido</th>
  <th> </th>
  <!-- Pegar valores do banco -->
  <?php 
    
    $pedidoController->listarPedidos();
   ?>
  
</table>

 <?php 
	include('footer.php');
 ?>