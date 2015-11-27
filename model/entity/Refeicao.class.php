<?php

    class Refeicao {
        
        private $id;
        private $nome;
        private $tipoRefeicao;
        private $valor;
        
        function getId() {
            return $this->id;
        }

        function getNome() {
            return $this->nome;
        }

        function getTipoRefeicao() {
            return $this->tipoRefeicao;
        }

        function getValor() {
            return $this->valor;
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

        function setValor($valor) {
            $this->valor = $valor;
        }
    }
?>