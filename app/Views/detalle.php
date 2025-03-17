<?php echo $this->extend('layouts/layoutFrontsec.php'); ?>
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
                            <a href="index.html">
                                Detalle del libro.
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
                <div class="row g-4">
                    <div class="col-lg-5">
                        <div class="shop-details-image">
                            <div class="tab-content">
                                <div id="thumb1" class="tab-pane fade show active">
                                    <div class="shop-details-thumb">
                                        <img src="<?=base_url($libros->imagen)?>" alt="img"style="width:45%; heigth:45%;">
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="shop-details-content">
                            <div class="title-wrapper">
                                <h2><?=$libros->titulo?></h2>
                            </div>
                            <div class="star">
                                <a href="#"> <i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"> <i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fa-regular fa-star"></i></a>
                            </div>
                            <p>
                               <?=$libros->sinopsis?>
                            </p>
                            <div class="price-list">
                                <h3><?=$libros->carrera?></h3>
                            </div>
                            <div class="cart-wrapper">
                                <button class="theme-btn" data-bs-toggle="modal" data-bs-target="#loginModal"> Acceder</button>
                                <div class="icon-box">
                                    <a href="#" class="icon">
                                        <i class="far fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-2">
                                        <img src="../assets/img/icon/shuffle.svg" alt="svg-icon">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-tab section-padding pb-0">
                    <ul class="nav mb-5" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#description" data-bs-toggle="tab" class="nav-link ps-0 active"
                                aria-selected="true" role="tab">
                                <h6>Sinopsís</h6>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#additional" data-bs-toggle="tab" class="nav-link" aria-selected="false"
                                tabindex="-1" role="tab">
                                <h6>Información del Libro </h6>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#review" data-bs-toggle="tab" class="nav-link" aria-selected="false" tabindex="-1"
                                role="tab">
                                <h6>Palabras clave</h6>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="description" class="tab-pane fade show active" role="tabpanel">
                            <div class="description-items">
                                <p><?=$libros->sinopsis?></p>
                            </div>
                        </div>
                        <div id="additional" class="tab-pane fade" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>   
                                        <tr>
                                            <td class="text-1">Código</td>
                                            <td class="text-2"><?=$libros->codigo?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Autor</td>
                                            <td class="text-2"><?=$libros->nombreautor?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Editorial</td>
                                            <td class="text-2"><?=$libros->editorial?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Edición</td>
                                            <td class="text-2"><?=$libros->edicion?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Año</td>
                                            <td class="text-2"><?=$libros->aniopublicacion?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Lugar</td>
                                            <td class="text-2"><?=$libros->lugarpublicacion?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Carrera</td>
                                            <td class="text-2"><?=$libros->carrera?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="review" class="tab-pane fade" role="tabpanel">
                            <div class="review-items">
                                <div class="review-wrap-area d-flex gap-4">
                                    <div class="review-thumb">
                                        <img src="../<?=$libros->imgautor?>" alt="img" style="width:15%; heigth:15%;">
                                    </div>
                                    <div class="review-content">
                                        <div
                                            class="head-area d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                            <div class="cont">
                                                <h5><a href="news-details.html"><?=$libros->titulo?></a></h5>
                                                <span>Registrado: <?=$libros->created_at?></span>
                                            </div>
                                            <div class="star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="mt-30 mb-4">
                                            <?=$libros->palabrasclave?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Ratting Book Section Start -->
    <section class="top-ratting-book-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Nuestros Libros</h2>
                <p class="wow fadeInUp" data-wow-delay=".5s">
                    Descubre el universo literario al alcance de un click en nuestra biblioteca digital.<br>
                    Explora todas nuestras librerías en un solo lugar.
                </p>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                    <?php foreach($libreria as $lib): ?>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="<?=base_url('/libroscarreras/').$lib->idlibros?>"><img src="<?= base_url($lib->imagen)?>" alt="img"></a>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="<?=base_url('/libroscarreras/').$lib->idlibros?>"><i class="far fa-heart"></i></a>
                                    </li>
                                </ul>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="<?=base_url('/libroscarreras/').$lib->idlibros?>"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('/libroscarreras/').$lib->idlibros?>">

                                            <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('/libroscarreras/').$lib->idlibros?>"><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5><?=$lib->carrera?></h5>
                                <h3><a href="<?=base_url('/libroscarreras/').$lib->idlibros?>l"><?=$lib->titulo?></h3>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="<?=base_url('../'.$lib->imgautor)?>" alt="img" style="width:45px; heigth:45px;">
                                        </span>
                                        <span class="content"><?=$lib->nombreautor?></span>
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
                                <a href="<?=base_url('/libroscarreras/').$lib->idlibros?>" class="theme-btn"> Consultar</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>
<?php echo $this->endSection();?>