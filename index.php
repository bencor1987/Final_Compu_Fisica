<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SIS | Anti Covid</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- daterange picker -->
        <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
        <!-- Bootstrap4 Duallistbox -->
        <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <link rel="stylesheet" href="index.css">
    </head>
    <body class="hold-transition">
        <div class="col-3 m-auto">
            <div class="login-logo text-white">
                <b>SIS Anti-Covid</b>
            </div>
            <div class="card card-info card-dark" style="opacity: 0.9;">
                <div class="card-header">
                    <h3 class="card-title text-center m-auto"><b>Login de Usuario</b></h3>
                </div>
                <form class="form-horizontal">
                    <div class="card-body" style="background-color: #5D5D5D">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="usuario" placeholder="Usuario">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="password" class="form-control" id="clave" placeholder="Contraseña">
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- <a href="vistas/registro.php" class="text-center text-white">Registrar como nuevo usuario</a> -->
                        </div>
                    </div>

                    <div class="card-footer" style="background-color: #494949">
                        <div class="col-8 m-auto">
                            <button type="button" id="btnIngresar" accesskey="enter" class="btn btn-block btn-info">Ingresar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- CDN SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Select2 -->
        <script src="plugins/select2/js/select2.full.min.js"></script>
        <!-- Bootstrap4 Duallistbox -->
        <script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
        <!-- InputMask -->
        <script src="plugins/moment/moment.min.js"></script>
        <script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
        <!-- date-range-picker -->
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap color picker -->
        <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Bootstrap Switch -->
        <script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <!-- DataTables -->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#btnIngresar').click(function () {
                    usuario = $('#usuario').val();
                    clave = $('#clave').val();
                    validarUsuario(usuario, clave);
                });
            });
        </script>
        <script>
            function validarUsuario(usuario, clave) {
                if ($('#usuario').val() == "") {
                    Swal.fire({
                        position: 'top',
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'No has agregado nombre de usuario'
                    });
                    return false;
                }
                if ($('#clave').val() == "") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'No has agregado contraseña'
                    });
                    return false;
                }

                datos = "usuario=" + usuario +
                        "&clave=" + clave;

                $.ajax({
                    type: "POST",
                    url: "controller/validarUsuario.php",
                    data: datos,
                    success: function (r) {
                        if (r == 1) {
                            window.location.href = "vistas/inicio.php";
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
    </body>
</html>

