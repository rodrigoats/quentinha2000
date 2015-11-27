<?php
    class Usuario {
        
        var $id;
        var $nome;
        var $senha;
        var $endereco;

        function getId() {
            return $this->id;
        }

        function setId($id) {
            $this->id = $id;
        }

        function getNome() {
            return $this->nome;
        }

        function getSenha() {
            return $this->senha;
        }

        function getEndereco() {
            return $this->endereco;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

        function setSenha($senha) {
            $this->senha = $senha;
        }

        function setEndereco($endereco) {
            $this->endereco = $endereco;
        }
    }
?>
