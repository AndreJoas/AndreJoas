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
    if(isset($_POST['usuario'])){
        $sql = $pdo->prepare("INSERT INTO usuario VALUES(5,?,?,?)");
        $sql->execute(array($_POST['usuario'], $_POST['email'], $_POST['senha']));
        header('Location: index.php');
    }

?>
<div class="corpo">
    <form method="post">
        <h2>Cadastro de Usuário</h2>
        <input type="text" name="usuario" placeholder="Usuário">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="senha" placeholder="Password">
        <input type="submit" value="Cadastrar">
    </form>
    <form action = 'index.php' name= "logout" method="get">
	    <input type="submit" value= "Desconectar" name = "logout" placeholder = "Desconectar">
    </form>
</div>
</body>