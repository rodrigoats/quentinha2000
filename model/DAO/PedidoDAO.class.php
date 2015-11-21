<?php

  include_once 'GenericDao.class.php';   

    class PedidoDAO extends GenericDao{

        
        function __construct() {
            parent::__construct();
        }

        function cadastrarPedido($pedido, $refeicao){
            $arrayDadosPedido = array("usuario", $pedido->usuario->id,
                "data", $pedido->data, "valor", $pedido->valorTotal);
            
            $idNovoPedido = $this->salvar("pedido", $arrayDadosPedido);
            
            //cria uma refeicao
            $refeicaoDao = new RefeicaoDAO();
            $idNovaRefeicao = $refeicaoDao->cadastrarRefeicao($refeicao);
            
            //cria a ligacao
            $refeicaoPedidoDao = new RefeicaoPedidoDAO();
            $refeicaoPedidoDao->cadastrarTipoRefeicao($idNovoPedido, $idNovaRefeicao);
        }
        
        function listarPedidos(){
            // $retorno = $this->findAll("pedido");

            $retorno = $this->conn->query("select 
                            p.id, p.data, u.nome as usuario, SUM(r.valor) as valortotal 
                            from refeicaopedido as rp 
                            JOIN pedido as p on (rp.idpedido = p.id) 
                            JOIN refeicao as r on (rp.idrefeicao = r.id) 
                            JOIN usuario as u on (p.usuario = u.id);");
            if(isset($retorno)){

            foreach ($retorno as $value) {
                    echo "
                        <tr>
                            <td>".$value['data']."</td>
                            <td>".$value['usuario']."</td>
                            <td>".$value['valortotal']."</td>
                            <td>
                                <form method=\"POST\" action=\"index.php\">
                                <input type=\"hidden\" value='".$value['id']."' name='pedido'/>
                                <input type=\"submit\" name=\"submit\" value=\"Imprimir\" class=\"btn btn-danger\"></button>
                                </form>
                            </td>
                        </tr>
                    ";
                }

            }
        }
            // return "retorno";
    }

    function findAll($tabela) {
        echo "entrei no findall da classe";
        return $this->conn->query("select 
                            p.id, p.data, u.nome as usuario, SUM(rp.valor) as valortotal 
                            from refeicaopedido as rp 
                            JOIN pedido as p on (rp.idpedido = p.id) 
                            JOIN refeicao as r on (rp.idrefeicao = r.id) 
                            JOIN usuario as u on (p.usuario = u.id);");
    }

    function imprimirBoleto($pedido){

        $boleto = new Boleto();
        $boleto->gerarBoleto($pedido);
    }
?>