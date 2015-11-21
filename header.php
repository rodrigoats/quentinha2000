 <?php 
	
	session_start();

	include_once 'model/BO/PedidoBO.class.php';
	include_once 'model/BO/UsuarioBO.class.php';
    include_once 'model/BO/RefeicaoBO.class.php';
	include_once 'model/DAO/PedidoDAO.class.php';	
  	include_once 'model/DAO/UsuarioDAO.class.php';
	include_once 'model/DAO/RefeicaoDAO.class.php';
	include_once 'model/entity/Boleto.class.php';
	

	if($_SERVER['REQUEST_URI'] == "/quentinha/login.php")
		$isLoginPage = true;
	else
		$isLoginPage = false;	 

	if(!isset($_SESSION['login']) && !$isLoginPage)
		header('location:login.php');

	if(isset($_POST['logout'])){
		if($_POST['logout'])
			session_destroy();
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Quentinha 2000</title>

 	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

 	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<style type="text/css">
		.jumbotron{
			width: 400px;
			height: 300px;

			margin-left: auto;
			margin-right: auto;
			margin-top: 10%;

			padding: 10px;

		}

	</style>
 </head>
 <body class="container">
	 <nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">Quentinha 2000</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	       <ul class="nav navbar-nav">
	        <li><a href="fazerPedido.php">Novo Pedido</a></li>
	        <!-- <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">One more separated link</a></li>
	          </ul>
	        </li> -->
	      </ul>
	       <form class="navbar-form nav navbar-nav navbar-right" role="search" method="POST" action="index.php">
	        <input type="hidden" name="logout" value="true" />
	        <button type="submit" class="btn btn-info">Sair</button>
	      </form>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
 	
