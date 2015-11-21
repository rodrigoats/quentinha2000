<?php

    class Refeicao {
        
        private $id;
        private $nome;
        private $tipoRefeicao;
        
        function __construct($nome, $tipoRefeicao) {
            $this->nome = $nome;
            $this->tipoRefeicao = $tipoRefeicao;
        }
        
        function getId() {
            return $this->id;
        }

        function getNome() {
            return $this->nome;
        }

        function getTipoRefeicao() {
            return $this->tipoRefeicao;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

        function setTipoRefeicao($tipoRefeicao) {
            $this->tipoRefeicao = $tipoRefeicao;
        }
    }
?>