<?php

    class PedidoProduto {
        
        private $id;
        private $idPedido;
        private $idProduto;
        
        function __construct($idPedido, $idProduto) {
            $this->idPedido = $idPedido;
            $this->idProduto = $idProduto;
        }

        function getId() {
            return $this->id;
        }

        function getIdPedido() {
            return $this->idPedido;
        }

        function getIdProduto() {
            return $this->idProduto;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setIdPedido($idPedido) {
            $this->idPedido = $idPedido;
        }

        function setIdProduto($idProduto) {
            $this->idProduto = $idProduto;
        }


    }
?>