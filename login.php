<?php 
include('header.php');
 ?>	
 	<div class="jumbotron">

		<img src="images/marmita.jpg" class="img-circle" style="margin-left: 25% !important;" width="150" height="100"> 
 		<h4 align="center" class="row text-muted">Quem tinha Doiz mil</h4>
 		<div>
 			<form method="POST" action="controller/loginController.php">
	 			<input class="form-control" type="text" placeholder="Digite seu login" name="nome" />
	 			<br />
	 			<input class="form-control" type="password" placeholder="Digite sua senha" name="senha" />
	 			<br />
	 			<input class="btn btn-primary btn-block" type="submit" value="Logar" />
 			</form>
 		</div>
 	</div>	
<?php 
include('footer.php');
 ?> 	