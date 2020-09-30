<?php
require '../php-files/conexion.php';
//require '../controller/datosGrafico.php';
session_start();

$usuario = $_SESSION['user'];
error_reporting(0);
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
} else {
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>AdminLTE 3 | ChartJS</title>
            <!-- Tell the browser to be responsive to screen width -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
            <!-- Ionicons -->
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            <!-- Theme style -->
            <link rel="stylesheet" href="../dist/css/adminlte.min.css">
            <!-- Google Font: Source Sans Pro -->
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        </head>
        <body class="hold-transition sidebar-mini">
            <div class="wrapper">
                <!-- Navbar -->
                <nav class="main-header navbar navbar-expand navbar-dark">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="inicio.php" class="nav-link">Inicio</a>
                        </li>
                    </ul>

                    <!-- SEARCH FORM -->
                    <form class="form-inline ml-3">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search text-white"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white" data-toggle="dropdown" href="#">
                                <i class="fas fa-running"></i>
                                <b>Cerrar Sesión</b>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                <div class="dropdown-divider"></div>
                                <a href="../php-files/cerrar_sesión.php" class="dropdown-item">
                                    <i class="fas fa-power-off"></i> <strong>Salir</strong>
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- /.navbar -->

                <!-- Main Sidebar Container -->
                <aside class="main-sidebar sidebar-dark-info elevation-4">
                    <!-- Brand Logo -->
                    <a href="#" class="brand-link">
                        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                        <span class="brand-text font-weight-light"><b>SIS |</b> <strong>Anti Covid</strong></span>
                    </a>
                    <!-- Sidebar -->
                    <div class="sidebar">
                        <!-- Sidebar user panel (optional) -->
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                            <div class="image">
                                <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                            </div>
                            <div class="info">
                                <a href="#" class="d-block"><b><?php echo $usuario ?></b></a>
                            </div>
                        </div>
                        <!-- Sidebar Menu -->
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                <li class="nav-header">LISTA DE OPCIONES</li>
                                <li class="nav-item has-treeview menu-open">
                                    <a href="#" class="nav-link active">
                                        <i class="nav-icon fas fa-address-book"></i>
                                        <p> 
                                            Opciones del sistema
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="principal.php" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Tabla de Trabajadores</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="registro_covid" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Tablas de Registros</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="chartjs2.php" class="nav-link active">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Gráficos</p>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </aside>

                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <!-- Main content -->
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">

                                <?php
                                $sql = "SELECT temperatura FROM registro_covid";
                                $solicitar = mysqli_query($conexion, $sql);
                                while ($vector = mysqli_fetch_row($solicitar)) {
                                    $lista = $vector[0];
                                    //echo $vector[0];
                                    $cont = "SELECT COUNT(*) FROM registro_covid";
                                    $pedido = mysqli_query($conexion, $cont);
                                    $total = mysqli_fetch_row($pedido);
                                    $item1 = "SELECT COUNT(*) FROM registro_covid WHERE temperatura <= 36.00";
                                    $pedido1 = mysqli_query($conexion, $item1);
                                    $total1 = mysqli_fetch_row($pedido1);

                                    $item2 = "SELECT COUNT(*) FROM registro_covid WHERE temperatura > 36.00 AND temperatura <= 36.50";
                                    $pedido2 = mysqli_query($conexion, $item2);
                                    $total2 = mysqli_fetch_row($pedido2);

                                    $item3 = "SELECT COUNT(*) FROM registro_covid WHERE temperatura > 36.50 AND temperatura <= 37.00";
                                    $pedido3 = mysqli_query($conexion, $item3);
                                    $total3 = mysqli_fetch_row($pedido3);

                                    $item4 = "SELECT COUNT(*) FROM registro_covid WHERE temperatura > 37.00 AND temperatura <= 37.50";
                                    $pedido4 = mysqli_query($conexion, $item4);
                                    $total4 = mysqli_fetch_row($pedido4);

                                    $item5 = "SELECT COUNT(*) FROM registro_covid WHERE temperatura > 37.50 AND temperatura <= 38.00";
                                    $pedido5 = mysqli_query($conexion, $item5);
                                    $total5 = mysqli_fetch_row($pedido5);

                                    $item6 = "SELECT COUNT(*) FROM registro_covid WHERE temperatura > 38.00";
                                    $pedido6 = mysqli_query($conexion, $item6);
                                    $total6 = mysqli_fetch_row($pedido6);

                                    $per1 = round(($total1[0] / $total[0]) * 100, 2);
                                    $per2 = round(($total2[0] / $total[0]) * 100, 2);
                                    $per3 = round(($total3[0] / $total[0]) * 100, 2);
                                    $per4 = round(($total4[0] / $total[0]) * 100, 2);
                                    $per5 = round(($total5[0] / $total[0]) * 100, 2);
                                    $per6 = round(($total6[0] / $total[0]) * 100, 2);

                                    if (is_nan($per1)) {
                                        $per1 = 0.00;
                                    }
                                    if (is_nan($per2)) {
                                        $per2 = 0.00;
                                    }
                                    if (is_nan($per3)) {
                                        $per3 = 0.00;
                                    }
                                    if (is_nan($per4)) {
                                        $per4 = 0.00;
                                    }
                                    if (is_nan($per5)) {
                                        $per5 = 0.00;
                                    }
                                    if (is_nan($per6)) {
                                        $per6 = 0.00;
                                    }
                                }
                                ?><br>

                                <div class="col-md-6 m-auto"><br>
                                    <!-- AREA CHART -->
                                    <div class="card card-primary" style="display: none;">
                                        <div class="card-header">
                                            <h3 class="card-title">Area Chart</h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart">
                                                <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->

                                    <!-- DONUT CHART -->
                                    <div class="card card-success">
                                        <div class="card-header">
                                            <h3 class="card-title">Gráfica de Datos de Temperatura</h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->

                                    <!-- PIE CHART -->
                                    <div class="card card-danger" style="display: none;">
                                        <div class="card-header">
                                            <h3 class="card-title">Pie Chart</h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->

                                </div>
                                <!-- /.col (LEFT) -->
                                <div class="col-md-12 m-auto">
                                    <!-- LINE CHART -->
                                    <div class="card card-info" style="display: none;">
                                        <div class="card-header">
                                            <h3 class="card-title">Datos de Temperatura</h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart">
                                                <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->

                                    <!-- BAR CHART -->
                                    <div class="card card-success" style="display: none;">
                                        <div class="card-header">
                                            <h3 class="card-title">Bar Chart</h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart">
                                                <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->

                                    <!-- STACKED BAR CHART -->
                                    <div class="card card-success" style="display: none;">
                                        <div class="card-header">
                                            <h3 class="card-title">Stacked Bar Chart</h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart">
                                                <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->

                                </div>
                                <!-- /.col (RIGHT) -->
                            </div>
                            <!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </section>
                    <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->
                <footer class="main-footer">
                    <div class="float-right d-none d-sm-block">
                        <b>Version</b> 3.0.4
                    </div>
                    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
                    reserved.
                </footer>

                <!-- Control Sidebar -->
                <aside class="control-sidebar control-sidebar-dark">
                    <!-- Add Content Here -->
                </aside>
                <!-- /.control-sidebar -->
            </div>
            <!-- ./wrapper -->

            <!-- jQuery -->
            <script src="../plugins/jquery/jquery.min.js"></script>
            <!-- Bootstrap 4 -->
            <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- ChartJS -->
            <script src="../plugins/chart.js/Chart.min.js"></script>
            <!-- AdminLTE App -->
            <script src="../dist/js/adminlte.min.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="../dist/js/demo.js"></script>
            <!-- page script -->
            <script>
                $(function () {
                    /* ChartJS
                     * -------
                     * Here we will create a few charts using ChartJS
                     */

                    //--------------
                    //- AREA CHART -
                    //--------------

                    // Get context with jQuery - using jQuery's .get() method.
                    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

                    var areaChartData = {
                        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                        datasets: [
                            {
                                label: 'Digital Goods',
                                backgroundColor: 'rgba(60,141,188,0.9)',
                                borderColor: 'rgba(60,141,188,0.8)',
                                pointRadius: false,
                                pointColor: '#3b8bba',
                                pointStrokeColor: 'rgba(60,141,188,1)',
                                pointHighlightFill: '#fff',
                                pointHighlightStroke: 'rgba(60,141,188,1)',
                                data: [28, 48, 40, 19, 86, 27, 90]
                            },
                            {
                                label: 'Electronics',
                                backgroundColor: 'rgba(210, 214, 222, 1)',
                                borderColor: 'rgba(210, 214, 222, 1)',
                                pointRadius: false,
                                pointColor: 'rgba(210, 214, 222, 1)',
                                pointStrokeColor: '#c1c7d1',
                                pointHighlightFill: '#fff',
                                pointHighlightStroke: 'rgba(220,220,220,1)',
                                data: [65, 59, 80, 81, 56, 55, 40]
                            },
                        ]
                    }

                    var areaChartOptions = {
                        maintainAspectRatio: false,
                        responsive: true,
                        legend: {
                            display: false
                        },
                        scales: {
                            xAxes: [{
                                    gridLines: {
                                        display: false,
                                    }
                                }],
                            yAxes: [{
                                    gridLines: {
                                        display: false,
                                    }
                                }]
                        }
                    }

                    // This will get the first returned node in the jQuery collection.
                    var areaChart = new Chart(areaChartCanvas, {
                        type: 'line',
                        data: areaChartData,
                        options: areaChartOptions
                    })

                    //-------------
                    //- LINE CHART -
                    //--------------
                    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
                    var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
                    var lineChartData = jQuery.extend(true, {}, areaChartData)
                    lineChartData.datasets[0].fill = false;
                    lineChartData.datasets[1].fill = false;
                    lineChartOptions.datasetFill = false

                    var lineChart = new Chart(lineChartCanvas, {
                        type: 'line',
                        data: lineChartData,
                        options: lineChartOptions
                    })

                    //-------------
                    //- DONUT CHART -   <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< ¡¡¡ ACÁ ES EL DONUT !!!
                    //-------------
                    // Get context with jQuery - using jQuery's .get() method.
                    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
                    var donutData = {
                        labels: [
                            '38.5°',
                            '38.0°',
                            '37.5°',
                            '37.0°',
                            '36.5°',
                            '36.0°'
                        ],
                        datasets: [
                            {
                                data: [<?php echo $per6 ?>, <?php echo $per5 ?>, <?php echo $per4 ?>, <?php echo $per3 ?>, <?php echo $per2 ?>, <?php echo $per1 ?>],
                                backgroundColor: ['#f56954', '#f39c12', '#FFDD51', '#51CA3C', '#00c0ef', '#d2d6de'],
                            }
                        ]
                    }
                    var donutOptions = {
                        maintainAspectRatio: false,
                        responsive: true,
                    }
                    //Create pie or douhnut chart
                    // You can switch between pie and douhnut using the method below.
                    var donutChart = new Chart(donutChartCanvas, {
                        type: 'doughnut',
                        data: donutData,
                        options: donutOptions
                    })

                    //-------------
                    //- PIE CHART -
                    //-------------
                    // Get context with jQuery - using jQuery's .get() method.
                    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
                    var pieData = donutData;
                    var pieOptions = {
                        maintainAspectRatio: false,
                        responsive: true,
                    }
                    //Create pie or douhnut chart
                    // You can switch between pie and douhnut using the method below.
                    var pieChart = new Chart(pieChartCanvas, {
                        type: 'pie',
                        data: pieData,
                        options: pieOptions
                    })

                    //-------------
                    //- BAR CHART -   
                    //-------------
                    var barChartCanvas = $('#barChart').get(0).getContext('2d')
                    var barChartData = jQuery.extend(true, {}, areaChartData)
                    var temp0 = areaChartData.datasets[0]
                    var temp1 = areaChartData.datasets[1]
                    barChartData.datasets[0] = temp1
                    barChartData.datasets[1] = temp0

                    var barChartOptions = {
                        responsive: true,
                        maintainAspectRatio: false,
                        datasetFill: false
                    }

                    var barChart = new Chart(barChartCanvas, {
                        type: 'bar',
                        data: barChartData,
                        options: barChartOptions
                    })

                    //---------------------
                    //- STACKED BAR CHART -
                    //---------------------
                    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
                    var stackedBarChartData = jQuery.extend(true, {}, barChartData)

                    var stackedBarChartOptions = {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            xAxes: [{
                                    stacked: true,
                                }],
                            yAxes: [{
                                    stacked: true
                                }]
                        }
                    }

                    var stackedBarChart = new Chart(stackedBarChartCanvas, {
                        type: 'bar',
                        data: stackedBarChartData,
                        options: stackedBarChartOptions
                    })
                })
            </script>
        </body>
    </html>

    <?php
} 
