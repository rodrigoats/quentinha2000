<?php

    class RefeicaoPedido {
        
        private $id;
        private $idPedido;
        private $idRefeicao;
        
        function __construct($idPedido, $idRefeicao) {
            $this->idPedido = $idPedido;
            $this->idRefeicao = $idRefeicao;
        }

        function getId() {
            return $this->id;
        }

        function getIdPedido() {
            return $this->idPedido;
        }

        function getIdProduto() {
            return $this->idRefeicao;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setIdPedido($idPedido) {
            $this->idPedido = $idPedido;
        }

        function setIdProduto($idRefeicao) {
            $this->idRefeicao = $idRefeicao;
        }


    }
?>