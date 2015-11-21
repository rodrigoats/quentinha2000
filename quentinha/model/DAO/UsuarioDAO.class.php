<?php
    include '../entity/Usuario.class.php';

    class UsuarioDAO{
        private $conn;
        
        function __construct() {
            $this->conn = new PDO('mysql:host=localhost;dbname=sistema','root','unipe');
        }

        
        function verificarLogin($login, $senha) {
            $sql = "SELECT COUNT(id) from usuario where login = ". $login . " AND senha = ". $senha;
            
            return $this->conn->query($sql);
        }
        
        function cadastrarUsuario($usuario) {
            $arrayDadosUsuario = array("nome", $usuario->nome, "senha", $usuario->senha, "endereco", $usuario->endereco);
            
            $this->salvar("usuario", $arrayDadosUsuario);
        }
    }
?>