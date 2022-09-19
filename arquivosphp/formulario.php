<?php

include('config.php');

if(isset($_POST['submit'])) {

$nome = $_POST['nome'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$data_nasc = $_POST['data_nasc'];
$senha = $_POST['senha'];

$result = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, sexo, data_nasc, senha) VALUES ('$nome','$email', '$sexo','$data_nasc', '$senha')");

}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="../estilos/style.css">
    <link rel="shortcut icon" href="icone/Mangekyou_Sharingan_Kakashi.svg.png" type="image/x-icon">
</head>
<body>
    <h1>Cadastre-se</h1>
    <form action="formulario.php" method="post" autocomplete="on">

        <fieldset class="form">
            <p>
                <label for="inome">Nome :</label> 
                <input type="text" name="nome" id="inome" required placeholder="Inserir nome completo" autocomplete="name">
            </p>

            <p>
                <label for="iemail">Email :</label>
                <input type="email" name="email" id="iemail" required autocomplete="email" placeholder="exemplo@gmail.com">
            </p>

            <p>
                Sexo :
                <input type="radio" name="sexo" id="sxmas" value="Masculino"checked> 
                <label for="sxmas">Masculino</label >

                <input type="radio" name="sexo" id="sxfam" value="feminino"> 
                <label for="sxfam">Feminino</label>
            </p>

            <p>
                <label for="idata">Data de Nascimento :</label>
                <input type="date" name="data_nasc" id="idata" required>
            </p>

            <p>
                <label for="isen">Senha :</label>
                <input type="password" name="senha" id="isen" required placeholder="Inserir Senha" minlength="8">
            </p>

            <p>
                <label for="isenha">Confirmar Senha :</label>
                <input type="password" name="senha" id="isenha" required placeholder="Confirmar Senha" minlength="8">
            </p>
            <br>
            <input type="submit" name="submit" value="CADASTRAR" class="cadastrar">
            <input type="reset" value="RESETAR" class="reset">
        </fieldset>
    </form>
</body>
</html>