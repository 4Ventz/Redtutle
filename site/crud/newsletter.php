<?php

	include("conexao.php");

	$nome=$_POST['nome'];
	$email=$_POST['email'];

	$sql="INSERT INTO newsletter(nome, email) VALUES ('$nome', '$email')";

	if(mysqli_query ($conexao, $sql)){
		echo "<h1>Email cadastrado com sucesso!</h1>";
		echo "<button><a href='http://localhost/site'>Voltar para o site</a></button><br>";
	}
	else{
		echo "Erro".mysqli_connect_error($conexao);
	}

	mysqli_close($conexao);
?>