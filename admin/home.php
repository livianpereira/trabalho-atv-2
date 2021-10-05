<?php require('includes/conexao.php'); ?>
<?php include('includes/header.php'); ?>
<?php include('includes/menu-lateral.php'); ?>
<?php include('includes/barra-superior.php');







$totalUsuariosQuery = "SELECT count(*) as totalUsuarios FROM usuario";
$totalUsuariosResult = mysqli_query($conexao, $totalUsuariosQuery);

while ($rowUsuarios = mysqli_fetch_assoc($totalUsuariosResult)) {
  $totalUsuarios = $rowUsuarios['totalUsuarios'];
}

$toalCategoriasQuery = "SELECT count(*) as totalCategorias FROM categoria";
$totalCategoriasResult = mysqli_query($conexao, $toalCategoriasQuery);
while ($rowCat = mysqli_fetch_assoc($totalCategoriasResult)) {
  $totalCategorias = $rowCat['totalCategorias'];
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Content Row -->



    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header background-azul">
                    Usuários
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-info">
                        Total <span class="badge badge-light">
                            <?php echo $totalUsuarios ?>
                        </span>
                    </button>

                </div>
            </div>
        </div>

        <div  class="col-md-4">
            <div class="card">
                <div class="card-header background-azul">
                    Cadastros
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-info">
                        Total <span class="badge badge-pill badge-light">
                            <?php echo $totalCategorias ?>
                        </span>
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include('includes/footer.php');  ?>