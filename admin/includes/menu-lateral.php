<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul style="background-color:teal" class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

            <div class="sidebar-brand-text mx-3"><img style="width: 50px;" src="../admin/img/logo.png"></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="home.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Registro</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-user"></i>
                <span>Usuários</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a style="font-weight: bold;" class="collapse-item" href="cadastrar-usuarios.php">Cadastrar</a>
                    <a style="font-weight: bold;" class="collapse-item" href="listar-usuarios.php">Listar</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategoria"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-user"></i>
                <span>Cadastro</span>
            </a>
            <div id="collapseCategoria" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a style="font-weight: bold;" class="collapse-item" href="cadastrar-categorias.php">Cadastrar</a>
                    <a style="font-weight: bold;" class="collapse-item" href="listar-categorias.php">Listar</a>
                </div>
            </div>
        </li>


    </ul>
    <!-- End of Sidebar --