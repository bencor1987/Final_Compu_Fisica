<?php 
    require '../../php-files/conexion.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 3 | Advanced form elements</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- daterange picker -->
        <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
        <!-- Bootstrap4 Duallistbox -->
        <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
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
                        <a href="#" class="nav-link">Home</a>
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

                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link text-white" data-toggle="dropdown" href="#">
                            <i class="fas fa-user-tie "></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">Opciones de Usuario</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-power-off"></i> <strong>Salir</strong>
                                <span class="float-right text-muted text-sm"></span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <p class="dropdown-item dropdown-footer"></p>
                        </div>
                    </li>
                </ul> 
            </nav>

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="../../index3.html" class="brand-link">
                    <img src="../../dist/img/AdminLTELogo.png"
                         alt="AdminLTE Logo"
                         class="brand-image img-circle elevation-3"
                         style="opacity: .8">
                    <span class="brand-text font-weight-light">SIS | Santa Rosa</span>
                </a>
                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">Admin</a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                        Forms
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="../forms/general.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>General Elements</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../forms/advanced.html" class="nav-link active">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Advanced Elements</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../forms/editors.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Editors</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../forms/validation.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Validation</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-header">EXAMPLES</li>
                        </ul>
                    </nav>
                </div>
            </aside>

            <!-- COTENIDO DE LA VISTA -->
            <div class="content-wrapper"><br>
                <section class="content">
                    <div class="container-fluid">
                        <!-- SELECT2 EXAMPLE -->
                        <div class="card card-lightblue card-outline col-md-8 m-auto">
                            <div class="card-header ">
                                <h3 class="card-title"><b>Registro de Profesores</b></h3>
                            </div>
                            <div class="card-body">
                                <form action="../../controller/guardar_multiple.php" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nombres</label>
                                                <input class="form-control" type="text" id="nombres" name="nombres" placeholder="Nombres" style="text-transform: capitalize;">
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Apellido Paterno</label>
                                            <input class="form-control" type="text" id="paterno" name="paterno" placeholder="Apellido Paterno">
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Apellido Materno</label>
                                            <input class="form-control" type="text" id="materno" name="materno" placeholder="Apellido Materno">
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Tipo de Documento</label>
                                            <select class="form-control select2 select2-info" name="tipo_doc" id="tipo_doc" data-dropdown-css-class="select2-info">
                                                <option value="0" disabled selected>Seleccione</option>
                                                <option value="dni">DNI</option>
                                                <option value="pasaporte">Pasaporte</option>
                                                <option value="carnet de extranjeria">Carnet de Extranjería</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Nro de Documento</label>
                                            <input class="form-control" type="number" id="nro_doc" name="nro_doc" placeholder="Nro de Documento">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Dirección</label>
                                                <input class="form-control" type="text" id="direccion" name="direccion" placeholder="Dirección">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Correo Electrónico</label>
                                                <input class="form-control" type="text" id="correo" name="correo" placeholder="Correo Electrónico">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Teléfono/Celular</label>
                                            <input class="form-control" type="number" id="tel_cel" name="tel_cel" placeholder="Teléfono/Celular">
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Selector de curso(s)</label>
                                                <div class="select2-info">
                                                    <select class="select2" name="cursos[]" multiple="multiple" data-placeholder="Seleccione curso(s)" data-dropdown-css-class="select2-info" style="width: 100%;">
                                                        <option>Alabama</option>
                                                        <option>Alaska</option>
                                                        <option>California</option>
                                                        <option>Delaware</option>
                                                        <option>Tennessee</option>
                                                        <option>Texas</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="form-row">
                                        <div class="form-group col-3"></div>
                                        <div class="form-group col-3">
                                            <button type="submit" value="guardar" class="btn btn-block btn-success">Registrar</button>
                                        </div>
                                        <div class="form-group col-3">
                                            <button type="reset" value="borrar" class="btn btn-block btn-danger">Cancelar</button>
                                        </div>
                                        <div class="form-group col-3"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                </section>
            </div>
            <?php require '../../vistas/footer.php'; ?>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="../../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Select2 -->
        <script src="../../plugins/select2/js/select2.full.min.js"></script>
        <!-- Bootstrap4 Duallistbox -->
        <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
        <!-- InputMask -->
        <script src="../../plugins/moment/moment.min.js"></script>
        <script src="../../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
        <!-- date-range-picker -->
        <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap color picker -->
        <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Bootstrap Switch -->
        <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../dist/js/demo.js"></script>
        <!-- Page script -->
        <script>
                                                $(function () {
                                                    //Initialize Select2 Elements
                                                    $('.select2').select2()

                                                    //Initialize Select2 Elements
                                                    $('.select2bs4').select2({
                                                        theme: 'bootstrap4'
                                                    })

                                                    //Datemask dd/mm/yyyy
                                                    $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'})
                                                    //Datemask2 mm/dd/yyyy
                                                    $('#datemask2').inputmask('mm/dd/yyyy', {'placeholder': 'mm/dd/yyyy'})
                                                    //Money Euro
                                                    $('[data-mask]').inputmask()

                                                    //Date range picker
                                                    $('#reservationdate').datetimepicker({
                                                        format: 'L'
                                                    });
                                                    //Date range picker
                                                    $('#reservation').daterangepicker()
                                                    //Date range picker with time picker
                                                    $('#reservationtime').daterangepicker({
                                                        timePicker: true,
                                                        timePickerIncrement: 30,
                                                        locale: {
                                                            format: 'MM/DD/YYYY hh:mm A'
                                                        }
                                                    })
                                                    //Date range as a button
                                                    $('#daterange-btn').daterangepicker(
                                                            {
                                                                ranges: {
                                                                    'Today': [moment(), moment()],
                                                                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                                                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                                                                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                                                                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                                                                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                                                                },
                                                                startDate: moment().subtract(29, 'days'),
                                                                endDate: moment()
                                                            },
                                                            function (start, end) {
                                                                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                                                            }
                                                    )

                                                    //Timepicker
                                                    $('#timepicker').datetimepicker({
                                                        format: 'LT'
                                                    })

                                                    //Bootstrap Duallistbox
                                                    $('.duallistbox').bootstrapDualListbox()

                                                    //Colorpicker
                                                    $('.my-colorpicker1').colorpicker()
                                                    //color picker with addon
                                                    $('.my-colorpicker2').colorpicker()

                                                    $('.my-colorpicker2').on('colorpickerChange', function (event) {
                                                        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
                                                    });

                                                    $("input[data-bootstrap-switch]").each(function () {
                                                        $(this).bootstrapSwitch('state', $(this).prop('checked'));
                                                    });

                                                })
        </script>
    </body>
</html>
