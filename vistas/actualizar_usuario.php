<?php
session_start();
require '../php-files/conexion.php';

$usuario = $_SESSION['user'];
error_reporting(0);
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
} else {
    ?>
    <!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>SIS | Anti-Covid</title>
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
                                <li class="nav-item has-treeview menu-close">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-user-clock"></i>
                                        <p>
                                            Inicio
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="inicio.php" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Ingresar</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-header">OPCIONES DE USUARIO</li>
                                <li class="nav-item">
                                    <a href="actualizar_usuario.php" class="nav-link active">
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
                            <!-- FORMULARIO DE DATOS DEL COLEGIO -->
                            <div class="col-md-6 m-auto">
                                <div class="card">
                                    <div class="card-header card-info card-outline">
                                        <h3 class="card-title">
                                            <b><i class="fas fa-atom"></i>
                                                SIS | Anti Covid - Datos del Usuario</b>
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <?php
                                        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
                                        $request = mysqli_query($conexion, $sql);
                                        $array = mysqli_fetch_row($request);
                                        $datos = $array[0] . "||" . $array[1] . "||" . $array[2] . "||" . $array[3];
                                        ?>
                                        <form action="" id="formDatos">
                                            <div class="row col-10 m-auto">
                                                <div class="form-group col-12">
                                                    <label>Nombre de Usuario:</label>
                                                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $array[1]; ?>" disabled>
                                                </div>
                                                <div class="form-group col-12">
                                                    <label>Correo Electrónico:</label>
                                                    <input type="correo" class="form-control" id="direccion" name="direccion" value="<?php echo $array[2]; ?>" disabled>
                                                </div>
                                                <div class="form-row col-12">
                                                    <div class="form-group col-4"></div>
                                                    <div class="form-group col-4">
                                                        <button type="button" data-toggle="modal" data-target="#modal-act" class="btn btn-block bg-info" onclick="agregarForm('<?php echo $datos; ?>')">
                                                            <span><i class="fas fa-edit"></i></span>
                                                            Actualizar
                                                        </button>
                                                    </div>
                                                    <div class="form-group col-4"></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <?php require './footer.php'; ?>
            </div>

            <div class="modal fade" id="modal-act">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h4 class="modal-title">Actualizar Datos del Usuario</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <input type="number" hidden="" id="id">
                                <div class="form-group col-12">
                                    <label>Nombre de Usuario:</label>
                                    <input type="text" class="form-control" id="nombreA" name="nombreA">
                                </div>
                                <div class="form-group col-12">
                                    <label>Correo Electrónico:</label>
                                    <input type="email" class="form-control" id="correoA" name="direccionA">
                                </div>
                                <div class="form-group col-12">
                                    <label>Contraseña:</label>
                                    <input type="password" class="form-control" id="claveA" name="correoA">
                                </div>
                                <div class="form-group col-12">
                                    <label>Confirmar Contraseña:</label>
                                    <input type="password" class="form-control" id="clave2A" name="correoA">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-info" id="btnMod">Actualizar</button>
                        </div>
                    </div>
                </div>
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

            <script>
                function agregarForm(datos) {
                    d = datos.split('||');
                    $('#id').val(d[0]);
                    $('#nombreA').val(d[1]);
                    $('#correoA').val(d[2]);
                    $('#claveA').val(d[3]);
                    $('#clave2A').val(d[3]);
                }
            </script>

            <script type="text/javascript">
                $(document).ready(function () {
                    $('#btnMod').click(function () {
                        actualizarDatos();
                    });
                });

                function actualizarDatos() {
                    if ($('#nombreA').val() == "") {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Oops...',
                            text: 'No has ingresado nombre de usuario'
                        });
                        return false;
                    }
                    if ($('#correoA').val() == "") {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Oops...',
                            text: 'No has ingresado correo'
                        });
                        return false;
                    }
                    if ($('#claveA').val() == "") {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Oops...',
                            text: 'No has ingresado contraseña'
                        });
                        return false;
                    }
                    if ($('#clave2A').val() == "") {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Oops...',
                            text: 'No has ingresado confirmación de contraseña'
                        });
                        return false;
                    }
                    if ($('#claveA').val() != $('#clave2A').val()) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Oops...',
                            text: 'La confirmación de contraseña no coincide'
                        });
                        return false;
                    }

                    id = $('#id').val();
                    nombreA = $('#nombreA').val();
                    correoA = $('#correoA').val();
                    claveA = $('#claveA').val();

                    cadena = "id=" + id +
                            "&nombreA=" + nombreA +
                            "&correoA=" + correoA +
                            "&claveA=" + claveA;
                    
                    $.ajax({
                        type: "POST",
                        url: "../controller/actualizar_usuario.php",
                        data: cadena,
                        success: function (r) {
                            if (r == 1) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Se ha actualizado con éxito',
                                    showConfirmButton: false,
                                    html: '<a href="actualizar_usuario.php"><button class="btn btn-block btn-success btn-lg col-4 m-auto" style="border-radius:5px;">OK</button></a>'
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: '¡ERROR!',
                                    text: 'Ha ocurrido un error al actualizar los datos'
                                });
                            }
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
