<?php
session_start();
require '../php-files/conexion.php';

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
        <body class="hold-transition sidebar-mini">
            <div class="wrapper">
                <!-- Navbar -->
                <nav class="main-header navbar navbar-expand navbar-dark navbar-info">
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
                        <span class="brand-text font-weight-light"><b>SIS |</b> <strong>Anti-Covid</strong></span>
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
                                <li class="nav-header">INGRESO </li>
                                <li class="nav-item has-treeview menu-open">
                                    <a href="#" class="nav-link active">
                                        <i class="nav-icon fas fa-user-clock"></i>
                                        <p>
                                            Inicio
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="inicio.php" class="nav-link active">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Ingresar</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li class="nav-header">OPCIONES DE USUARIO</li>
                                <li class="nav-item">
                                    <a href="actualizar_usuario.php" class="nav-link">
                                        <i class="far fa-circle nav-icon text-purple"></i>
                                        <p>Actualizar Datos</p>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </aside>

                <!-- CONTENIDO DE LA VISTA -->
                <div class="content-wrapper">
                    <section class="content-header">
                        <div class="container-fluid">
                            <!-- SELECCIÓN DE AÑO ACADÉMICO-->
                            <div class="col-md-6 m-auto">
                                <div class="card">
                                    <div class="card-header card-info card-outline">
                                        <h3 class="card-title">
                                            <b><i class="fas fa-atom"></i>
                                                SIS | Anti Covid - Bienvenido</b>
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <div><h1 class="text-center"><b>¡Bienvenido <?php echo $usuario; ?>!</b></h1></div><br>
                                        <div><h4 class="text-center">Pulsa el botón para iniciar</h4></div><br>
                                        
                                            <br>
                                            <div class="col-6 m-auto">
                                                <a href="principal.php"><button type="submit" class="btn btn-block btn-info btn-lg">Ingresar</button></a>
                                            </div><br>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
                <?php require './footer.php'; ?>
            </div>
            
            <!-- SweetAlert -->
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
            <!-- DataTables -->
            <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
            <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
            <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
            <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
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
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker4').datetimepicker({
                        format: 'L'
                    });
                });
            </script>

            <script>
                $(function () {
                    $("#example1").DataTable({
                        "responsive": true,
                        "autoWidth": false,
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
            </script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#btnNuevoAnio').click(function () {
                        nuevo_anio = $('#nuevo_anio').val();
                        guardarAnio(nuevo_anio);
                    });
                });
            </script>
            <script>
                function guardarAnio(nuevo_anio) {
                    dato = "nuevo_anio=" + nuevo_anio;

                    $.ajax({
                        type: "POST",
                        url: "../controller/registrar_anio.php",
                        data: dato,
                        success: function (r) {
                            $('#formAnio')[0].reset();
                            if (r == 1) {
                                window.location.href = "inicio.php";
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: '¡ERROR!',
                                    text: 'Ha ocurrido un error al validar el usuario'
                                });
                            }
                        }
                    });
                }
            </script>
            <script>
                function eliminarDatos(id) {

                    Swal.fire({
                        title: '¿Estás seguro?',
                        text: "¡Esta acción no podrá revertirse!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#28a745',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sí, eliminar registro',
                        cancelButtonText: 'Cancelar'

                    }).then((willDelete) => {
                        if (willDelete.value) {
                            $.ajax({
                                type: "POST",
                                data: "id=" + id,
                                url: "../controller/eliminarAnio.php",
                                success: function (r) {
                                    if (r == 1) {
                                        Swal.fire({
                                            icon: 'success',
                                            title: '¡Eliminado!',
                                            titleText: 'Se ha eliminado correctamente',
                                            showConfirmButton: false,
                                            html: '<a href="inicio.php"><button class="btn btn-block btn-success btn-lg col-4 m-auto" style="border-radius:5px;">OK</button></a>'
                                        });
                                    } else {
                                        Swal.fire({
                                            icon: 'error',
                                            title: '¡Error!',
                                            text: 'Fallo al intentar eliminar'
                                        });
                                    }
                                }
                            });
                        }
                    });
                }
            </script>

            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker11').datetimepicker({
                        viewMode: 'years',
                        format: 'YYYY'
                    });
                });
            </script>
        </body>
    </html>

    <?php
}



    