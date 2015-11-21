<?php



    class RefeicaoController {
        
        function listarRefeicoes(){
            
            $refeicaoBO = new RefeicaoBO();
            $retorno = $refeicaoBO->listarRefeicoes();
            
            if(isset($retorno)) {
                echo "<select class='form-control' name='opcaoRefeicao'>";
                    echo "<option>Selecione uma refeição...</option>";
                foreach ($retorno as $value) {
                    echo "<option value='". $value['id'] ."'>". $value['nome'] ."</option>";
                }
                echo "</select>";
            }
        }
        
        
        function cadastrarPedido(){
            $usuario = $_SESSION['login'];
            
            date_default_timezone_set('America/Sao_Paulo');
            $dataAtual = date('d/m/Y');
            
            $idRefeicaoSelect = $_POST['opcaoRefeicao'];
            $refeicaoBO = new RefeicaoBO();
            $refeicaoSelecionada = $refeicaoBO->getRefeicaoById($idRefeicaoSelect);
            
            $pedido = new Pedido($usuario,$dataAtual,$refeicaoSelecionada->getValor());
        }
    }
?>