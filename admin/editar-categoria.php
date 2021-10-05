<?php include('includes/header.php'); ?>
<?php include('includes/menu-lateral.php'); ?>
<?php include('includes/barra-superior.php'); ?>
<?php require('includes/conexao.php'); ?>


<?php
$id = $_GET['id'];
$sql = "SELECT * FROM categoria WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);
while ($row = mysqli_fetch_assoc($resultado)) {
    $nome = $row['nome'];
    $email = $row['email'];
    $rg = $row['rg'];
    $cep = $row['cep'];
    $telefone = $row['telefone'];
    $produto = $row['produto'];
    $preco = $row['preco'];
    
    
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Editar cadastro</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="p-5">
                <div class="alert alert-danger" id="erro-categorias" hidden>
                    Ops! Informe todos os dados para continuar!
                </div>


                <?php
                if (isset($_GET['msg'])) {
                    if ($_GET['msg'] == "salvo") {
                        echo "<div class='alert alert-success'>
                        Salvo com sucesso!
                        </div>";
                    }
                }
                ?>

                <form method="POST" action="acoes/categorias/editar-categoria.php" id="form-categoria" onsubmit="return false">
                    <div class="form-group">
                        
                        
                        <input type="hidden" name="id" value="<?php echo $id  ?>">


                        <div class="form-group">
                            <label>Nome Completo:</label>
                            <input type="text" class="form-control form-control-user" id="nome" name="nome" value="<?php echo $nome  ?>">

                        
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control form-control-user" id="email" name="email" value="<?php echo $email ?>">

                          
                        </div>
                        <div class="form-group">
                            <label>RG:</label>
                            <input type="text" class="form-control form-control-user" id="rg" name="rg" value="<?php echo $rg ?>">

                            
                        </div>
                        <div class="form-group">
                            <label>CEP:</label>
                            <input type="text" class="form-control form-control-user" id="cep" name="cep" value="<?php echo $cep  ?>">

                            
                        </div>
                        <div class="form-group">
                            <label>Telefone:</label>
                            <input type="text" class="form-control form-control-user" id="telefone" name="telefone" value="<?php echo $telefone  ?>">

                           
                        </div>
                        <div class="form-group">
                            <label>Produto:</label>
                            <input type="text" class="form-control form-control-user" id="produto" name="produto" value="<?php echo $produto  ?>">

                            
                        </div>
                        <div class="form-group">
                            <label>Preço:</label>
                            <input type="text" class="form-control form-control-user" id="preco" name="preco" value="<?php echo $preco?>">

                             
                        </div>

                        <input type="submit" value="Editar cadastro" class="btn btn-info col-lg-12"
                            onclick="validarCategoria()" />
                </form>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>

<script src="js/categorias.js"></script>
<?php include('includes/footer.php'); ?>