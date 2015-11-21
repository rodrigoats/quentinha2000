<?php
    
    class Pedido{
        
        private $id;
        private $usuario;
        private $data;
        private $valorTotal;
        
        function __construct($usuario, $data, $valorTotal) {
            $this->usuario = $usuario;
            $this->data = $data;
            $this->valorTotal = $valorTotal;
        }

        function getId() {
            return $this->id;
        }

        function setId($id) {
            $this->id = $id;
        }
                
        function getUsuario() {
            return $this->usuario;
        }

        function getData() {
            return $this->data;
        }

        function getValorTotal() {
            return $this->valorTotal;
        }

        function setUsuario($usuario) {
            $this->usuario = $usuario;
        }

        function setData($data) {
            $this->data = $data;
        }

        function setValorTotal($valorTotal) {
            $this->valorTotal = $valorTotal;
        }


    }
?>