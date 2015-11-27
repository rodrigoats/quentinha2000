<!DOCTYPE html>
<?php
    include('header.php');
    include 'controller/RefeicaoController.class.php';
    $refeicaoController = new RefeicaoController();
?>

    <form method="POST" action="actionPedido.php">
        <p >
            <h1 align="center">Monte seu almoço!</h1>
        </p>
        <?php
            $refeicaoController->listarRefeicoes();
        ?>
        <br />
        <input class="btn btn-primary btn-block" type="submit" value="Fazer Pedido" />
    </form>
<?php 
    include('footer.php');
 ?>