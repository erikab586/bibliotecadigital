<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>BIBLIOTECADIGITAL | ADMIN</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?= base_url('assetsadmin/plugins/bootstrap/css/bootstrap.css')?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?= base_url('assetsadmin/plugins/node-waves/waves.css')?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?= base_url('assetsadmin/plugins/animate-css/animate.css')?>" rel="stylesheet" />

    <!-- Morris Chart Css-->
     <!-- Bootstrap Select Css -->
    <link href="<?= base_url('assetsadmin/plugins/bootstrap-select/css/bootstrap-select.css')?>" rel="stylesheet" />
    <link href="<?= base_url('assetsadmin/plugins/morrisjs/morris.css')?>" rel="stylesheet" />
    <!-- Dropzone Css -->
    <link href="<?=base_url('assetsadmin/plugins/dropzone/dropzone.css')?>" rel="stylesheet">
    <!-- JQuery DataTable Css -->
    <link href="<?= base_url('assetsadmin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <!-- Custom Css -->
    <link href="<?= base_url('assetsadmin/css/style.css')?>" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?= base_url('assetsadmin/css/themes/all-themes.css')?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.all.min.js"></script>

</head>

<body class="theme-red">
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
            <p>Cargando...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="Buscar por: ">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">BIBLIOTECA DIGITAL - ADMIN</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                        <li><a href="<?=base_url('/salir')?>" class="btn btn-primary">Salir</a></li>
                  </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?=base_url('../assetsadmin/images/user.png')?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=session('nombre')." ".session('apellido')?></div>
                    <div class="email"><?=session('email')?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?=base_url('/salir')?>"><i class="material-icons">input</i>Salir</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENÚ PRINCIPAL</li>
                    <!--li class="active">
                        <a href="index.html">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>    
                    </li-->
                    <li>
                        <a href="<?= base_url('/alumnos')?>">
                            <i class="material-icons">text_fields</i>
                            <span>Alumnos</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('/carreras')?>">
                            <i class="material-icons">text_fields</i>
                            <span>Carreras</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('/consultas')?>">
                            <i class="material-icons">text_fields</i>
                            <span>Consultas</span>
                        </a>
                    </li>
                    <!--li>
                        <a href="<?= base_url('/descargas')?>">
                            <i class="material-icons">text_fields</i>
                            <span>Descargas</span>
                        </a>
                    </li-->
                    <li>
                        <a href="<?= base_url('/libros')?>">
                            <i class="material-icons">layers</i>
                            <span>Libros</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">person</i>
                            <span>Usuarios</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?= base_url('/usuarios')?>" class="menu-toggle">
                                    <span>Usuarios</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('/roles')?>" class="menu-toggle">
                                    <span>Roles</span>
                                </a>
                            </li>
                        </ul>
                    </li> 
                    <li>
                        <a href="<?= base_url('/configurar')?>">
                            <i class="material-icons">text_fields</i>
                            <span>Configuración</span>
                        </a>
                    </li>   
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2025 <a href="javascript:void(0);">BIBLIOTECADIGITAL- ADMIN</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <?php
        echo $this->renderSection("contenido");
    ?>

    <!-- Jquery Core Js -->
    <script src="<?= base_url('assetsadmin/plugins/jquery/jquery.min.js')?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?= base_url('assetsadmin/plugins/bootstrap/js/bootstrap.js')?>"></script>

    <!-- Select Plugin Js -->
    <script src="<?= base_url('assetsadmin/plugins/bootstrap-select/js/bootstrap-select.js')?>"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?= base_url('assetsadmin/plugins/jquery-slimscroll/jquery.slimscroll.js')?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?= base_url('assetsadmin/plugins/node-waves/waves.js')?>"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?= base_url('assetsadmin/plugins/jquery-countto/jquery.countTo.js')?>"></script>

    <!-- Morris Plugin Js -->
    <script src="<?= base_url('assetsadmin/plugins/raphael/raphael.min.js')?>"></script>
    <script src="<?= base_url('assetsadmin/plugins/morrisjs/morris.js')?>"></script>

    <!-- ChartJs -->
    <script src="<?= base_url('assetsadmin/plugins/chartjs/Chart.bundle.js')?>"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?= base_url('assetsadmin/plugins/flot-charts/jquery.flot.js')?>"></script>
    <script src="<?= base_url('assetsadmin/plugins/flot-charts/jquery.flot.resize.js')?>"></script>
    <script src="<?= base_url('assetsadmin/plugins/flot-charts/jquery.flot.pie.js')?>"></script>
    <script src="<?= base_url('assetsadmin/plugins/flot-charts/jquery.flot.categories.js')?>"></script>
    <script src="<?= base_url('assetsadmin/plugins/flot-charts/jquery.flot.time.js')?>"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?= base_url('assetsadmin/plugins/jquery-sparkline/jquery.sparkline.js')?>"></script>

    <script src="<?= base_url('assetsadmin/plugins/jquery-datatable/jquery.dataTables.js')?>"></script>
    <script src="<?= base_url('assetsadmin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')?>"></script>
    <script src="<?= base_url('assetsadmin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')?>"></script>
    <script src="<?= base_url('assetsadmin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')?>"></script>
    <script src="<?= base_url('assetsadmin/plugins/jquery-datatable/extensions/export/jszip.min.js')?>"></script>
    <script src="<?= base_url('assetsadmin/plugins/jquery-datatable/extensions/export/pdfmake.min.js')?>"></script>
    <script src="<?= base_url('assetsadmin/plugins/jquery-datatable/extensions/export/vfs_fonts.js')?>"></script>
    <script src="<?= base_url('assetsadmin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')?>"></script>
    <script src="<?= base_url('assetsadmin/plugins/jquery-datatable/extensions/export/buttons.print.min.js')?>"></script>
    

    <!-- Custom Js -->
    <script src="<?= base_url('assetsadmin/js/admin.js')?>"></script>
    <script src="<?= base_url('assetsadmin/js/pages/tables/jquery-datatable.js')?>"></script>
    <script src="<?= base_url('assetsadmin/js/pages/index.js')?>"></script>

    <!-- Demo Js -->
         <!-- Dropzone Plugin Js -->
    <script src="<?=base_url('assetsadmin/plugins/dropzone/dropzone.js')?>"></script>
    <script src="<?= base_url('assetsadmin/js/demo.js')?>"></script>
</body>

</html>
