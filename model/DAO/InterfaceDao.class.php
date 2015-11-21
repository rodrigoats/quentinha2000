<?php

    interface InterfaceDao {
        
        function salvar($tabela, $arrayObj);
        function findAll($tabela);
}
?>