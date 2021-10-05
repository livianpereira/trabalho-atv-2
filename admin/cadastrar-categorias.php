<?php include('includes/header.php'); ?>
<?php include('includes/menu-lateral.php'); ?>
<?php include('includes/barra-superior.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cadastrar </h1>
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

                <form method="POST" action="acoes/categorias/inserir-categoria.php" id="form-categoria"
                    onsubmit="return false">
                    <div class="form-group">
                        <label>Nome completo:</label>
                        <input type="text" class="form-control form-control-user" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control form-control-user" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>RG:</label>
                        <input type="text" class="form-control form-control-user" id="rg" name="rg" required>
                    </div>
                    <div class="form-group">
                        <label>CEP:</label>
                        <input type="text" class="form-control form-control-user" id="cep" name="cep" required>
                    </div>
                    <div class="form-group">
                        <label>Telefone:</label>
                        <input type="text" class="form-control form-control-user" id="telefone" name="telefone" required>
                    </div>
                    <div class="form-group">
                        <label>Produto:</label>
                        <input type="text" class="form-control form-control-user" id="produto" name="produto" required>
                    </div>
                    <div class="form-group">
                        <label>Preço:</label>
                        <input type="text"  class="form-control form-control-user" id="preco" name="preco" required>
                    </div>
                    

                    <input type="submit" value="Salvar " class="btn btn-info col-medium-10"
                        onclick="validarCategoria()" />
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<?php include('includes/footer.php'); ?>
<script src="js/categorias.js"></script>
