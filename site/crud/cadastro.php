<?php

	include("conexao.php");

	$nome=$_POST['nome'];
	$descricao=$_POST['descricao'];
	$categoria=$_POST['categoria'];

	$sql="INSERT INTO cadastro(nome, descricao, categoria) VALUES ('$nome', '$descricao', '$categoria')";

	if(mysqli_query ($conexao, $sql)){
		echo "<h1>Jogo cadastrado com sucesso!</h1>";
		echo "<button><a href='http://localhost/site/crud/cadastro.html'>Cadastrar novo jogo</a></button><br><br>";
		echo "<button><a href='http://localhost/site/crud/'>Inicio Banco de Dados</a></button><br>";
	}
	else{
		echo "Erro".mysqli_connect_error($conexao);
	}

	mysqli_close($conexao);
?>