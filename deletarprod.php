<!DOCTYPE html>
<html>
<head>
    <title>Deletar Produto</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="cadastro.css" rel="stylesheet">
</html>
<body>
<?php
    include('conexao.php');
    //insert
    if(isset($_POST['produto'])){
        $produto = $_POST['produto'];
        $sql = $pdo->prepare("DELETE FROM produtos WHERE produto = ?");
        $sql->execute(array($produto));

        if($sql->rowCount() == 1){
            echo  "<script>alert('Produto deletado!');</script>";
            //header('Location: index.php');
        }else{
            echo  "<script>alert('Dados inválidos!');</script>";
        }
    }

?>
<div class="corpo">
    <form method="post">
        <h2>Deletar Produto</h2>
        <input type="text" name="produto" placeholder="Nome do produto">
        <input type="submit" value="Deletar">
    </form>
    <form action = 'index.php' name= "logout" method="get">
	    <input type="submit" value= "Desconectar" name = "logout" placeholder = "Desconectar">
    </form>
</div>
</body>