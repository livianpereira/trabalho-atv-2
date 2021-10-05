<?php
require('../../includes/verificaLogado.php');
require('../../includes/conexao.php');
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$rg = $_POST['rg'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$produto = $_POST['produto'];
$preco = $_POST['preco'];

$sql = "UPDATE 
            categoria 
        SET 
            nome='$nome', 
            email='$email' ,
            rg='$rg', 
            cep='$cep' ,
            telefone='$telefone' ,
            produto='$produto' ,
            preco='$preco' 
            
        WHERE 
            id = $id";
       echo $sql;  
          

if(mysqli_query($conexao, $sql)){
    echo "<script>
            location.href='../../listar-categorias.php'    
          </script>";
}