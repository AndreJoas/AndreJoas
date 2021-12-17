<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="cadastro.css" rel="stylesheet">
</html>
<body>
<?php
    include('conexao.php');
    //insert
    if(isset($_POST['produto'])){
        $sql = $pdo->prepare("INSERT INTO produtos VALUES(4,?,?)");
        $sql->execute(array($_POST['produto'], $_POST['quantidade']));
        header('Location: index.php');
    }

?>
<div class="corpo">
    <form method="post">
        <h2>Cadastro de Produtos</h2>
        <input type="text" name="produto" placeholder="Produto">
        <input type="text" name="quantidade" placeholder="Quantidade">
        <input type="submit" value="Cadastrar">
    </form>
    <form action = 'index.php' name= "logout" method="get">
	    <input type="submit" value= "Desconectar" name = "logout" placeholder = "Desconectar">
    </form>
</div>
</body>