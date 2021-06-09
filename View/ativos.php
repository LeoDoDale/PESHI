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
<?php session_start(); ?>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-green py-3">
        <a class="navbar-brand" href="Membros.php"><img class="img-responsive" style="height: 45px"
                src="../resources/img/logo.png" alt=""></a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->

        <!-- Navbar-->
                <a class="nav-link text-white"    href="perfil.php"><i class="fas fa-user fa-fw"></i></a>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Inicio</div>
                        <a class="nav-link" href="Membros.php">
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
                                <a class="nav-link" href="ativos.php">Ver Ativos</a>
                                <a class="nav-link" href="despesas.php">Ver Despesas</a>
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
                        <a class="nav-link" href="relatorio.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Relatorio
                        </a>
                        <a class="nav-link" href="landingpage.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Sair
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logado como:</div>
                    <p class="nowrap"><?php echo $_SESSION['email']  ?></p> 
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content" class="bg-light">


            <div class="container-fluid pt-3 bg-light">
                <h1 class="display-4 ">Ativos</h1>
                <hr class="hr-green mb-5">
            </div>
            <div class="bg-light">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-right p-1">

                        </div>
                    </div>
                    <div class="row">
                        <table class="table">
                            <thead class="thead bg-green">
                                <tr class="text-white">
                                    <th scope="col">#</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Descricao</th>
                                    <th scope="col"><button class="btn btn-success " data-toggle="modal"
                                            data-target="#modal-ativo">Adicionar
                                        </button></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include("showativos.php") ?>

                            </tbody>
                        </table>
                    </div>


                    <div class="modal fade" id="modal-ativo" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content"
                                style="border: 0; border-radius: 0; box-shadow: 0px 0px 19px -1px rgb(0 0 0 / 75%);">
                                <form method="POST" action='addativo.php?id=<?php echo $_GET['id'] ?>'>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="close mr-2" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true" style="font-size: 2rem">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col  ">
                                            <a class="display-4 modal-title justify-content-center d-flex text-success"
                                                style="font-size: 2rem;">Cadastrar ativo</a>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col ml-4 mb-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">R$</div>
                                                </div>
                                                <input type="number" class="form-control" name="valor"
                                                    placeholder="Valor">
                                            </div>
                                        </div>
                                        <div class="col mr-4 mb-3">
                                            <input type="date" class="form-control" name="data" placeholder="Senha">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mx-4 mb-3">
                                            <div class="form-group">
                                                <textarea class="form-control" name="descricao"
                                                    placeholder="Descricao do ativo" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mb-4 ">
                                        <button type="submit" class="btn btn-success w-25">Cadastrar</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    <!-- <div class="modal fade" id="modal-remover" tabMembros="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Excluir ativo</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Tem certeza que deseja remover este ativo?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-danger">Remover</button>
                                </div>
                            </div>
                        </div>
                    </div> -->



                </div>

            </div>


            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; PESHI</div>
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