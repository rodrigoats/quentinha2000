<?php
    
    include $_SERVER['DOCUMENT_ROOT'].'/quentinha/model/DAO/UsuarioDAO.class.php';

    class UsuarioBO{
        
        function verificarLogin ($login, $senha) {
            $isLogin;
            
            $usuarioDAO = new UsuarioDAO();
            
            if ($usuarioDAO->verificarLogin($login, $senha) == 1){
                $isLogin = true;
            } else {
                $isLogin = false;
            }
            
            return $isLogin;
        }
    }
?>