<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsuariosModel;
use App\Models\RolesModel;
use App\Models\ConfiguracionModel;
use App\Models\LibrosModel;
use App\Models\AreasconocimientoModel;
use App\Models\AlumnosModel;
class Usuarios extends BaseController
{
    public function loginForm()
    {
        $configuracion= new ConfiguracionModel();
        $item['configuracion']= $configuracion->first();
        return view('login', $item);
    }

    public function verifyLogin()
    {
        $email= $this->request->getPost('email');
        $password= $this->request->getPost('password');
        $UsuariosModel= new UsuariosModel();
        $item= $UsuariosModel->obtener(['email'=>$email]);
        if((count($item)>0)&&(password_verify($password,$item[0]['password'])))
        {
            $UsuariosModel->update($item[0]['idusuario'], ['ultimaconexion' => date('Y-m-d H:i:s')]);
            $data=["email"=> $item[0]['email'],
                  "idrol"=> $item[0]['idrol'],
                  "nombre"=> $item[0] ['nombreusuario'],
                  "apellido"=> $item[0]['apellidousuario'],
            ];
            $session= session();
            $session->set($data);
            return $this->response->setJSON(['status' => 'success']);
        }
        else{
            return $this->response->setJSON(['status' => 'error']);
        }
    }

    public function close()
    {
        $session= session();
        $session->destroy();
        return redirect()->to(base_url('/ingresar'));
    }


    public function login()
    {
        $configuracion= new ConfiguracionModel();
        $item['configuracion']= $configuracion->first();
        return view('login', $item);
    }

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

        $usuarios= new UsuariosModel();
        $item['usuarios']= $usuarios->getUsuariosConRol();
        return view('admin/usuarios/index', $item);
    }

    public function create()
    {
        $roles= new RolesModel();
        $item['roles']=$roles->findAll();
        return view('admin/usuarios/create', $item); 
    }

    public function save()
    {
        $nombre= $this->request->getPost('nombre');
        $apellido= $this->request->getPost('apellido');
        $email= $this->request->getPost('email');
        $opciones=['cont'=>123456];
        $password= $this->request->getPost('password');
        $hash=password_hash($password, PASSWORD_BCRYPT,$opciones);
        $rol= $this->request->getPost('rol');
        $fecha = date('Y-m-d H:i:s');
        $data=["nombreusuario"=>$nombre,
               "apellidousuario"=>$apellido,
               "email"=>$email,
               "password"=> $hash,
               "idrol"=>$rol,
               "created_at"=>$fecha
        ];
        
        $usuarios= new UsuariosModel();
        $respuesta=$usuarios->insertar($data);
        
        if ($respuesta > 0) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        }   
    }

    public function edit($id)
    {
        $usuarios= new UsuariosModel();
        $item['usuarios']= $usuarios->getIdUsuariosConRol($id);
        $roles= new RolesModel();
        $item['roles']=$roles->findAll();
        return view('admin/usuarios/edit', $item);
    }

    public function saveedit()
    {
        $id= $this->request->getPost('id');
        $nombre= $this->request->getPost('nombre');
        $apellido= $this->request->getPost('apellido');
        $email= $this->request->getPost('email');
        $rol= $this->request->getPost('rol');
        $fecha = date('Y-m-d H:i:s');
        $data=["nombreusuario"=>$nombre,
               "apellidousuario"=>$apellido,
               "email"=>$email,
               "idrol"=>$rol,
               "updated_at"=>$fecha
        ];
        $usuarios= new UsuariosModel();
        $respuesta=$usuarios->modificar($id, $data);
        
        if ($respuesta > 0) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        } 
    }
    
    public function savepassword()
    {
        $id= $this->request->getPost('id');
        $opciones=['cont'=>123456];
        $password= $this->request->getPost('password');
        $hash=password_hash($password, PASSWORD_BCRYPT,$opciones);
        $fecha = date('Y-m-d H:i:s');
        $data=["password"=>$hash,
               "updated_at"=>$fecha
        ];
        $usuarios= new UsuariosModel();
        $respuesta=$usuarios->modificar($id, $data);
        $usuarios= new UsuariosModel();
        $item['usuarios']= $usuarios->getUsuariosConRol();
        //var_dump($data); echo $respuesta;
        if ($respuesta > 0) {
            return redirect()->to('/usuarios');
        } else {
            return redirect()->to('/usuarios');
        } 
    }
    public function delete($id)
    {
        $usuariosModel= new UsuariosModel();
        $data=["idusuario"=>$id];
        $respuesta=$usuariosModel->borrar($id);

        if ($respuesta > 0) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        }  
    }
}
