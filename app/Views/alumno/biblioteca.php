<?php echo $this->extend('layouts/layoutadm.php'); ?>
<?php echo $this->section('contenido'); ?>

    <!-- Cta Banner Section start  -->
    <section class="cta-banner-section fix section-padding pt-4">
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
                        <button class="theme-btn">
                            Mi carrera - <?=session('carrera')?> 
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
                        <h2 class="wow fadeInUp" data-wow-delay=".3s"><?=session('carrera')?></h2>
                    </div>
                    <a href="<?=base_url('/todoscarrera/').session('idcarrera')?>" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Ver Más <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
                <div class="row">
                    <?php foreach($libros as $l): ?>
                       
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
                                            <a href="<?=base_url('/consulta/').$l->idlibros?>"><?= $l->titulo?></a>
                                        </h3>
                                    </div>
                                    <ul class="shop-icon d-flex justify-content-center align-items-center">
                                        <li>
                                            <a href="<?=base_url('/consulta/').$l->idlibros?>"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?=base_url('/consulta/').$l->idlibros?>"><i class="far fa-eye"></i></a>
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
                                    <a href="<?=base_url('/consulta/').$l->idlibros?>" class="theme-btn">Consulta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section start  -->
    <section class="shop-section section-padding fix">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title wow fadeInUp" data-wow-delay=".3s">
                    <h2>Mis Libros Consultados</h2>
                </div>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                    <?php foreach($descargas as $l): ?>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="<?= base_url($l->imagen)?>" alt="img"></a>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="<?=base_url('/consulta/').$l->idlibros?>"><i class="far fa-heart"></i></a>
                                    </li>
                                </ul>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="<?=base_url('/consulta/').$l->idlibros?>"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('/consulta/').$l->idlibros?>">

                                            <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('/consulta/').$l->idlibros?>"><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                              
                                <h3><a href="<?=base_url('/consulta/').$l->idlibros?>"><?=$l->titulo?></a></h3>
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
                                <a href="<?=base_url('/consulta/').$l->idlibros?>" class="theme-btn"> Consultar</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;  ?>
                </div>
            </div>
        </div>
    </section>

  
<?php echo $this->endSection();?>