<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PESHI</title>
    <link href="../Resources/css/styles_temp.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<?php
session_start();
include_once("connection.php");

$email = $_SESSION['email'];

$name_member = filter_input(INPUT_POST, 'name_member', FILTER_SANITIZE_STRING);
$type = $_POST['selectName'];
$gender = $_POST['selectGender'];
$fk = "SELECT id FROM users where email = '$email'";
$pintao = mysqli_query($conn, $fk);

if (!$pintao) {
    echo 'Could not run query: ';
    exit;
}
$row = mysqli_fetch_row($pintao);



$result_family = "INSERT INTO membro_familia(nome_membro, tipo_membro, genero_membro, fk_user) VALUES('$name_member', '$type', '$gender', '$row[0]')";
mysqli_query($conn, $result_family);



?>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-green py-3">
        <a class="navbar-brand" href="index.php"><img class="img-responsive" style="height: 45px"
                src="../resources/img/logo.png" alt=""></a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#!" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            </li>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#!">Settings</a>
                <a class="dropdown-item" href="#!">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="login.php">Logout</a>
            </div>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Inicio</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Resumo
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Familia
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="Membros.php">Ver Membros</a>
                                <a class="nav-link" href="addMembro.php">Adicionar Membro</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Dicas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse"
                                    data-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Para Voce
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                                    data-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="#">Mercado</a>
                                        <a class="nav-link" href="#">Luz</a>
                                        <a class="nav-link" href="#">Agua</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-toggle="collapse"
                                    data-target="#pagesCollapseError" aria-expanded="false"
                                    aria-controls="pagesCollapseError">
                                    Todas
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                                    data-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="#">Mercado</a>
                                        <a class="nav-link" href="#">Luz</a>
                                        <a class="nav-link" href="#">Agua</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tabelas
                        </a>
                        <a class="nav-link" href="landingpage.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Sair
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logado como:</div>
                    Paulin Jorge
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">


            <div class="container-fluid pt-3 bg-light">
                <h1 class="display-4 ">Membros da familia</h1>
                <hr class="hr-green mb-5">
            </div>
            <div class="bg-light">
                <div class="container-fluid">

                <?php

                    if (mysqli_insert_id($conn)){
                        echo 'pinto';
                    header("Location: cadastro_sucesso.php");
                    }else{
                        echo 'pinto';
                    header("Location: home.php");
                    }

                ?>

                        

                    <div class="row">
                        <div class="col-xl-4 col-sm-6 mt-2">
                            <div class="card ">
                                <div class="row no-gutters">
                                    <div class="col-lg-5 d-flex justify-content-center ">
                                        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg"
                                            class="perfil-img" alt="...">
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="card-body">
                                            <h5 class="card-title">Alice Liddel</h5>
                                            <p class="card-text nowrap">Saldo: R$3234.00
                                            </p>
                                            <p class="card-text nowrap">Despesas: R$3213.32</p>
                                            <p class="card-text nowrap">Renda: R$2323.32</p>
                                            <a href="#" class="btn btn-success bg-green stretched-link">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 mt-2">
                            <div class="card">
                                <div class="row no-gutters">
                                    <div class="col-lg-5 d-flex justify-content-center ">
                                        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t2.jpg"
                                            class="perfil-img" alt="...">
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="card-body">
                                            <h5 class="card-title">Alice Liddel</h5>
                                            <p class="card-text nowrap">Saldo: R$3234.00
                                            </p>
                                            <p class="card-text nowrap">Despesas: R$3213.32</p>
                                            <p class="card-text nowrap">Renda: R$2323.32</p>
                                            <a href="#" class="btn btn-success bg-green stretched-link">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 mt-2">
                            <div class="card">
                                <div class="row no-gutters">
                                    <div class="col-lg-5 d-flex justify-content-center ">
                                        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t2.jpg"
                                            class="perfil-img" alt="...">
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="card-body">
                                            <h5 class="card-title">Alice Liddel</h5>
                                            <p class="card-text nowrap">Saldo: R$3234.00
                                            </p>
                                            <p class="card-text nowrap">Despesas: R$3213.32</p>
                                            <p class="card-text nowrap">Renda: R$2323.32</p>
                                            <a href="#" class="btn btn-success bg-green stretched-link">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 mt-2">
                            <div class="card add-membro"
                                style="border-radius: 5%;    background-color: rgba(139, 139, 139, 0.514);">
                                <div class="row no-gutters">
                                    <div class="col-lg-5 d-flex justify-content-center " style="border-radius: 5%;">
                                        <i class="fas fa-plus p-5 text-secondary" style="font-size: 14.6rem;"></i>
                                    </div>
                                    <div class="col-lg-7 ">
                                        <div class="card-body">
                                            <h1 class="card-title text-center text-secondary">Adicionar membro</h1>
                                            <div class="d-flex text-center ml-3">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>

            </div>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="../Resources/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../Resources/assets/demo/chart-area-demo.js"></script>
    <script src="../Resources/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="../Resources/assets/demo/datatables-demo.js"></script>
</body>

</html>