<?php
    if (isset($_POST['submit'])){ //Se existir um "ENVIAR (SUBMIT), ele enviará todas as informações contidas no formulario, para cada campo"

        include_once('config.php'); //Incluindo a conexão do formulário com o banco de dados (TIPO UMA PONTE ENTRE OS DOIS)

        $nome = $_POST['nome']; //A variavel $nome vai receber o que for preenchido no formulario no elemento "nome"
        $email = $_POST['email']; // A variavel $email vai receber o que for preenchido no formulario no elemento "email"
        $sexo = $_POST['sexo']; //A variavel $sexo vai receber o que for preenchido no formulario no elemento "sexo"
        $data_nasc = $_POST['data_nasc']; //A variavel $data_nasc vai receber o que for preenchido no formulario no elemento $data_nasc
        $senha = $_POST['senha']; //A variavel $senha vai receber o que for preenchido no formulario no elemento $senha


        //Nova variavel   Conexão Inclusa |FILTRO|  'nome da tabela'     e os campos               VALORES   Váriaveis que vão p BDD
                                                                                                                   
        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, sexo, data_nasc, senha) VALUES ('$nome', '$email', '$sexo', '$data_nasc', '$senha')");
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
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