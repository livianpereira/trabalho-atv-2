<?php 

$conexao = mysqli_connect("127.0.0.1:3307
", "root", "");

if($conexao === false){
    die("erro, não foi possível conectar ao servidor");
}

mysqli_select_db($conexao, "trabalho");
