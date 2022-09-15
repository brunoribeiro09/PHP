<?php 

$host = 'localhost'; //Local de hospedagem do servidor (Local Host)
$username = 'root'; //Nome do servidor
$password = ''; 
$db = 'meubanco'; //Nome do "Banco de Dados" criado no WorkBanch

$conexao = new mysqli($host, $username, $password,$db); //A variavel $conexao foi criada para atribuir os elementos acima, para efetuar uma conexão entre o formulario e o banco de dados.

