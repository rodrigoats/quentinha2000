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
    }
?>