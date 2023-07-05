<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listar</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <?php
        include("conexao.php");
        $sql="SELECT * FROM cadastro";
        $resultado=mysqli_query($conexao, $sql);
        if(mysqli_num_rows($resultado)>0)
        {
            echo "<table class='table'>
            <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descricao</th>
            <th>Categoria</th>
            </tr>";
        

            while($row=mysqli_fetch_assoc($resultado))
            {
                echo "<tr><td>".$row['id']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['descricao']."</td>";
                echo "<td>".$row['categoria']."</td></tr>";
            }

            echo "</table>";
        }
        else
        {
            echo "Zero Resultados";
        }
        mysqli_close($conexao);
    ?>    
    <button><a href='http://localhost/site/crud/'>Inicio Banco de Dados</a></button><br>
</body>
</html>