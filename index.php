<?php 
include ('arquivosphp/config.php');

if(isset($_POST['nome']) and isset($_POST['senha'])) {
    
    $nome = $conexao->real_escape_string($_POST['nome']);
    $senha = $conexao->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuarios WHERE nome = '$nome' and senha = '$senha'";
    $sql_query = $conexao->query($sql_code) or die ("Falha na conexão !");

    $quantidade = $sql_query->num_rows;

    if($quantidade == 1) {

        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)) {
            session_start();
        }
        
        $_SESSION['user'] = $_SESSION['id'];
        $_SESSION['nome'] = $_SESSION['nome'];
        
        header("Location: https://www.youtube.com/ ");
    } 
}




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME</title>
    <link rel="stylesheet" href="estilos/estilodapagina.css">
    <link rel="stylesheet" href="estilos/arealogin.css">
</head>
<body>
    <header>

    </header>
    <main>
        <section class="borda">  <!--Primeira Borda Externa-->
            <div class="barra2"></div> <!--Segunda Barra Preta-->
            <div class="barra1"></div> <!--Primeira Barra Preta-->
            

            <section class="arcade">

                <div class="bordaarcade">
                    <div class="bordaarcade2"></div><!--Barrinha Preta - Esquerda -->

                    <div class="bordainterna">
                        <p>SEJA BEM-VINDO !</p> 
                    </div>
                    
                    <div class="bordaarcade1"> </div><!--Barrinha Preta - Direita -->  
                </div>

                <section class="partesuperior">
                    <div class="supleft"></div>
                    <div class="supright"></div>
                    <div class="supcenter"></div>
                </section>
            </section>

            <section class="partesuperior"> <!--PARTE DO DISPLAY - CIMA E EM BAIXO-->

                <div class="left"></div>
                <div class="center"></div>
                <div class="right"></div>
                <div class="bordadisplay">
                    
                <section class="area-login">
                    <div class="login">
                        <form method="POST">
                            <img src="Mangekyou_Sharingan_Kakashi.svg.png" alt="">
                            <input type="text" name="nome" placeholder="nome de usuario" autofocus required>
                            <input type="password" name="senha" placeholder="insira a sua senha" required minlength="8">
                        <input type="submit" name ="acao" value="entrar">
                        </form>
                        <p>Ainda não tem uma conta ? <a href="arquivosphp/formulario.php" target="_blank">CRIAR CONTA</a></p>
                    </div>
                </section>
                <picture>
            
                    
                </picture>

                </div>

            </section>
        </section>
    </main>
</body>
</html>