<?php

// informações sobre o server
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "Jogos";

// ConeVerificando conexão
$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

// Mensagem em caso de falha
if(!$conexao){
	die("Houve um erro de conexão: ".mysqli_connect_error());
}

// Código para criar tabela
$cadastro = "CREATE TABLE IF NOT EXISTS cadastro("
            ."id int NOT NULL AUTO_INCREMENT,"
	        ."nome varchar(50) NOT NULL,"
		    ."descricao varchar(100) NOT NULL,"
		    ."categoria varchar(30) NOT NULL,"
            ."PRIMARY KEY (id))";

$newsletter = "CREATE TABLE IF NOT EXISTS newsletter("
            ."id_news int NOT NULL AUTO_INCREMENT,"
	        ."nome varchar(50) NOT NULL,"		    
		    ."email varchar(30) NOT NULL,"
            ."PRIMARY KEY (id_news))";

if (mysqli_query ($conexao, $cadastro)) {
    echo "Tabela de cadastro de jogos criada com sucesso \n";
} else {
    echo "Erro ao criar tabela cadastro:". mysqli_error ($conexao);
}

if (mysqli_query ($conexao, $newsletter)) {
    echo "Tabela de newsletter criada com sucesso \n";
} else {
    echo "Erro ao criar tabela newsletter:". mysqli_error ($conexao);
}

mysqli_close ($conexao);

?>