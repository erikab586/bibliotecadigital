<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>BIBLIOTECADIGITAL | INICIAR</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="assetsadmin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="assetsadmin/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="assetsadmin/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="assetsadmin/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="assetsadmin/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="assetsadmin/css/themes/all-themes.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.all.min.js"></script>
</head>

<body style="background-color: #3C8DBC;">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>CARGANDO...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    

    <section class="content">
        <div class="container-fluid">
        <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center;"> 
                    <img src="<?=base_url($configuracion['logo'])?>" alt="Logo" style="max-width:100%; width:200px; height:auto;">
                </div>

            </div>

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                INICIAR SESIÓN
                            </h2>
                        </div>
                        <div class="body">
                            <form id="login">
                                <label for="email_address">Email</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <label for="password">Password</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" id="password" name="password"  class="form-control" placeholder="Password">
                                    </div>
                                </div>

                                
                                <button type="submit" class="btn btn-block btn-lg btn-primary m-t-15 waves-effect">Iniciar Sesión</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                document.getElementById('login').addEventListener('submit', function(e) {
                    e.preventDefault();

                    const formData = new FormData(this);

                    fetch('<?= base_url("/verificar") ?>', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            Swal.fire('Bienvenido al administrador Biblioteca Digital. ').then(() => {
                                window.location.href = '<?= base_url("/alumnos") ?>';
                            });
                        } else {
                            Swal.fire('Error!!! Verificar credenciales.');
                        }
                    })
                    .catch(error => {
                        Swal.fire('Hubo problema');
                    });
                });
            </script>
            <!-- #END# Vertical Layout -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="assetsadmin/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="assetsadmin/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="assetsadmin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="assetsadmin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="assetsadmin/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="assetsadmin/js/admin.js"></script>

    <!-- Demo Js -->
    <script src="assetsadmin/js/demo.js"></script>
</body>

</html>
