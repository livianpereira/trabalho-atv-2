<?php include('includes/header.php') ?>
<?php include('includes/menu-lateral.php') ?>
<?php include('includes/barra-superior.php') ?>

<?php require('includes/conexao.php') ?>

<div  class="card shadow mb-4">
    <div  class="card-header py-3">

        <div  class="row">
            <div  class="col-md-9">
                <h6  class="m-o font-weight-bold text-info">Lista de cadastro</h6>
            </div>
            <div  class="col-md-3">
                <a href="cadastrar-categorias.php">
                    <button style="color: white;" class="btn btn-info col-md-12">+ Novo</button>
                </a>
            </div>
        </div>
        
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="table-categorias" widht="100%" cellspacing="0">
                <thead>
                    <th>#ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>RG</th>
                    <th>CEP</th>
                    <th>Telefone</th>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Ações</th>
                    
                </thead>

                <tbody>
                    <?php
                     $idUsuario = $_SESSION['id'];
                    $sql = "SELECT * FROM categoria WHERE idUsuario = $idUsuario ORDER BY id DESC";
                    $resultado = mysqli_query($conexao, $sql);

                    while ($row = mysqli_fetch_assoc($resultado)) {
                        $id = $row['id'];
                        $idUsuario = $row['id'];
                        $nome = $row['nome'];
                        $email = $row['email'];
                        $rg = $row['rg'];
                        $cep = $row['cep'];
                        $telefone = $row['telefone'];
                        $produto = $row['produto'];
                        $preco = $row['preco'];
                    ?>
                        <tr class="centro">
                            <td><strong><?php echo $id ?></strong></td>

                            <td><?php echo $nome ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $rg ?></td>
                            <td><?php echo $cep ?></td>
                            <td><?php echo $telefone ?></td>
                            <td><?php echo $produto ?></td>
                            <td><?php echo $preco ?></td>

                            <td>
                                <a href="editar-categoria.php?id=<?php echo $row ['id'] ?>">
                                    <button class="btn btn-info">
                                        <i class="fas fa-edit"></i>
                                        Editar
                                    </button></a>
                                <a href="acoes/categorias/excluir-categoria.php?id=<?php echo $id ?>">
                                    <button class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                        Excluir
                                    </button>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<?php include('includes/footer.php') ?>