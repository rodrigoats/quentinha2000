<?php

    class TipoRefeicao {
        
        private $id;
        private $descricao;
        
        function __construct($descricao) {
            $this->descricao = $descricao;
        }
        
        function getDescricao() {
            return $this->descricao;
        }

        function setDescricao($descricao) {
            $this->descricao = $descricao;
        }

        function getId() {
            return $this->id;
        }

        function setId($id) {
            $this->id = $id;
        }
    }
?>