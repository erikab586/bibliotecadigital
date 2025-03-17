<?php echo $this->extend('layouts/layout.php'); ?>
<?php echo $this->section('contenido'); ?>
<style>
    /* public/css/your_styles.css */
    .large-alert-popup {
        width: 50vw !important; /* Ancho del 50% del viewport */
        height: auto; /* Ajusta la altura automáticamente */
        max-width: 90vw !important; /* Ancho máximo del 90% del viewport */
        padding: 3em; /* Ajusta el padding según sea necesario */
    }

    .large-alert-title {
        font-size: 2em !important; /* Tamaño del título */
    }

    .large-alert-content {
        font-size: 1.5em !important; /* Tamaño del contenido */
    }

    .large-alert-icon {
        font-size: 3em !important; /* Tamaño del icono */
    }

    .large-alert-button {
        font-size: 1.2em !important; /* Tamaño del botón */
        padding: 1em 2em; /* Padding del botón */
    }
    .large-alert-buttonText {
        font-size: 1.2em !important; /* Tamaño del botón */
        padding: 1em 2em; /* Padding del botón */
    }

</style>
<section class="content">
        <div class="container-fluid">
        <div class="block-header">
                <h2>USUARIOS</h2>
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
            <div class="block-header">
                <a href="<?= base_url('/crearusuarios')?>"  class="btn btn-primary btn-lg waves-effect">
                    <i class="material-icons">add_circle</i>
                    <span>AGREGAR USUARIOS</span>
                </a>
            </div>
           <!-- Exportable Table -->
           <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LISTADO DE USUARIOS
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Email</th>
                                            <th>Ultima Conexión</th>
                                            <th>Rol</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Email</th>
                                            <th>Ultima Conexión</th>
                                            <th>Rol</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        <?php $cont=1; foreach ($usuarios as $i) : ?>
                                        <tr>
                                            <td><?= $cont++ ?></td>
                                            <td><?= $i->nombreusuario ?></td>
                                            <td><?= $i->apellidousuario ?></td>
                                            <td><?= $i->email ?></td>
                                            <td><?= $i->ultimaconexion ?></td>
                                            <td><?= $i->nombrerol ?></td>
                                            <td>
                                            <button class="btn btn-warning waves-effect" data-toggle="modal" data-target="#defaultModal" onclick="cambiarPassword(<?= $i->idusuario ?>)"title="Cambiar Password"><i class="material-icons">cached</i></button>
                                            <a class="btn btn-success waves-effect" href="<?php echo base_url('/editarusuarios')."/".$i->idusuario?>" title="Editar" > <i class="material-icons">create</i></a>
                                            <a class="btn btn-danger waves-effect" href="<?php echo base_url('/eliminaru')."/".$i->idusuario?>" title="Eliminar"> <i class="material-icons">delete</i></a>
                                            </td>
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
            <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">CAMBIAR PASSWORD</h4>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('/guardarcambio')?>" method="POST">
                                   <input type="hidden" id="id">
                                    <div class="col-md-9">
                                        <p>
                                            <b>Password</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">assignment</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="password" id="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" id="generar" class="btn btn-block btn-lg btn-primary waves-effect" >
                                            <i class="material-icons">cached</i>
                                            <span>GENERAR</span>
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-block btn-lg btn-danger waves-effect" data-dismiss="modal">
                                            <i class="material-icons">delete_forever</i>
                                            <span>CANCELAR</span>
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-block btn-lg btn-primary waves-effect">
                                            <i class="material-icons">add_circle</i>
                                            <span>GUARDAR</span>
                                        </button>
                                    </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        

    </section>
    <script>
        // Seleccionamos todos los botones de la tabla que tienen la clase 'btn-danger'
        document.querySelectorAll('.btn-danger').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault(); // Prevenir la acción predeterminada del enlace

                const url = this.getAttribute('href'); // Obtener la URL del atributo 'href'
                console.log(url);

                // Preguntar al usuario si realmente desea eliminar
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¡Esta acción no se puede deshacer!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar',
                    customClass: {
                        popup: 'large-alert-popup',
                        title: 'large-alert-title',
                        content: 'large-alert-content',
                        icon: 'large-alert-icon',
                        confirmButton: 'large-alert-button',
                        cancelButton: 'large-alert-buttonText'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Si el usuario confirma, enviar la solicitud
                        fetch(url, {
                            method: 'POST' // Método HTTP para la solicitud
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.status === 'success') {
                                Swal.fire({
                                    icon: 'success',
                                    title: '¡Eliminado!',
                                    text: 'El registro fue eliminado exitosamente.',
                                    confirmButtonText: 'OK',
                                    customClass: {
                                        popup: 'large-alert-popup',
                                        title: 'large-alert-title',
                                        content: 'large-alert-content',
                                        icon: 'large-alert-icon',
                                        confirmButton: 'large-alert-button',
                                        cancelButton: 'large-alert-buttonText'
                                    }
                                }).then(() => {
                                    // Recargar la página o actualizar la tabla
                                    window.location.reload();
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'Hubo un problema al eliminar el registro.',
                                    confirmButtonText: 'OK',
                                    customClass: {
                                        popup: 'large-alert-popup',
                                        title: 'large-alert-title',
                                        content: 'large-alert-content',
                                        icon: 'large-alert-icon',
                                        confirmButton: 'large-alert-button',
                                        cancelButton: 'large-alert-buttonText'
                                    }
                                });
                            }
                        })
                        .catch(error => {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'No se pudo conectar con el servidor.',
                                confirmButtonText: 'OK',
                                customClass: {
                                    popup: 'large-alert-popup',
                                    title: 'large-alert-title',
                                    content: 'large-alert-content',
                                    icon: 'large-alert-icon',
                                    confirmButton: 'large-alert-button',
                                    cancelButton: 'large-alert-buttonText'
                                }
                            });
                        });
                    }
                });
            });
        });
        function cambiarPassword(idUsuario) {
            const generarBtn = document.getElementById('generar');
            const passwordInput = document.getElementById('password');
            const usuarioInput= document.getElementById('id');
            const nuevoId=idUsuario;
            usuarioInput.value = nuevoId;
            // Verificar si los elementos se seleccionaron correctamente
            console.log(generarBtn, passwordInput, idUsuario);
             // Función para generar la contraseña aleatoria
            function generarPasswordAleatoria(longitud = 12) {
                const caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_-+=<>?';
                let password = '';
                for (let i = 0; i < longitud; i++) {
                    password += caracteres.charAt(Math.floor(Math.random() * caracteres.length));
                }
                return password;
            }

            // Evento para generar contraseña
            generarBtn.addEventListener('click', () => {
                const nuevaPassword = generarPasswordAleatoria(); // Generar contraseña
                passwordInput.value = nuevaPassword; // Escribirla en el inpu
            });
        }
    </script>
<?php echo $this->endSection();?>