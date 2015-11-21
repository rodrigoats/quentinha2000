<?php
    include_once '../DAO/UsuarioDAO.class.php';

    class UsuarioBO{
        
        function verificarLogin ($login, $senha) {
            $isLogin;
            
            $usuarioDAO = new UsuarioDAO();
            
            if ($usuarioDAO->verificarLogin($login, $senha) != null){
                $isLogin = true;
            } else {
                $isLogin = false;
            }
            
            return $isLogin;
        }
    }
?>