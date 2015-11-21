<?php

class Boleto

{

function gerarBoleto($pedido)
	
  {

		$conn = new PDO('mysql:host=localhost;dbname=sistema', 'root', 'root');
        $result = $conn->query("Select id, usuario, data, valortotal from pedido where id = '".$pedido."'");

		$arquivo = fopen($_SERVER['DOCUMENT_ROOT']."/quentinha/notas/nf".$pedido.".txt", "w");
        
		foreach($result as $valores)	
		
		{
		fwrite($arquivo, "..............................................\n");
		fwrite($arquivo, "..............NOTA FISCAL.....................\n");
		fwrite($arquivo, "..............................................\n");
		fwrite($arquivo, "Número do Pedido: ".$valores['id']." \n");
		fwrite($arquivo, "Comprador: ".$valores['usuario']." \n");
        fwrite($arquivo, "Data da compra:".$valores['data']." \n");
        fwrite($arquivo, "Valor Total da compra: ".$valores['valortotal']." \n");
	    fwrite($arquivo, "..............................................\n");
	
		}
		fclose($arquivo);
   

  }



}

?>
