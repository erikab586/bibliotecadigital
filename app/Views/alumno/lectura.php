<?php echo $this->extend('layouts/layoutadmsec.php'); ?>
<?php echo $this->section('contenido'); ?>
    <!-- Breadcumb Section Start -->
    <div class="breadcrumb-wrapper">
        <div class="book1">
            <img src="../assets/img/hero/book.png" alt="book">
        </div>
        <div class="book2">
            <img src="../assets/img/hero/book.png" alt="book">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1><?=$libros->titulo?></h1>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="#">
                                <?=$libros->carrera?>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <?="Autor:".$libros->nombreautor?>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <?=$libros->edicion." Edición".$libros->aniopublicacion." - ".$libros->lugarpublicacion?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Details Section Start -->
    <section class="shop-details-section fix section-padding">
        <div class="container">
            <div class="shop-details-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop-details-image">
                            <div class="tab-content">
                                <div id="thumb1" class="tab-pane fade show active">
                                    <div class="shop-details-thumb">
                                    <iframe src="<?=base_url($libros->urlarchivo)?>" width="100%" height="600px">
                                        Tu navegador no soporta el iframe.
                                    </iframe>

                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
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