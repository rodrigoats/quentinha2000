<?php 
	
	/**
	* 
	*/

include 'model/BO/PedidoBO.class.php';
include 'model/BO/RefeicaoBO.class.php';
include 'model/BO/UsuarioBO.class.php';
include 'model/DAO/UsuarioDAO.class.php';
include_once 'model/entity/Usuario.class.php';
include 'model/entity/Refeicao.class.php';
include 'model/entity/Pedido.class.php';

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
			session_start();

			$usuarioBO = new UsuarioBO();
			$usuario = new Usuario();
			$usuario = $usuarioBO->getUsuarioByNome($_SESSION['login']);
            
            
            date_default_timezone_set('America/Sao_Paulo');
            $dataAtual = date('Y-m-d');
            
            $idRefeicaoSelect = $_POST['opcaoRefeicao'];
            $refeicaoBO = new RefeicaoBO();
            $refeicaoSelecionada = new Refeicao();
            $refeicaoSelecionada = $refeicaoBO->getRefeicaoById($idRefeicaoSelect);
            
            $pedido = new Pedido($usuario,$dataAtual,$refeicaoSelecionada->getValor());
            $pedidoBO = new PedidoBO();
            $pedidoBO->cadastrarPedido($pedido, $refeicaoSelecionada);
        }
	}
	
 ?>