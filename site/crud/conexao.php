<?php

// informa��es sobre o server
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "Jogos";

// Conecta com o servidor
$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

// Mensagem em caso de falha
if(!$conexao){
	die("Houve um erro de conex�o: ".mysqli_connect_error());
}

?>