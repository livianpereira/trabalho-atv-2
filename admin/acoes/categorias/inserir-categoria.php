<?php
require('../../includes/verificaLogado.php');
require('../../includes/conexao.php');
$nome = mb_strtoupper($_POST['nome']);
$idUsuario = $_SESSION['id'];
$email = mb_strtoupper($_POST['email']);
$rg = mb_strtoupper($_POST['rg']);
$cep = mb_strtoupper($_POST['cep']);
$telefone = mb_strtoupper($_POST['telefone']);
$produto = mb_strtoupper($_POST['produto']);
$preco = mb_strtoupper($_POST['preco']);


$sql = "INSERT INTO categoria (idUsuario,nome,email,rg,cep,telefone,produto,preco) VALUES ( '$idUsuario', '$nome' ,'$email', '$rg' ,'$cep' ,'$telefone' ,'$produto', '$preco'  )";

if(mysqli_query($conexao, $sql)){
    echo "<script>
        location.href='../../cadastrar-categorias.php?msg=salvo';
        </script>";
}