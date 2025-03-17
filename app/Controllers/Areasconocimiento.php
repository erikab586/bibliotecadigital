<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LibrosModel;
use App\Models\AreasconocimientoModel;
use App\Models\AlumnosModel;
use App\Models\UsuariosModel;
class Areasconocimiento extends BaseController
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

        $carreras= new AreasconocimientoModel();
        $item['carreras']= $carreras->findAll();
        return view('admin/carreras/index', $item);
    }
    
    public function create()
    {
        return view('admin/carreras/create'); 
    }

    public function save()
    {
        $nombre= $this->request->getPost('nombre');
        $fecha = date('Y-m-d H:i:s');
        $data=["nombrearea"=>$nombre,
               "created_at"=>$fecha
               ];
        $carreras= new AreasconocimientoModel();
        $respuesta=$carreras->insertar($data);
        
        if ($respuesta > 0) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        } 

    }

    public function edit($id)
    {
        $carreras= new AreasconocimientoModel();
        $item['carreras']= $carreras->find($id);
        return view('admin/carreras/edit',$item);
    }

    public function saveedit()
    {
        $id= $this->request->getPost('id');
        $nombre= $this->request->getPost('nombre');
        $fecha = date('Y-m-d H:i:s');
        $data=["nombrearea"=>$nombre,
               "updated_at"=>$fecha
               ];
        $carreras= new AreasconocimientoModel();
        $respuesta=$carreras->modificar($id,$data);
        
        if ($respuesta > 0) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        } 
    }

    public function delete($id)
    {
        $carreras= new AreasconocimientoModel();
        $data=["idarea"=>$id];
        $respuesta=$carreras->borrar($id);

        if ($respuesta > 0) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        }  
    }
}
