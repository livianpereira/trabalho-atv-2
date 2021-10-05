<?php

require('../../includes/conexao.php');
$nome = $_POST['nome'];
$senha = md5($_POST['senha']);


$sql = "SELECT 
            COUNT(*) as total
        FROM 
            usuario
        WHERE
            nome = '$nome'
        AND
            senha = '$senha'";

$resultado = mysqli_query($conexao, $sql);

while ($row = mysqli_fetch_assoc($resultado)) {
    if ($row['total'] >= 1) {
        session_start();

        $newSql = "SELECT 
                    *
                 FROM 
                   usuario
                 WHERE
                   nome = '$nome'
                 AND
                    senha = '$senha'";

        $newResult = mysqli_query($conexao, $newSql );

        while ($newRow = mysqli_fetch_assoc($newResult)){
            $_SESSION['id'] = $newRow['id'];
        }

        $_SESSION['logado'] = true;
        echo "<script>
            location.href='../../home.php';
           </script>";
    } else {
       // echo  "<script>
          //      location.href='../../index.php?msg=erro';
          //  </script>";
    }
}