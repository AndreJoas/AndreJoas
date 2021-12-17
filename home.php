<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Users</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="teste.css" rel="stylesheet">
</head>
<body>

<?php
    include('conexao.php');

?>
    <div class="corpo">
            <h2>Bem-Vindo</h2>
            <form action = 'index.php' name='comprar' method='post'>
                <input type="text" name="produto" size=50 placeholder="Insira o nome do produto">
                <input type="text" name="quantidade" size= 50 placeholder="Insira quantidade do produto">
                <input type="submit" name="comprar" value="Comprar">
            </form>
            <form action = 'deletarprod.php' name='delete' method='post'>
                <input type = "submit" name = "delete" value = "Deletar Produto">
            </form>
            <form action = 'index.php' name= "logout" method="get">
                <input type="submit" value= "Desconectar" name = "logout" placeholder = "Desconectar">
            </form>

    </div>
</body>
</html>
