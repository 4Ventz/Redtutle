<?php
	
	include("conexao.php");

	$pesquisar=$_POST['pesquisar'];
	$resultado="SELECT * FROM cadastro WHERE nome LIKE '%$pesquisar%' LIMIT 5";
	$resultado_cadastro=mysqli_query($conexao, $resultado);

	while ($rows_cadastro=mysqli_fetch_array($resultado_cadastro))
	{
		echo "ID: ".$rows_cadastro['id']."<br>";
		echo "Nome: ".$rows_cadastro['nome']."<br>";
		echo "Descricao: ".$rows_cadastro['descricao']."<br>";
		echo "Categoria: ".$rows_cadastro['categoria']."<br><br><br>";
	}

	echo "<button><a href='http://localhost/site/crud/cadastro.html'>Cadastrar novo jogo</a></button><br><br>";
	echo "<button><a href='http://localhost/site/crud/'>Inicio Banco de Dados</a></button><br>";
?>