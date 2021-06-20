<?php

	$conexao = mysqli_connect("localhost","root","","projeto3");
	
	$result = mysqli_query($conexao,"<query>");

	echo json_encode($_POST);
	$nome = $_POST["nome"];
	$sobrenome = $_POST["sobrenome"];
	$endereco = $_POST["endereco"];	
	$numeroTelefone = $_POST["numeroTelefone"];
	$formaPagamento =  $_POST["formaPagamento"];
	$email =  $_POST["email"];
	
	if($nome != null){
		$insert = "INSERT INTO cadastro(NOME, SOBRENOME, ENDERECO, NUMERO, PAGAMENTO, EMAIL) 
		VALUES('$nome','$sobrenome','$endereco','$numeroTelefone','$formaPagamento','$email')";
		
		mysqli_query($conexao,$insert);
	}
?>
