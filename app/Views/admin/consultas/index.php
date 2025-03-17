<?php echo $this->extend('layouts/layout.php'); ?>
<?php echo $this->section('contenido'); ?>
<section class="content">
        <div class="container-fluid">
        <div class="block-header">
                <h2>CONSULTAS</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">LIBROS</div>
                            <div class="number count-to" data-from="0" data-to="<?= $total_libros ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">CARRERAS</div>
                            <div class="number count-to" data-from="0" data-to="<?= $total_carreras ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">BIBLIOTECARIOS</div>
                            <div class="number count-to" data-from="0" data-to="<?= $total_bibliotecarios ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">ALUMNOS</div>
                            <div class="number count-to" data-from="0" data-to="<?= $total_alumnos ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
           <!-- Exportable Table -->
           <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LISTADO DE CONSULTAS
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                        <th>#</th>
                                            <th>Código</th>
                                            <th>Libro</th>
                                            <th>Autor</th>
                                            <th>Edición</th>
                                            <th>Carrera</th>
                                            <th>Alumno</th>
                                            <th>Matricula</th>
                                            <th>Fecha creado</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Código</th>
                                            <th>Libro</th>
                                            <th>Autor</th>
                                            <th>Edición</th>
                                            <th>Carrera</th>
                                            <th>Alumno</th>
                                            <th>Matricula</th>
                                            <th>Fecha creado</th>
                                    </tfoot>
                                    <tbody>

                                        <?php $cont=1; foreach ($consultas as $i) : ?>
                                        <tr>
                                            <td><?= $cont++ ?></td>
                                            <td><?= $i->codigo ?></td>
                                            <td><?= $i->titulo ?></td>
                                            <td><?= $i->nombreautor ?></td>
                                            <td><?= $i->edicion?></td>
                                            <td><?= $i->carrera?></td>
                                            <td><?= $i->nombres." ". $i->apaterno?></td>
                                            <td><?= $i->matricula?></td>
                                            <td><?= $i->created_at?></td>
                                            <!--td>
                                            <button type="button" class="btn btn-success waves-effect">
                                                <i class="material-icons">create</i>
                                            </button>
                                            <button type="button" class="btn btn-danger waves-effect">
                                                <i class="material-icons">delete</i>
                                            </button>
                                            </td-->
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
            
        </div>
    </section>
<?php echo $this->endSection();?>