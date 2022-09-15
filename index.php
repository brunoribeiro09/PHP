<?php 
include_once('config.php');

if(isset($_POST['nome']) and isset($_POST['senha'])){
    if (strlen($_POST['nome']) == 0){
        echo "Preencha o seu nome de Usuario";
    } else if (strlen($_POST['senha']) == 0){
        echo "Preencha a sua senha";
    } else {

        $nome = $conexao->real_escape_string($_POST['nome']);
        $senha = $conexao->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE nome = '$nome' and senha = '$senha'";
        $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL : " . $conexao->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['user'] = $_SESSION ['id'];
            $_SESSION['nome'] = $_SESSION ['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar ! E-mail ou senha incorretos";
        }
    }



}


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <form action="index.php" method="post">

    Nome :
    <input type="text" name="nome" id=""> 
    Senha :
    <input type="password" name="senha" id="">

    <input type="submit" value="ENTRAR">
    </form>    
</body>
</html>