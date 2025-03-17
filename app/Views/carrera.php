<?php echo $this->extend('layouts/layoutFrontsec.php'); ?>
<?php echo $this->section('contenido'); ?>
<!-- Breadcumb Section Start -->
<div class="breadcrumb-wrapper">
        <div class="book1">
            <img src="<?=base_url('assets/img/hero/book.png')?>" alt="book">
        </div>
        <div class="book2">
            <img src="<?=base_url('assets/img/hero/book.png')?>" alt="book">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1> Todos los libros</h1>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="index.html">
                            Tienes disponibles todos tus libros
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Section Start -->
    <section class="shop-section fix section-padding">
        <div class="container">
            <div class="shop-default-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="woocommerce-notices-wrapper wow fadeInUp" data-wow-delay=".3s">
                           
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 order-2 order-md-1 wow fadeInUp" data-wow-delay=".3s">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h5></h5>
                                </div>
                                <form action="#" class="search-toggle-box">
                                    <div class="input-area search-container">
                                        <input class="search-input" type="text" placeholder="Buscar aquí">
                                        <button class="cmn-btn search-icon">
                                            <i class="far fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h5>Carreras</h5>
                                </div>
                                <div class="categories-list">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <?php foreach($carreras as $c): ?>
                                        <li class="nav-item" role="presentation">
                                            <a href="<?=base_url('/librosporcarrera/').$c['idarea']?>" class="nav-link active" id="pills-arts-tab" >
                                                <?=$c['nombrearea']?>
                                            </a>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 order-1 order-md-2">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-arts" role="tabpanel"
                                aria-labelledby="pills-arts-tab" tabindex="0">
                                <div class="row">
                                    <?php foreach($libros as $l): ?>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="<?=base_url('/libroscarreras/').$l->idlibros?>"><img src="<?=base_url($l->imagen)?>" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                                    <li>
                                                        <a href="<?=base_url('/libroscarreras/').$l->idlibros?>"><i class="far fa-heart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="<?=base_url('/libroscarreras/').$l->idlibros?>">
                                                            <img class="icon" src="../assets/img/icon/shuffle.svg"
                                                                alt="svg-icon">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?=base_url('/libroscarreras/').$l->idlibros?>"><i class="far fa-eye"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="<?=base_url('/libroscarreras/').$l->idlibros?>"><?=$l->titulo?></a></h3>
                                                <ul class="price-list">
                                                    <li><?=$l->carrera?></li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a href="<?=base_url('/libroscarreras/').$l->idlibros?>" class="theme-btn"> Consultar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="page-nav-wrap text-center">
                            <ul>
                                <li><a class="previous" href="<?=base_url('/libroscarreras')?>">Previous</a></li>
                                <li><a class="page-numbers" href="<?=base_url('/libroscarreras')?>">1</a></li>
                                <li><a class="page-numbers" href="<?=base_url('/libroscarreras')?>">2</a></li>
                                <li><a class="page-numbers" href="<?=base_url('/libroscarreras')?>">3</a></li>
                                <li><a class="page-numbers" href="<?=base_url('/libroscarreras')?>">...</a></li>
                                <li><a class="next" href="<?=base_url('/libroscarreras')?>">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php echo $this->endSection();?>