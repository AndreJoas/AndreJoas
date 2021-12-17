<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <title>Login Users</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="stye.css" rel="stylesheet">
</head>
</html>
<body>

    <?php

        include('conexao.php');
        if(!isset($_SESSION['login'])){
            
            if(isset($_POST['acao'])){

                $loginForm = $_POST['login'];
                $senhaForm = $_POST['senha'];

                $sqlUser = $pdo->prepare("SELECT `usuario` FROM `usuario` WHERE `usuario` = ?");
                $sqlUser->execute(array($loginForm));
                $sqlPass = $pdo->prepare("SELECT `senha` FROM `usuario` WHERE `senha` = ?");
                $sqlPass->execute(array($senhaForm));

                if($sqlUser->rowCount() == 1 && $sqlPass->rowCount() == 1){
                    $_SESSION['login'] = $loginForm;
                    header('Location: index.php');
                }else{
                    echo  "<script>alert('Dados inválidos!');</script>";
                }

            }

            include('login.php');
            //include('home.php');
        }else{
            if(isset($_GET['logout'])){
                unset($_SESSION['login']);
                session_destroy();
                header('Location: index.php');
            }
            include('home.php');
        }
        if(isset($_POST['insert'])){
            header('Location: cadastro.php');
        }
        if(isset($_POST['prod'])){
            header('Location: cadastroprod.php');
        }

        if(isset($_POST['comprar'])){
            
            $produtoForm = $_POST['produto'];
            $quantidadeForm = $_POST['quantidade'];

            $sqlProd = $pdo->prepare("SELECT `produto` FROM `produtos` WHERE `produto` = ?");
            $sqlProd->execute(array($produtoForm));
            $sqlQuant = $pdo->prepare("SELECT `quantidade` FROM `produtos` WHERE `quantidade` = ?");
            $sqlQuant->execute(array($quantidadeForm));

            echo $produtoForm;
            echo $quantidadeForm;
            
            if($sqlProd->rowCount() == 1 && $sqlQuant->rowCount() == 1){
                header('Location: finalizada.php');
            }else{
                echo  "<script>alert('Dados inválidos!');</script>";
            }
        }
    ?>

</body>
