<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ConsultasModel;
use App\Models\LibrosModel;
use App\Models\AreasconocimientoModel;
use App\Models\AlumnosModel;
use App\Models\UsuariosModel;
class Consultas extends BaseController
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
        $consultas= new ConsultasModel();
        $item['consultas']= $consultas->obtener();
        return view('admin/consultas/index', $item);
    }

    
}
