
<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="gramentheme">
    <meta name="description" content="BibliotecaDigital - Crece y Apende. Eres unestudiante Éxitoso. ">
    <!-- ======== Page title ============ -->
    <title>BibliotecaDigital - Inicio</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!--<< Icomoon.css >>-->
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

    <body>
        <!-- Cursor follower -->
        <div class="cursor-follower"></div>

        <!-- Preloader start -->
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="B" class="letters-loading">
                        B
                    </span>
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    <span data-text-preloader="K" class="letters-loading">
                        K
                    </span>
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                </div>
                <p class="text-center">Cargando</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back To Top start -->
        <button id="back-top" class="back-to-top">
            <i class="fa-solid fa-chevron-up"></i>
        </button>

        <!-- Offcanvas Area start  -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                    <?php foreach($configuracion as $c):?>
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="<?=base_url('/')?>">
                                    <img src="assets/img/logo/black-logo.svg" alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text d-none d-xl-block"><?=$c['descripcion']?></p>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <h4>Contact Info</h4>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="<?=base_url('/')?>"><?=$c['direccion']?></a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="mailto:<?=$c['correo']?>"><span
                                                class="mailto:<?=$c['correo']?>"><?=$c['correo']?></span></a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="<?=base_url('/')?>"><?=$c['horario']?></a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="tel:<?=$c['telefono']?>"><?=$c['telefono']?></a>
                                    </div>
                                </li>
                            </ul>
                            <div class="social-icon d-flex align-items-center">
                                <a href="<?=$c['url_facebook']?>"><i class="fab fa-facebook-f"></i></a>
                                <a href="<?=$c['url_x']?>"><i class="fab fa-twitter"></i></a>
                                <a href="<?=$c['url_youtube']?>"><i class="fab fa-youtube"></i></a>
                                <a href="<?=$c['url_instagram']?>"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>

        <div class="header-top-1">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul class="contact-list">
                    <?php foreach($configuracion as $c):?>
                        <li>
                            <i class="fa-regular fa-phone"></i>
                            <a href="tel:<?=$c['telefono']?>"><?=$c['telefono']?></a>
                        </li>
                        <li>
                            <i class="far fa-envelope"></i>
                            <a href="mailto:<?=$c['correo']?>"><?=$c['correo']?></a>
                        </li>
                        <li>
                            <i class="far fa-clock"></i>
                            <span><?=$c['horario']?></span>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Sticky Header Section start  -->
        <header class="header-1 sticky-header">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 col-md-6 col-lg-10 col-xl-8 col-xxl-10">
                                <div class="header-left">
                                    <div class="logo">
                                        <a href="index.html" class="header-logo">
                                            <img src="assets/img/logo/white-logo.svg" alt="logo-img">
                                        </a>
                                    </div>
                                    <div class="mean__menu-wrapper">
                                        <div class="main-menu">
                                            <nav>
                                                <ul>
                                                    <li>
                                                        <a href="<?=base_url('/admbiblioteca')?>">Inicio</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?=base_url('/todoscarrera/').session('idcarrera')?>">Libros</a>
                                                    </li>
                                                    <li><p><?=session('nombres')?></p></li>
                                                    <li><a href="<?=base_url('/cerrar')?>">
                                                            Cerrar
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-2 col-xl-4 col-xxl-2">
                                <div class="header-right">
                                    <div class="category-oneadjust gap-6 d-flex align-items-center">
                                        <div class="icon">
                                            <i class="fa-sharp fa-solid fa-grid-2"></i>
                                        </div>
                                        <select name="cate" class="category">
                                            <option value="0">
                                                Área de conocimiento
                                            </option>
                                            <?php foreach($carreras as $area): ?>
                                            <option value="<?= $area['idarea']?>">
                                                <?= $area['nombrearea']?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <form action="#" class="search-toggle-box d-md-block">
                                            <div class="input-area">
                                                <input type="text" placeholder="Autor">
                                                <button class="cmn-btn">
                                                    <i class="far fa-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="menu-cart">
                                        <div class="header-humbager ml-30">
                                            <a class="sidebar__toggle" href="javascript:void(0)">
                                                <div class="bar-icon-2">
                                                    <img src="assets/img/icon/icon-13.svg" alt="img">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </header>

        <!-- Main Header Section start  -->
        <header class="header-1">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 col-md-6 col-lg-10 col-xl-8 col-xxl-10">
                                <div class="header-left">
                                    <div class="logo">
                                        <a href="index.html" class="header-logo">
                                            <img src="assets/img/logo/white-logo.svg" alt="logo-img">
                                        </a>
                                    </div>
                                    <div class="mean__menu-wrapper">
                                        <div class="main-menu">
                                            <nav id="mobile-menu">
                                                <ul>
                                                    <li>
                                                        <a href="<?=base_url('/admbiblioteca')?>">Inicio</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?=base_url('/todoscarrera/').session('idcarrera')?>">Libro </a>
                                                    </li>
                                                    <li><p><?=session('nombres')?></p></li>
                                                    <li><a href="<?=base_url('/cerrar')?>">
                                                            Cerrar
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-2 col-xl-4 col-xxl-2">
                                <div class="header-right">
                                    <div class="category-oneadjust gap-6 d-flex align-items-center">
                                        <div class="icon">
                                            <i class="fa-sharp fa-solid fa-grid-2"></i>
                                        </div>
                                        <select name="cate" class="category">
                                            <option value="0">
                                                Área de conocimiento
                                            </option>
                                            <?php foreach($carreras as $area): ?>
                                            <option value="<?=$area['idarea']?>">
                                                <?= $area['nombrearea']?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <form action="#" class="search-toggle-box d-md-block">
                                            <div class="input-area">
                                                <input type="text" placeholder="Autor">
                                                <button class="cmn-btn">
                                                    <i class="far fa-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="menu-cart">
                                        <div class="header-humbager ml-30">
                                            <a class="sidebar__toggle" href="javascript:void(0)">
                                                <div class="bar-icon-2">
                                                    <img src="assets/img/icon/icon-13.svg" alt="img">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </header>

        <!-- Login Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="close-btn">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="identityBox">
                            <div class="form-wrapper">
                                <h1 id="loginModalLabel">Bienvenido!</h1>
                                <form action="<?=base_url('/ingresando')?>" method="POST">
                                    <input class="inputField" type="email" name="email" placeholder="Email">
                                    <input class="inputField" type="password" name="password" placeholder="Password">
                                    <div class="input-check remember-me">
                                        <div class="checkbox-wrapper">
                                            <input type="checkbox" class="form-check-input" name="save-for-next"
                                                id="saveForNext">
                                            <label for="saveForNext">Recuerdame</label>
                                        </div>
                                        
                                    </div>
                                    <div class="loginBtn">
                                        <button type="submit" class="theme-btn rounded-0"> Iniciar </button>
                                    </div>
                                </form>
                                    <div class="form-check-3 d-flex align-items-center from-customradio-2 mt-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault">
                                        <label class="form-check-label">
                                            Acepto terminos y condiciones.
                                        </label>
                                    </div>
                            </div>

                            <div class="banner">
                                <div class="loginBg">
                                    <img src="assets/img/signUpbg.jpg" alt="signUpBg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
            echo $this->renderSection("contenido");
        ?>                                      


        <!-- Footer Section start  -->
        <footer class="footer-section footer-bg">
        <?php foreach($configuracion as $c):?>
            <div class="container">
                <div class="contact-info-area">
                    <div class="contact-info-items wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon">
                            <i class="icon-icon-5"></i>
                        </div>
                        <div class="content">
                            <p>Teléfono</p>
                            <h3>
                                <a href="tel:<?=$c['telefono']?>"><?=$c['telefono']?></a>
                            </h3>
                        </div>
                    </div>
                    <div class="contact-info-items wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon">
                            <i class="icon-icon-6"></i>
                        </div>
                        <div class="content">
                            <p>Email</p>
                            <h3>
                                <a href="mailto:<?=$c['correo']?>"><?=$c['correo']?></a>
                            </h3>
                        </div>
                    </div>
                    <div class="contact-info-items wow fadeInUp" data-wow-delay=".6s">
                        <div class="icon">
                            <i class="icon-icon-7"></i>
                        </div>
                        <div class="content">
                            <p>Horario</p>
                            <h3>
                            <?=$c['horario']?>
                            </h3>
                        </div>
                    </div>
                    <div class="contact-info-items wow fadeInUp" data-wow-delay=".8s">
                        <div class="icon">
                            <i class="icon-icon-8"></i>
                        </div>
                        <div class="content">
                            <p>Ubicación</p>
                            <h3>
                            <?=$c['direccion']?>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-widgets-wrapper">
                <div class="plane-shape float-bob-y">
                    <img src="assets/img/plane-shape.png" alt="img">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <a href="index.html">
                                        <img src="assets/img/logo/white-logo.svg" alt="logo-img">
                                    </a>
                                </div>
                                <div class="footer-content">
                                    <p><?=$c['descripcion']?></p>
                                    <div class="social-icon d-flex align-items-center">
                                        <a href="<?=$c['url_facebook']?>"><i class="fab fa-facebook-f"></i></a>
                                        <a href="<?=$c['url_x']?>"><i class="fab fa-twitter"></i></a>
                                        <a href="<?=$c['url_youtube']?>"><i class="fab fa-youtube"></i></a>
                                        <a href="<?=$c['url_instagram']?>"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".4s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h3>Menú</h3>
                                </div>
                                <ul class="list-area">
                                    <li>
                                        <a href="<?=base_url('/admbiblioteca')?>">
                                            <i class="fa-solid fa-chevrons-right"></i>
                                            Inicio
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('/todoscarrera/').session('idcarrera')?>">
                                            <i class="fa-solid fa-chevrons-right"></i>
                                            Libros
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".6s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h3>Áreas de conocimiento</h3>
                                </div>
                                <ul class="list-area">
                                    <li>
                                        <a href="<?=base_url('/todoscarrera/').session('idcarrera')?>">
                                            <i class="fa-solid fa-chevrons-right"></i>
                                            <?=session('carrera')?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h3>Tienes algún comentario?</h3>
                                </div>
                                <div class="footer-content">
                                    <p>Si tienes algún comentario, recomendaciones y observaciones escribenos. </p>
                                    <div class="footer-input">
                                        <input type="comentario" id="comentario" placeholder="Comentario">
                                        <button class="newsletter-btn" type="submit">
                                            <i class="fa-regular fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-wrapper d-flex align-items-center justify-content-between">
                        <p class="wow fadeInLeft" data-wow-delay=".3s">
                            © All Copyright 2024 by <a href="index.html">Erikab</a>
                        </p>
                        <ul class="brand-logo wow fadeInRight" data-wow-delay=".5s">
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </footer>

        <!--<< All JS Plugins >>-->
        <script src="assets/js/jquery-3.7.1.min.js"></script>
        <!--<< Viewport Js >>-->
        <script src="assets/js/viewport.jquery.js"></script>
        <!--<< Bootstrap Js >>-->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!--<< Nice Select Js >>-->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!--<< Waypoints Js >>-->
        <script src="assets/js/jquery.waypoints.js"></script>
        <!--<< Counterup Js >>-->
        <script src="assets/js/jquery.counterup.min.js"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="assets/js/swiper-bundle.min.js"></script>
        <!--<< MeanMenu Js >>-->
        <script src="assets/js/jquery.meanmenu.min.js"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!--<< Wow Animation Js >>-->
        <script src="assets/js/wow.min.js"></script>
        <!-- Gsap -->
        <script src="assets/js/gsap.min.js"></script>
        <!--<< Main.js >>-->
        <script src="assets/js/main.js"></script>
    </body>

</html>