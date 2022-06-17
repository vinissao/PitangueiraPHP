<?php
include("check_login.php");
include("conexao.php");

$consulta1 = 'select * from tb_clientes';
$consulta2 = 'select * from tb_tecnico';
$consulta3 = 'select * from tb_tipoatendimento';
$result1 = mysqli_query($conexao, $consulta1);
$result2 = mysqli_query($conexao, $consulta2);
$result3 = mysqli_query($conexao, $consulta3);


if (isset($_POST))
    print_r($_POST['cliente']);
    print_r("<br>");
    print_r($_POST['tecnico']);
    print_r("<br>");
    print_r($_POST['atendimento']);
    print_r("<br>");
    print_r($_POST['data']);
    print_r("<br>");
    print_r($_POST['observacao']);
    print_r("<br>");
    print_r($_POST['status']);
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>PITANGUEIRA MANUTEÇÃO DE HARDWARE LTDA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">Pitangueira</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"></h6>
                        <h6 class="mb-0"><?php echo $_SESSION['usuario']; ?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="pg_inicial.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Administração</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="registro_chamado.php" class="dropdown-item">Registrar Chamado</a>
                            <a href="relatorios.php" class="dropdown-item">Relatórios</a>
                            <a href="registro_cliente.php" class="dropdown-item">Cadastro Cliente</a>

                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex" <?php echo $_SESSION['usuario'];
                                                                    ?> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="sair.php" class="dropdown-item">Sair</a>
                        </div>
                    </div>
                </div>
            </nav>
            <br>
            <br>
            <form action="registro_chamado.php" method="POST">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Registro de Chamado</h6>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="cliente" id="cliente" aria-label="Selecione o Cliente">
                            <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>
                            <?php endwhile; ?>
                        </select>
                        <label for="floatingSelect">Selecione o Cliente</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="tecnico" id="tecnico" aria-label="Selecione o Técnico">
                            <?php while ($row1 = mysqli_fetch_array($result2)) :; ?>
                                <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>
                            <?php endwhile; ?>
                        </select>
                        <label for="floatingSelect">Selecione o Técnico</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="atendimento" id="atendimento" aria-label="Tipo de Atendimento">
                            <?php while ($row1 = mysqli_fetch_array($result3)) :; ?>
                                <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>
                            <?php endwhile; ?>
                        </select>
                        <label for="floatingSelect">Tipo de atendimento</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" name="data" id="data" placeholder="Data">
                        <label for="floatingInput">Data</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" name="observacao" id="observacao" style="height: 100px;"></textarea>
                        <label for="floatingTextarea">Observação</label>
                    </div>
                    <div class="form-floating">
                        <br>
                        <h8 class="mb-4">Status</h8>
                        <br>
                        <div class="btn-group" role="group">
                            <input type="radio" class="btn-check" name="status" id="Aberto" value="Aberto"autocomplete="off">
                            <label class="btn btn-outline-primary" for="btnradio1">Aberto</label>
                            <input type="radio" class="btn-check" name="status" id="EmAtendimento" value="EmAtendimento" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btnradio2">Em Atendimento</label>
                            <input type="radio" class="btn-check" name="status" id="Encerrado" value="Encerrado" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btnradio3">Encerrado</label>
                        </div>
                        <div class="m-n2">
                            <br>
                            <form action="registro_chamado.php">
                                <input type="submit" name="submit" id = "submit" class="btn btn-primary m-2" value="Registrar Chamado" />
                            </form>
                        </div>
                    </div>
                </div>
        </div>

    </div>



    </div>



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>