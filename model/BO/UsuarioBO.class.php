<?php
    
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

        function getUsuarioByNome($nome){
            $usuarioDAO = new UsuarioDAO();   
            $usuario = $usuarioDAO->getUsuarioByNome($nome);
            return $usuario; 
        }
    }
?>