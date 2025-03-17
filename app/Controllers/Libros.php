<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LibrosModel;
use App\Models\AreasconocimientoModel;
use App\Models\AlumnosModel;
use App\Models\UsuariosModel;
class Libros extends BaseController
{
    public function index()
    {
        $librosModel = new LibrosModel();
        $areasModel = new AreasconocimientoModel();
        $usuariosModel = new UsuariosModel();
        $alumnosModel = new AlumnosModel();
        $item= [
            'total_libros' => $librosModel->countAll(), // Contar total de libros
            'total_carreras' => $areasModel->countAll(), // Contar total de carreras
            'total_bibliotecarios' => $usuariosModel->where('idrol', '2')->countAllResults(), // Contar bibliotecarios
            'total_alumnos' => $alumnosModel->countAll() // Contar alumnos
        ];
        $libros= new LibrosModel();
        $item['libros']= $libros->getLibrosConCarrera();
        return view('admin/libros/index', $item);
    }
    public function create()
    {
        $carreras= new AreasconocimientoModel();
        $item['carreras']= $carreras->findAll();
        return view('admin/libros/create', $item); 
    }

    public function save() {
        $codigo = $this->request->getPost('codigo');
        $titulo = $this->request->getPost('titulo');
        $nuevoautor = $this->request->getPost('nombreautor');
        $editorial = $this->request->getPost('editorial');
        $carrera = $this->request->getPost('carrera');
        $edicion = $this->request->getPost('edicion');
        $anio = $this->request->getPost('anio');
        $lugar = $this->request->getPost('lugar');
        $sinopsis = $this->request->getPost('sinopsis');
        $palabras = $this->request->getPost('palabras'); 
        $archivo = $this->request->getFile('archivo'); 
        $imglibro = $this->request->getFile('imglibro'); 
        $imgautor = $this->request->getFile('imgautor'); 
    
        // Validar y mover el archivo principal (archivo)
        $rutaArchivo = null;
        if ($archivo && $archivo->isValid() && !$archivo->hasMoved()) {
            $nuevoArchivo = $archivo->getRandomName();
            if ($archivo->move(FCPATH . 'uploads/libros', $nuevoArchivo)) {
                $rutaArchivo = 'uploads/libros/' . $nuevoArchivo;
            } else {
                log_message('error', 'Error al mover el archivo principal.');
            }
        }
    
        // Validar y mover el archivo imgLibro
        $rutaImgLibro = null;
        if ($imglibro && $imglibro->isValid() && !$imglibro->hasMoved()) {
            $nuevoNombreLibro = $imglibro->getRandomName();
            if ($imglibro->move(FCPATH . 'uploads/libros', $nuevoNombreLibro)) {
                $rutaImgLibro = 'uploads/libros/' . $nuevoNombreLibro;
            } else {
                log_message('error', 'Error al mover el archivo imgLibro.');
            }
        }
    
        // Validar y mover el archivo imgAutor
        $rutaImgAutor = null;
        if ($imgautor && $imgautor->isValid() && !$imgautor->hasMoved()) {
            $nuevoNombreAutor = $imgautor->getRandomName();
            if ($imgautor->move(FCPATH . 'uploads/autores', $nuevoNombreAutor)) {
                $rutaImgAutor = 'uploads/autores/' . $nuevoNombreAutor;
            } else {
                log_message('error', 'Error al mover el archivo imgAutor.');
            }
        }
    
        $fecha = date('Y-m-d H:i:s');
        $data = [
            "codigo" => $codigo,
            "titulo" => $titulo,
            "nombreautor" => $nuevoautor,
            "editorial" => $editorial,
            "edicion" => $edicion,
            "aniopublicacion" => $anio,
            "lugarpublicacion" => $lugar,
            "sinopsis" => $sinopsis,
            "imagen" => $rutaImgLibro,
            "imgautor" => $rutaImgAutor,
            "urlarchivo" => $rutaArchivo,
            "palabrasclave" => $palabras,
            "id_carrera" => $carrera,
            "created_at" => $fecha
        ];
        
        $librosModel = new LibrosModel();
        $respuesta = $librosModel->insertar($data);
    
        if ($respuesta > 0) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        }
    }
    

    public function edit($id)
    {
        $libros= new LibrosModel();
        $item['libros']= $libros->getIdLibrosConCarrera($id);
        $carreras= new AreasconocimientoModel();
        $item['carreras']= $carreras->findAll();
        return view('admin/libros/edit', $item);
    }

    public function saveedit()
    {
        $id= $this->request->getPost('id');
        $codigo = $this->request->getPost('codigo');
        $titulo = $this->request->getPost('titulo');
        $nuevoautor = $this->request->getPost('nombreautor');
        $editorial = $this->request->getPost('editorial');
        $carrera = $this->request->getPost('carrera');
        $edicion = $this->request->getPost('edicion');
        $anio = $this->request->getPost('anio');
        $lugar = $this->request->getPost('lugar');
        $sinopsis = $this->request->getPost('sinopsis');
        $palabras = $this->request->getPost('palabras');
        $archivoactual = $this->request->getPost('archivoactual'); 
        $imglibroactual = $this->request->getPost('imagenactual');
        $imgautoractual = $this->request->getPost('imgautoractual');  
        $archivo = $this->request->getFile('archivo'); 
        $imglibro = $this->request->getFile('imglibro'); 
        $imgautor = $this->request->getFile('imgautor');
    
        // Validar y mover el archivo principal (archivo)
        if (!$archivo || $archivo->getError() !== UPLOAD_ERR_OK) {
            
            $rutaArchivo = $archivoactual;
        }
        else{
          
            if ($archivo && $archivo->isValid() && !$archivo->hasMoved()) {
                $nuevoArchivo = $archivo->getRandomName();
                if ($archivo->move(FCPATH . 'uploads/libros', $nuevoArchivo)) {
                    $rutaArchivo = 'uploads/libros/' . $nuevoArchivo;
                } else {
                    log_message('error', 'Error al mover el archivo principal.');
                }
            }
        }
        
    
        if (!$imglibro || $imglibro->getError() !== UPLOAD_ERR_OK)  {
         
            $rutaImgLibro= $imglibroactual;
        }
        else{
          
            if ($imglibro && $imglibro->isValid() && !$imglibro->hasMoved()) {
                $nuevoNombreLibro = $imglibro->getRandomName();
                if ($imglibro->move(FCPATH . 'uploads/libros', $nuevoNombreLibro)) {
                    $rutaImgLibro = 'uploads/libros/' . $nuevoNombreLibro;
                } else {
                    log_message('error', 'Error al mover el archivo imgLibro.');
                }
            }
        }
    
        if (!$imgautor || $imgautor->getError() !== UPLOAD_ERR_OK) {
            
            $rutaImgAutor= $imgautoractual;
        }
        else{
            $rutaImgAutor = null;
            if ($imgautor && $imgautor->isValid() && !$imgautor->hasMoved()) {
                $nuevoNombreAutor = $imgautor->getRandomName();
                if ($imgautor->move(FCPATH . 'uploads/autores', $nuevoNombreAutor)) {
                    $rutaImgAutor = 'uploads/autores/' . $nuevoNombreAutor;
                } else {
                    log_message('error', 'Error al mover el archivo imgAutor.');
                }
            }
        }
    
        $fecha = date('Y-m-d H:i:s');
        $data = [
            "codigo" => $codigo,
            "titulo" => $titulo,
            "nombreautor" => $nuevoautor,
            "editorial" => $editorial,
            "edicion" => $edicion,
            "aniopublicacion" => $anio,
            "lugarpublicacion" => $lugar,
            "sinopsis" => $sinopsis,
            "imagen" => $rutaImgLibro,
            "imgautor" => $rutaImgAutor,
            "urlarchivo" => $rutaArchivo,
            "palabrasclave" => $palabras,
            "id_carrera" => $carrera,
            "created_at" => $fecha
        ];
        
        $librosModel = new LibrosModel();
        $respuesta = $librosModel->modificar($id, $data);
    
        if ($respuesta > 0) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        }//var_dump($data);
    }

    public function delete($id)
    {
        $libros= new LibrosModel();
        $data=["idlibro"=>$id];
        $respuesta=$libros->borrar($id);

        if ($respuesta > 0) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        } 
    }
}
