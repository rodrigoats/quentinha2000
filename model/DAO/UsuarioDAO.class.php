<?php
    
    include_once 'GenericDao.class.php';
    include_once 'model/entity/Usuario.class.php';
    

    class UsuarioDAO extends GenericDao{
        // var $conn;
        function __construct() {
        	// $this->conn = new PDO('mysql:host=localhost;dbname=sistema','root','root');
            parent::__construct();
        }

        
        function verificarLogin($login, $senha) {
            $sql = "SELECT COUNT(*) as total from usuario where nome = '". $login . "' AND senha = '". $senha."'";
            $retorno = $this->conn->query($sql);
            if($retorno)
            foreach ($retorno as $value) {
                return $value['total'];
            }
        }

        function getUsuarioByNome($nome){
            $sql = "SELECT * FROM usuario WHERE nome LIKE '%".$nome."%'";
            $usuario = new Usuario();
            $retorno = $this->conn->query($sql);
            if($retorno)
            foreach ($retorno as $value) {
                $usuario->setNome($value['nome']);
                $usuario->setId($value['id']);
                $usuario->setEndereco($value['endereco']);
                return $usuario;
            }
        }
    }
?>