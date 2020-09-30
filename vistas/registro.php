<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SIS | Santa Rosa</title>
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
    <body class="hold-transition register-page">
        <div class="col-3 m-auto">
            <div class="login-logo">
                <b>SIS</b> Santa Rosa</a>
            </div>
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title text-center">Registro de Usuario</h3>
                </div>
                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="usuario" placeholder="Usuario">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="correo" placeholder="E-mail">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="password" class="form-control" id="clave" placeholder="Contraseña">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="password" class="form-control" id="clave2" placeholder="Confirmar contraseña">
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="../index.php" class="m-auto">Ya tengo una cuenta de usuario</a>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="col-8 m-auto">
                            <button type="button" id="btnUsuario" accesskey="enter" class="btn btn-block btn-info">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Script Sweet Alert 2-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <!-- jQuery -->
        <script src="../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../dist/js/adminlte.min.js"></script>
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

        <!-- Scripts -->
        <script type="text/javascript">
            $(document).ready(function () {
                $('#btnUsuario').click(function () {
                    usuario = $('#usuario').val();
                    correo = $('#correo').val();
                    clave = $('#clave').val();
                    clave2 = $('#clave2').val();
                    agregarUsuario(usuario, correo, clave, clave2);
                });
            });

            function agregarUsuario(usuario, correo, clave, clave2) {
                if ($('#usuario').val() == "") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'No has ingresado un nombre de usuario'
                    });
                    return false;
                }
                if ($('#correo').val() == "") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'No has ingresado un correo'
                    });
                    return false;
                }
                if ($('#clave').val() == "") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'No has ingresado una contraseña'
                    });
                    return false;
                }
                if ($('#clave2').val() == "") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'No has ingresado una contraseña de confirmación'
                    });
                    return false;
                }
                if ($('#clave').val() != $('#clave2').val()) {
                 Swal.fire({
                 icon: 'warning',
                 title: 'Oops...',
                 text: 'La contraseña de confirmación no coincide'
                 });
                 return false;
                 }
                 
                 datos = "usuario=" + usuario +
                         "&correo=" + correo +
                         "&clave=" + clave;
                 
                 $.ajax({
                        type: "POST",
                        url: "../controller/registrar_usuario.php",
                        data: datos,
                        success: function (r) {
                            if (r == 1) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Se ha registrado con éxito',
                                    showConfirmButton: false,
                                    html: '<a href="registro.php"><button class="btn btn-block btn-success btn-lg col-4 m-auto" style="border-radius:5px;">OK</button></a>'
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: '¡ERROR!',
                                    text: 'Ha ocurrido un error al registrar sección'
                                });
                            }
                        }
                    });
            }
        </script>
    </body>
</html>

