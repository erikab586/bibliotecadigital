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
                <h2>ALUMNOS</h2>
            </div>
          <!-- Input Group -->
            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CREAR NUEVO ALUMNO
                            </h2>
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">Llenar el formulario</h2>
                            <div class="row clearfix">
                                <form id="alumnoForm">
                                    <div class="col-md-12">
                                        <p>
                                            <b>Nombres</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">account_circle</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="nombre" class="form-control" placeholder="Nombres">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <b>Apellido Paterno</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">account_circle</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="apellidopaterno" class="form-control" placeholder="Apellido Paterno">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <b>Apellido Materno</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">account_circle</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="apellidomaterno" class="form-control" placeholder="Apellido Materno">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <b>DNI</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">account_circle</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="dni" class="form-control" placeholder="DNI">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <b>Matricula</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">account_circle</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="matricula" class="form-control" placeholder="matricula">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <p>
                                            <b>Email</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">assignment</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="email" name="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <p>
                                            <b>Ciclo</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">assignment</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="ciclo" class="form-control" placeholder="Ciclo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <p>
                                            <b>Password</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">assignment</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="password" class="form-control" placeholder="Password" id="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-block btn-lg btn-primary waves-effect" id="generar">
                                            <i class="material-icons">cached</i>
                                            <span>GENERAR</span>
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                    <p>
                                        <b>Rol de Usuario</b>
                                    </p>
                                    
                                    <select name="rol" class="form-control show-tick" >
                                        <option value="">SELECCIONAR UN ROL</option>
                                        <?php foreach ($roles as $r) : ?>
                                        <option  value="<?=$r['idrol']?>"><?=$r['nombrerol']?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <b>Carreras</b>
                                        </p>
                                        
                                        <select name="carrera" class="form-control show-tick" >
                                            <option value="">SELECCIONAR AREA DE CONOCIMIENTO</option>
                                            <?php foreach ($carreras as $c) : ?>
                                            <option  value="<?=$c['idarea']?>"><?=$c['nombrearea']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="reset" class="btn btn-block btn-lg btn-danger waves-effect">
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
    const generarBtn = document.getElementById('generar');
    const passwordInput = document.getElementById('password');

    // Verificar si los elementos se seleccionaron correctamente
    console.log(generarBtn, passwordInput);

    // Función para generar la contraseña aleatoria
    function generarPasswordAleatoria(longitud = 12) {
        const caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-';
        let password = '';
        for (let i = 0; i < longitud; i++) {
            password += caracteres.charAt(Math.floor(Math.random() * caracteres.length));
        }
        return password;
    }

    // Evento para generar contraseña
    generarBtn.addEventListener('click', () => {
        const nuevaPassword = generarPasswordAleatoria(); // Generar contraseña
        passwordInput.value = nuevaPassword; // Escribirla en el input
    });

    document.getElementById('alumnoForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);

        fetch('<?= base_url("/guardaralumnos") ?>', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                Swal.fire({
                    icon: 'success',
                    title: 'Éxito',
                    text: 'El alumno se ha guardado correctamente',
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
                    window.location.href = '<?= base_url("/alumnos") ?>';
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Hubo un problema al guardar el alumno',
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