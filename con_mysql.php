<?php
// - Variaveis de conexao ao banco de dados.
$servidor = "localhost";
$usuario = "root";
$senha = "gallagher";
$banco = "andes";

// - Efetuar conexao ao bando de dados.
$dbc = mysqli_connect($servidor, $usuario, $senha, $banco) or die("<script> alert ('Erro ao conectar ao banco de dados') </script>");
?>