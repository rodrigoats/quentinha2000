<?php

    include $_SERVER['DOCUMENT_ROOT'].'/quentinha/model/DAO/GenericDao.class.php';

    class UsuarioDAO extends GenericDao{
        // var $conn;
        function __construct() {
        	// $this->conn = new PDO('mysql:host=localhost;dbname=sistema','root','root');
            parent::__construct();
        }

        
        function verificarLogin($login, $senha) {
            $sql = "SELECT COUNT(*) as total from usuario where nome = '". $login . "' AND senha = '". $senha."'";
            echo $sql;
            $retorno = $this->conn->query($sql);
            if($retorno)
            foreach ($retorno as $value) {
                return $value['total'];
            }
        }
    }
?>