<?php echo $this->extend('layouts/layoutFront.php'); ?>
<?php echo $this->section('contenido'); ?>
        <!-- Hero Section start  -->
    <div class="hero-section hero-1 fix">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-8 col-lg-6">
                    <div class="hero-items">
                        <div class="book-shape">
                            <img src="assets/img/hero/book.png" alt="shape-img">
                        </div>
                        <div class="frame-shape1 float-bob-x">
                            <img src="assets/img/hero/frame.png" alt="shape-img">
                        </div>
                        <div class="frame-shape2 float-bob-y">
                            <img src="assets/img/hero/frame-2.png" alt="shape-img">
                        </div>
                        <div class="frame-shape3">
                            <img src="assets/img/hero/xstar.png" alt="img">
                        </div>
                        <div class="frame-shape4 float-bob-x">
                            <img src="assets/img/hero/frame-shape.png" alt="img">
                        </div>
                        <div class="bg-shape1">
                            <img src="assets/img/hero/bg-shape.png" alt="img">
                        </div>
                        <div class="bg-shape2">
                            <img src="assets/img/hero/bg-shape2.png" alt="shape-img">
                        </div>
                        <div class="hero-content">
                            <h6 class="wow fadeInUp" data-wow-delay=".3s">Explora, aprende y crece.</h6>
                            <h1 class="wow fadeInUp" data-wow-delay=".5s">¡Eres<br> exitoso!
                            </h1>
                            <div class="form-clt wow fadeInUp" data-wow-delay=".9s">
                                <button class="theme-btn" data-bs-toggle="modal" data-bs-target="#loginModal">
                                    Acceder <i class="fa-solid fa-arrow-right-long"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-xl-4 col-lg-6">
                    <div class="girl-image">
                        <img class=" float-bob-x" src="assets/img/hero/hero-girl.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Section start  -->
    <section class="feature-section fix section-padding">
        <div class="container">
            <div class="feature-wrapper">
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".2s">
                    <div class="icon">
                        <i class="icon-icon-1"></i>
                    </div>
                    <div class="content">
                        <h3>Acceso Ilimitado</h3>
                        <p>Tienes acceso a una gran cantidad de libros.</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".4s">
                    <div class="icon">
                        <i class="icon-icon-2"></i>
                    </div>
                    <div class="content">
                        <h3>Recursos educativos</h3>
                        <p>Todos son para el desarrollo academico.</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".6s">
                    <div class="icon">
                        <i class="icon-icon-3"></i>
                    </div>
                    <div class="content">
                        <h3>Soporte </h3>
                        <p>Disponibilidad de técnicos 24/7</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".8s">
                    <div class="icon">
                        <i class="icon-icon-4"></i>
                    </div>
                    <div class="content">
                        <h3>Fácil uso</h3>
                        <p>Es práctico el uso de la biblioteca.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section start  -->
    <section class="shop-section section-padding fix pt-0">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Nuevos Libros</h2>
                </div>
                <a href="<?=base_url('/libroscarreras')?>" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Explorar Más <i
                        class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                    <?php foreach($libros as $l) :?>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="<?= base_url($l->imagen)?>" alt="img"></a>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="<?=base_url('/libroscarreras/').$l->idlibros?>"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('/libroscarreras/').$l->idlibros?>">
                                            <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('/libroscarreras/').$l->idlibros?>"><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5><?=$l->carrera?></h5>
                                <h3><a href="shop-details.html"><?=$l->titulo?></a></h3>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="<?= base_url($l->imgautor)?>" alt="img" style="width:45px; heigth:45px;">
                                        </span>
                                        <span class="content"><?=$l->nombreautor?></span>
                                    </li>
                                    <li class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a href="<?=base_url('/libroscarreras/').$l->idlibros?>" class="theme-btn">Consultar</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Book Catagories Section start  -->
    <section class="book-catagories-section fix section-padding">
        <div class="container">
            <div class="book-catagories-wrapper">
                <div class="section-title text-center">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Áreas de conocimiento</h2>
                </div>
                <div class="array-button">
                    <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
                    <button class="array-next"><i class="fal fa-arrow-right"></i></button>
                </div>
                <div class="swiper book-catagories-slider">
                    <div class="swiper-wrapper">
                    <?php $cont=1; foreach($carreras as $area): ?>
                        <div class="swiper-slide">
                            <div class="book-catagories-items">
                                <div class="book-thumb">
                                    <img src="assets/img/book-categori/01.png" alt="img">
                                    <div class="circle-shape">
                                        <img src="assets/img/book-categori/circle-shape.png" alt="shape-img">
                                    </div>
                                </div>
                                <div class="number"><?=$cont++;?> </div>
                                <h3><a href="<?=base_url('/librosporcarrera/').$area['idarea']?>"><?=$area['nombrearea']?></a></h3>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section start  -->
    <section class="shop-section section-padding fix">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title mb- wow fadeInUp" data-wow-delay=".3s">
                    <h2>Licenciatura en Derecho</h2>
                </div>
                <a href="<?=base_url('/librosderecho')?>" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Explorar Más <i
                        class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="book-shop-wrapper">
                <?php foreach($libros as $l): 
                       if($l->id_carrera== 1): 
                ?>
                <div class="shop-box-items style-2">
                    <div class="book-thumb center">
                        <a href="shop-details"><img src="<?=$l->imagen?>" alt="img"></a>
                        <ul class="shop-icon d-grid justify-content-center align-items-center">
                            <li>
                                <a href="<?=base_url('/libroscarreras/').$l->idlibros?>"><i class="far fa-heart"></i></a>
                            </li>
                            <li>
                                <a href="<?=base_url('/libroscarreras/').$l->idlibros?>">

                                    <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                </a>
                            </li>
                            <li>
                                <a href="<?=base_url('/libroscarreras/').$l->idlibros?>"><i class="far fa-eye"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="shop-content">
                        <h5> <?= $l->carrera?> </h5>
                        <h3><a href="<?=base_url('/libroscarreras/').$l->idlibros?>"><?= $l->titulo?></a></h3>
                        <ul class="price-list">
                            <li></li>
                            <li>
                                <del></del>
                            </li>
                        </ul>
                        <ul class="author-post">
                            <li class="authot-list">
                                <span class="thumb">
                                    <img src="<?=base_url($l->imgautor)?>" alt="img" style="width: 45px; heigth: 45px;">
                                </span>
                                <span class="content"><?=$l->nombreautor?></span>
                            </li>
                            <li class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="shop-button">
                        <a href="<?=base_url('/libroscarreras/').$l->idlibros?>" class="theme-btn"> Consultar</a>
                    </div>
                </div>
                <?php endif; endforeach; ?>

                
            </div>
        </div>
    </section>

    <!-- Cta Banner Section start  -->
    <section class="cta-banner-section fix section-padding pt-0">
        <div class="container">
            <div class="cta-banner-wrapper section-padding bg-cover"
                style="background-image: url('assets/img/cta-banner.jpg');">
                <div class="book-shape">
                    <img src="assets/img/book-shape.png" alt="shape-img">
                </div>
                <div class="girl-shape float-bob-x">
                    <img src="assets/img/girl-shape-2.png" alt="shape-img">
                </div>
                <div class="cta-content text-center">
                    <h2 class="mb-40 wow fadeInUp" data-wow-delay=".3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Estudiar tu carrera<br>
                        ¡Ahora es más fácil!</h2>
                        <button class="theme-btn" data-bs-toggle="modal" data-bs-target="#loginModal">
                                    Acceder <i class="fa-solid fa-arrow-right-long"></i>
                                </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Ratting Book Section start  -->
    <section class="top-ratting-book-section fix section-padding section-bg">
        <div class="container">
            <div class="top-ratting-book-wrapper">
                <div class="section-title-area">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">Licenciatura en Administración</h2>
                    </div>
                    <a href="<?=base_url('/librosadministracion')?>" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Ver Más <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
                <div class="row">
                    <?php foreach($libros as $l): 
                        if($l->id_carrera==1): ?>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="top-ratting-box-items">
                            <div class="book-thumb">
                                <a href="shop-details.html">
                                    <img src="<?=$l->imagen?>" alt="img">
                                </a>
                            </div>
                            <div class="book-content">
                                <div class="title-header">
                                    <div>
                                        <h5><?=$l->carrera?></h5>
                                        <h3>
                                            <a href="<?=base_url('/libroscarreras/').$l->idlibros?>"><?= $l->titulo?></a>
                                        </h3>
                                    </div>
                                    <ul class="shop-icon d-flex justify-content-center align-items-center">
                                        <li>
                                            <a href="<?=base_url('/libroscarreras/').$l->idlibros?>"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?=base_url('/libroscarreras/').$l->idlibros?>"><i class="far fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="mt-10"></span>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="<?=base_url($l->imgautor)?>" alt="img" style="width: 45px; heigth: 45px;">
                                        </span>
                                        <span class="content mt-10"><?=$l->nombreautor?></span>
                                    </li>
                                </ul>
                                <div class="shop-btn">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <a href="<?=base_url('/libroscarreras/').$l->idlibros?>" class="theme-btn">Consulta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; endforeach;?>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section start  -->
    <section class="shop-section section-padding fix">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title wow fadeInUp" data-wow-delay=".3s">
                    <h2>Licenciatura en Psicología</h2>
                </div>
                <a href="<?=base_url('/librospsicologia')?>" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Explorar Más <i
                        class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                    <?php foreach($libros as $l): 
                        if($l->id_carrera==1): ?>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="<?= base_url($l->imagen)?>" alt="img"></a>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="<?=base_url('/libroscarreras/').$l->idlibros?>"><i class="far fa-heart"></i></a>
                                    </li>
                                </ul>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="<?=base_url('/libroscarreras/').$l->idlibros?>"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('/libroscarreras/').$l->idlibros?>">

                                            <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('/libroscarreras/').$l->idlibros?>"><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5> <?=$l->carrera?> </h5>
                                <h3><a href="<?=base_url('/libroscarreras/').$l->idlibros?>"><?=$l->titulo?></a></h3>
                                <ul class="price-list">
                                    <li></li>
                                    <li>
                                        <del></del>
                                    </li>
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="<?=$l->imgautor?>" alt="img" style="width:45px; heigth: 45px;">
                                        </span>
                                        <span class="content"><?=$l->nombreautor?></span>
                                    </li>

                                    <li class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a href="<?=base_url('/libroscarreras/').$l->idlibros?>" class="theme-btn"> Consultar</a>
                            </div>
                        </div>
                    </div>
                    <?php endif; endforeach;  ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section start  -->
    <!--section class="team-section fix section-padding pt-0 margin-bottom-30">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Todos los Autores</h2>
                <p class="wow fadeInUp" data-wow-delay=".5s">Cada autor, con su enfoque único y su vasta experiencia, 
                    contribuye al saber y al pensamiento crítico</p>
            </div>
            <div class="array-button">
                <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
                <button class="array-next"><i class="fal fa-arrow-right"></i></button>
            </div>
            <div class="swiper team-slider">
                <div class="swiper-wrapper">
                    <?php foreach($librosxautor as $lib): ?>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="<?=$lib->imgautor?>" alt="img" style="width:78px; heigth:78px">
                                </div>
                                <div class="shape-img">
                                    <img src="assets/img/team/shape-img.png" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href="team-details.html"><?=$lib->nombreautor?></a></h6>
                                <p><?=$lib->cantidad?> Libros</p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach?>
                </div>
            </div>
        </div>
    </section-->
<?php echo $this->endSection();?>