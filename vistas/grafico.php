<?php
require '../php-files/conexion.php';
session_start();

$usuario = $_SESSION['user'];
error_reporting(0);
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
} else {
    ?>
    <!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>SIS | Anti Covid</title>
            <!-- Tell the browser to be responsive to screen width -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
            <!-- Ionicons -->
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            <!-- daterange picker -->
            <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
            <!-- iCheck for checkboxes and radio inputs -->
            <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
            <!-- Bootstrap Color Picker -->
            <link rel="stylesheet" href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
            <!-- Tempusdominus Bbootstrap 4 -->
            <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
            <!-- Select2 -->
            <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
            <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
            <!-- Bootstrap4 Duallistbox -->
            <link rel="stylesheet" href="../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
            <!-- Theme style -->
            <link rel="stylesheet" href="../dist/css/adminlte.min.css">
            <!-- Google Font: Source Sans Pro -->
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        </head>
        <body class="hold-transition sidebar-mini layout-fixed">
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

                <!-- CONTENIDO SIDEBAR -->
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
                                            <a href="grafico.php" class="nav-link active">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Gráficos</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Registrar Grados</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </aside>

                <!-- CONTENIDO DE LA VISTA: GRADOS -->
                <div class="content-wrapper"><br>
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 m-auto">
                                    <!-- *** INGRESAR CÓDIGO PARA GENERAR CHARTS CON CADA GRADO *** --><br>
                                    <div class="card card-success">
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
                                    <!-- GRAfico -->

                                    <!-- PIE CHART -->
                                    <div class="card card-danger">
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

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <?php require './footer.php'; ?>
            </div>

            <!-- CDN SweetAlert2 -->
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <!-- jQuery -->
            <script src="../plugins/jquery/jquery.min.js"></script>
            <!-- Bootstrap 4 -->
            <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Select2 -->
            <script src="../plugins/select2/js/select2.full.min.js"></script>
            <!-- Bootstrap4 Duallistbox -->
            <script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
            <!-- InputMask -->
            <script src="../plugins/moment/moment.min.js"></script>
            <script src="../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
            <!-- date-range-picker -->
            <script src="../plugins/daterangepicker/daterangepicker.js"></script>
            <!-- bootstrap color picker -->
            <script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
            <!-- Tempusdominus Bootstrap 4 -->
            <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
            <!-- Bootstrap Switch -->
            <script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
            <!-- AdminLTE App -->
            <script src="../dist/js/adminlte.min.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="../dist/js/demo.js"></script>
            <!-- OPTIONAL SCRIPTS -->
            <script src="../plugins/chart.js/Chart.min.js"></script>
            <script src="../dist/js/pages/dashboard3.js"></script>
            <!-- DataTables -->
            <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
            <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
            <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
            <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
            <!-- Botones para reportes -->
            <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
            <script src="../plugins/datatables-buttons/js/buttons.flash.min.js"></script>
            <script src="../plugins/jszip/jszip.min.js"></script>
            <script src="../plugins/pdfmake/vfs_fonts.js"></script>
            <script src="../plugins/pdfmake/pdfmake.min.js"></script>
            <script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
            <script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
            <!-- page script -->
            <script>
                $(function () {
                    //Initialize Select2 Elements
                    $('.select2').select2();

                    //Initialize Select2 Elements
                    $('.select2bs4').select2({
                        theme: 'bootstrap4'
                    });

                });
            </script>
            <!-- Funciones JS -->
            <!-- <script>
                $(function () {
                    $("#example1").DataTable({
                        "responsive": true,
                        "autoWidth": false,
                        dom: 'Bfrtip',
                        buttons: [
                            {
                                extend: 'copy',
                                text: '<i class="fas fa-copy"></i> <b>Copiar</b>',
                                className: 'btn btn-info'
                            },
                            {
                                extend: 'csv',
                                text: '<i class="fas fa-file-csv"></i> <b>CSV</b>',
                                className: 'btn btn-danger'
                            },
                            {
                                extend: 'excel',
                                text: '<i class="fas fa-file-excel"></i> <b>Excel</b>',
                                className: 'btn btn-success'
                            },
                            {
                                extend: 'print',
                                text: '<i class="fas fa-print"></i> <b>Imprimir</b>',
                                className: 'btn btn-dark'
                            },
                        ],
                        language: {
                            "sProcessing": "Procesando...",
                            "sLengthMenu": "Mostrar _MENU_ registros",
                            "sZeroRecords": "No se encontraron resultados",
                            "sEmptyTable": "Ningún dato disponible en esta tabla",
                            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                            "sInfoPostFix": "",
                            "sSearch": "Buscar:",
                            "sUrl": "",
                            "sInfoThousands": ",",
                            "sLoadingRecords": "Cargando...",
                            "oPaginate": {
                                "sFirst": "Primero",
                                "sLast": "Último",
                                "sNext": "Siguiente",
                                "sPrevious": "Anterior"
                            },
                            "oAria": {
                                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                            },
                            "buttons": {
                                "copy": "Copiar",
                                "colvis": "Visibilidad",
                                "print": "Imprimir"
                            }
                        }
                    });
                });
            </script> -->
            <!-- Scripts de Charts JS -->
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
                    //- DONUT CHART -
                    //-------------
                    // Get context with jQuery - using jQuery's .get() method.
                    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
                    var donutData = {
                        labels: [
                            'Chrome',
                            'IE',
                            'FireFox',
                            'Safari',
                            'Opera',
                            'Navigator',
                        ],
                        datasets: [
                            {
                                data: [700, 500, 400, 600, 300, 100],
                                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
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



