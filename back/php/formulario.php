<?php

	$conexao = mysqli_connect("localhost","root","","projeto3");
	
	$result = mysqli_query($conexao,"<query>");

	echo json_encode($_POST);
	$nome = $_POST["nome"];
	$sobrenome = $_POST["sobrenome"];
	$endereco = $_POST["endereco"];	
	$numeroTelefone = $_POST["numeroTelefone"];

	
	
	if($nome != null){
		$insert = "INSERT INTO cadastro(NOME, SOBRENOME, ENDERECO, NUMERO) 
		VALUES('$nome','$sobrenome','$endereco','$numeroTelefone')";
		
		mysqli_query($conexao,$insert);
	}
?>
