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

</style>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>ROLES</h2>
            </div>
          <!-- Input Group -->
            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDITAR ROL DE USUARIO
                            </h2>
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">Llenar el formulario</h2>
                            <div class="row clearfix">
                                <form id="edicionRolForm">
                                    <input type="hidden" name="id" value="<?=$roles['idrol']?>">
                                    <div class="col-md-12">
                                        <p>
                                            <b>Rol de Usuario</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">account_circle</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="rol" class="form-control" value="<?=$roles['nombrerol']?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p>
                                            <b>Descripción de Rol</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">assignment</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="descripcion" class="form-control" value="<?=$roles['descripcion']?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="reset" class="btn btn-block btn-lg btn-danger  waves-effect">
                                            <i class="material-icons">delete_forever</i>
                                            <span>CANCELAR</span>
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-block btn-lg btn-primary  waves-effect">
                                            <i class="material-icons">add_circle</i>
                                            <span>GUARDAR</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                </div>
            </div>
            <!-- #END# Input Group -->
        </div>
</section>
<script>
    document.getElementById('edicionRolForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);

        fetch('<?= base_url("/guardaredicion") ?>', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                Swal.fire({
                    icon: 'success',
                    title: 'Éxito',
                    text: 'El rol se ha modificado correctamente',
                    confirmButtonText: 'OK',
                    width: '50vw',  // Ajusta el ancho de la alerta
                    padding: '3em',  // Añade padding para hacerla más grande
                    customClass: {
                        popup: 'large-alert-popup',  // Clase CSS personalizada para ajustar el tamaño
                        title: 'large-alert-title',  // Clase CSS personalizada para el título
                        content: 'large-alert-content',  // Clase CSS personalizada para el contenido
                        icon: 'large-alert-icon',  // Clase CSS personalizada para el icono
                        confirmButton: 'large-alert-button'  // Clase CSS personalizada para el botón
                    }
                }).then(() => {
                    window.location.href = '<?= base_url("/roles") ?>';
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Hubo un problema al modificar el rol',
                    confirmButtonText: 'OK',
                    width: '50vw',
                    padding: '3em',
                    customClass: {
                        popup: 'large-alert-popup',
                        title: 'large-alert-title',
                        content: 'large-alert-content',
                        icon: 'large-alert-icon',
                        confirmButton: 'large-alert-button'
                    }
                });
            }
        })
        .catch(error => {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Hubo un problema al enviar el formulario',
                confirmButtonText: 'OK',
                width: '50vw',
                padding: '3em',
                customClass: {
                    popup: 'large-alert-popup',
                    title: 'large-alert-title',
                    content: 'large-alert-content',
                    icon: 'large-alert-icon',
                    confirmButton: 'large-alert-button'
                }
            });
        });
    });



</script>
<?php echo $this->endSection();?>