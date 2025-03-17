<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\RolesModel;
use App\Models\LibrosModel;
use App\Models\AreasconocimientoModel;
use App\Models\AlumnosModel;
use App\Models\UsuariosModel;
class Roles extends BaseController
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
        $roles= new RolesModel();
        $item['roles']= $roles->findAll();
        return view('admin/roles/index', $item);
    }
    
    public function create()
    {
        return view('admin/roles/create'); 
    }

    public function save()
    {
        $rol= $this->request->getPost('rol');
        $descripcion= $this->request->getPost('descripcion');
        $fecha = date('Y-m-d H:i:s');
        $data=["nombrerol"=>$rol,
               "descripcion"=>$descripcion,
               "created_at"=>$fecha
               ];
        $rolesModel= new RolesModel();
        $respuesta=$rolesModel->insertar($data);
        
        if ($respuesta > 0) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        }    
    }

    public function edit($id)
    {
        $roles= new RolesModel();
        $item['roles']= $roles->find($id);
        return view('admin/roles/edit', $item);
    }

    public function saveedit()
    {
        $id= $this->request->getPost('id');
        $rol= $this->request->getPost('rol');
        $descripcion= $this->request->getPost('descripcion');
        $fecha = date('Y-m-d H:i:s');
        $data=["nombrerol"=>$rol,
               "descripcion"=>$descripcion,
               "updated_at"=>$fecha
               ];
        $rolesModel= new RolesModel();
        $respuesta=$rolesModel->modificar($id,$data);
        
        if ($respuesta > 0) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        }  
    }

    public function delete($id)
    {
        $rolesModel= new RolesModel();
        $data=["idrol"=>$id];
        $respuesta=$rolesModel->borrar($id);

        if ($respuesta > 0) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        }  
    }
}
