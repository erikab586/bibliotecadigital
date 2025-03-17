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
                <h2>LIBROS</h2>
            </div>
          <!-- Input Group -->
            <div class="row clearfix">
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDITAR NUEVO LIBRO
                            </h2>
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">Llenar el formulario</h2>
                            <div class="row clearfix">
                                <form id="edicionLibroForm" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?=$libros->idlibros?>">
                                    <div class="col-md-9">
                                        <p>
                                            <b>Código</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">account_circle</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" id="codigo" name="codigo" class="form-control" value="<?=$libros->codigo?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" id="generar" class="btn btn-block btn-lg btn-primary waves-effect">
                                            <i class="material-icons">cached</i>
                                            <span>GENERAR</span>
                                        </button>
                                    </div>
                                    <div class="col-md-12">
                                        <p>
                                            <b>Título</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">assignment</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="titulo" class="form-control" value="<?=$libros->titulo?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p>
                                            <b>Nombre del Autor</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">assignment</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="nombreautor" class="form-control" value="<?=$libros->nombreautor?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p>
                                            <b>Editorial</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">assignment</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="editorial" class="form-control" value="<?=$libros->editorial?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p>
                                            <b>Carreras</b>
                                        </p>
                                        
                                        <select name="carrera" class="form-control show-tick" >
                                            <option value="<?=$libros->id?>"><?=$libros->carrera?></option>
                                            <?php foreach ($carreras as $c) : ?>
                                            <option  value="<?=$c['idarea']?>"><?=$c['nombrearea']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                            <b>Edición</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">assignment</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="edicion" class="form-control" value="<?=$libros->edicion?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                            <b>Año de Publicación</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">assignment</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="anio" class="form-control" value="<?=$libros->aniopublicacion?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                            <b>Lugar de Publicación</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">assignment</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="lugar" class="form-control" value="<?=$libros->lugarpublicacion?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p>
                                            <b>Sinopsis</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">assignment</i>
                                            </span>
                                            <div class="form-line">
                                                <textarea type="text" name="sinopsis" row="5" class="form-control"><?=$libros->sinopsis?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p>
                                            <b>Palabras clave</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">assignment</i>
                                            </span>
                                            <div class="form-line">
                                                <textarea type="text" name="palabras" row="5" class="form-control" ><?=$libros->palabrasclave?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <b>Archivo Actual</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">assignment</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="archivoactual" value="<?=$libros->urlarchivo?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <b>Cargar Archivo</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">assignment</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="file" name="archivo" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <div style="width: 15%; heigth: 15%;">
                                        <img src="<?= base_url($libros->imagen)?>" style="width: 100%; heigth: 100%;">
                                        </div>
                                       
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                            </span>
                                            <div class="form-line" style="border: 1px solid #FFF;">
                                                <input type="text" name="imagenactual" value="<?=$libros->imagen?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 text-center">
                                        <div style="width: 15%; heigth: 15%;">
                                            <img src="<?= base_url($libros->imgautor)?>"style="width: 100%; heigth: 100%;">
                                        </div>
                                        
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                            </span>
                                            <div class="form-line" >
                                                <input type="text" name="imgautoractual" value="<?=$libros->imgautor?>" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <b>Imagen de Libro</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">assignment</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="file" name="imglibro" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <b>Imagen de Autor</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">assignment</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="file" name="imgautor" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="reset" class="btn btn-block btn-lg btn-danger  waves-effect">
                                            <i class="material-icons">delete_forever</i>
                                            <span>CANCELAR </span>
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-block btn-lg btn-primary waves-effect">
                                            <i class="material-icons">add_circle</i>
                                            <span>GUARDAR </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- #END# Input Group -->
        </div>
</section>
<script>
    const generarBtn = document.getElementById('generar');
    const passwordInput = document.getElementById('codigo');

    // Verificar si los elementos se seleccionaron correctamente
    console.log(generarBtn, passwordInput);

    // Función para generar la contraseña aleatoria
    function generarPasswordAleatoria(longitud = 12) {
        const caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
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

    document.getElementById('edicionLibroForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);

        fetch('<?= base_url("/guardaredicionl") ?>', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                Swal.fire({
                    icon: 'success',
                    title: 'Éxito',
                    text: 'El libro se ha modificado correctamente',
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
                    window.location.href = '<?= base_url("/libros") ?>';
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Hubo un problema al modificar el libro',
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