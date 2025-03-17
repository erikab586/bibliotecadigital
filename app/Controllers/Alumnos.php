<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AlumnosModel;
use App\Models\RolesModel;
use App\Models\LibrosModel;
use App\Models\ConfiguracionModel;
use App\Models\AreasconocimientoModel;
use App\Models\ConsultasModel;
use App\Models\UsuariosModel;
class Alumnos extends BaseController
{
    public function ingresando()
    {
        $email= $this->request->getPost('email');
        $password= $this->request->getPost('password');
        $UsuariosModel= new AlumnosModel();
        $item= $UsuariosModel->obtener(['email'=>$email]);
        if((count($item)>0)&&(password_verify($password,$item[0]['password'])))
        {
            $UsuariosModel->update($item[0]['idalumno'], ['ultimaconexion' => date('Y-m-d H:i:s')]);
            $data=["email"=> $item[0]['email'],
                  "nombrerol"=> $item[0]['nombrerol'],
                  "nombres"=> $item[0] ['nombres'],
                  "apaterno"=> $item[0]['apaterno'],
                  "amaterno"=>$item[0]['amaterno'],
                  "carrera"=> $item[0]['carrera'],
                  "ciclo"=> $item[0]['ciclo'],
                  "dni"=> $item[0]['dni'],
                  "matricula"=> $item[0]['matricula'],
                  "idrol"=>$item[0]['idrol'],
                  "idcarrera"=>$item[0]['idcarrera'],
                  "idalumno"=> $item[0]['idalumno']
            ];
            $session= session();
            $session->set($data);
            return $this->response->setJSON(['status' => 'success']);
        }

       else{
             return $this->response->setJSON(['status' => 'error']);
        }
        
    }

    public function cerrar()
    {
        $session= session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }
    public function inicio()
    {
        $session = \Config\Services::session();

        // Verificar si el estudiante está autenticado y tiene una carrera asignada
        if ($session->get('idcarrera') || $session->get('idalumno')) {
            $carreraId = $session->get('idcarrera'); // Obtener el ID de la carrera del estudiante
            $alumnoId = $session->get('idalumno');
            $libros= new LibrosModel();
            $item['libros']= $libros->getLibrerias($carreraId);
            $carreras= new AreasconocimientoModel();
            $item['carreras']= $carreras->findAll();
            $descargas= new ConsultasModel();
            $item['descargas']= $descargas->getConsultas($alumnoId);
            $configuracion= new ConfiguracionModel();
            $item['configuracion']= $configuracion->findAll();
        }
        //var_dump($item);
        return view('alumno/biblioteca',$item);
        
    
    }
    public function mostrardetalle($id)
    {
        $libros= new LibrosModel();
        $item['libros']= $libros->getIdLibrosConCarrera($id);
        $libreria= new LibrosModel();
        $item['libreria']= $libreria->getLibrosConCarrera();
        $carreras= new AreasconocimientoModel();
        $item['carreras']= $carreras->findAll();
        $configuracion= new ConfiguracionModel();
        $item['configuracion']= $configuracion->findAll();
        return view('alumno/detalle',$item);
    }
    public function leer($id)
    {
        $session = \Config\Services::session();

        // Verificar si el estudiante está autenticado y tiene una carrera asignada
        if ($session->get('idalumno')) {
            $alumnoId = $session->get('idalumno');

            // Realizar inserción en la tabla 'consulta'
            $consultaModel = new ConsultasModel(); // Asegúrate de crear este modelo
            $consultaModel->insert([
                'idalumno' => $alumnoId,
                'idlibro' => $id,
                'created_at' => date('Y-m-d H:i:s') // Fecha y hora actual
            ]);
            $libros= new LibrosModel();
            $item['libros']= $libros->getIdLibrosConCarrera($id);
            $libreria= new LibrosModel();
            $item['libreria']= $libreria->getLibrosConCarrera();
            $carreras= new AreasconocimientoModel();
            $item['carreras']= $carreras->findAll();
            $configuracion= new ConfiguracionModel();
            $item['configuracion']= $configuracion->findAll();
            $descargas= new ConsultasModel();
            $item['descargas']= $descargas->getConsultas($alumnoId);
        }
        return view('alumno/lectura',$item);
    }
    public function mostrarporcarrera($id)
    {
        
        $carreras= new AreasconocimientoModel();
        $item['carreras']= $carreras->findAll();
        $configuracion= new ConfiguracionModel();
        $item['configuracion']= $configuracion->findAll();
        $libros= new LibrosModel();
        $item['libros']= $libros->getLibrerias($id);
        return view('alumno/libreria',$item);
    }

    public function mostrar()
    {
        $libros= new LibrosModel();
        $item['libros']= $libros->getLibrosConCarrera();
        $carreras= new AreasconocimientoModel();
        $item['carreras']= $carreras->findAll();
        $configuracion= new ConfiguracionModel();
        $item['configuracion']= $configuracion->findAll();
        return view('alumno/libreria',$item);
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
        $alumnos= new AlumnosModel();
        $item['alumnos']= $alumnos->getAlumnosConRol();
        return view('admin/alumnos/index', $item);
    }

    public function create()
    {
        $roles= new RolesModel;
        $item['roles']= $roles->findAll();
        $carreras= new AreasconocimientoModel;
        $item['carreras']= $carreras->findAll();
        return view('admin/alumnos/create',$item); 
    }

    public function save()
    {
        $nombre= $this->request->getPost('nombre');
        $apellidopaterno= $this->request->getPost('apellidopaterno');
        $apellidomaterno= $this->request->getPost('apellidomaterno');
        $dni= $this->request->getPost('dni');
        $matricula= $this->request->getPost('matricula');
        $email= $this->request->getPost('email');
        $ciclo= $this->request->getPost('ciclo');
        $opciones=['cont'=>123456];
        $password= $this->request->getPost('password');
        $hash=password_hash($password, PASSWORD_BCRYPT,$opciones);
        $rol= $this->request->getPost('rol');
        $carrera= $this->request->getPost('carrera');
        $fecha = date('Y-m-d H:i:s');
        $data=["nombres"=>$nombre,
               "apaterno"=>$apellidopaterno,
               "amaterno"=>$apellidomaterno,
               "dni"=>$dni,
               "matricula"=>$matricula,
               "email"=>$email,
               "ciclo"=>$ciclo,
               "password"=>$hash,
               "idrol"=>$rol,
               "idcarrera"=>$carrera,
               "created_at"=>$fecha
               ];
        $alumnos= new AlumnosModel();
        $respuesta=$alumnos->insertar($data);
        
        if ($respuesta > 0) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        }    
    }

    public function edit($id)
    {
        $alumnos= new AlumnosModel();
        $item['alumnos']= $alumnos->getIdAlumnosConRol($id);
        $roles= new RolesModel();
        $item['roles']=$roles->findAll();
        $carreras= new AreasconocimientoModel;
        $item['carreras']= $carreras->findAll();
        return view('admin/alumnos/edit', $item);
    }

    public function saveedit()
    {
        $id= $this->request->getPost('id');
        $nombre= $this->request->getPost('nombre');
        $apellidopaterno= $this->request->getPost('apellidopaterno');
        $apellidomaterno= $this->request->getPost('apellidomaterno');
        $dni= $this->request->getPost('dni');
        $matricula= $this->request->getPost('matricula');
        $email= $this->request->getPost('email');
        $ciclo= $this->request->getPost('ciclo');
        $rol= $this->request->getPost('rol');
        $carrera= $this->request->getPost('carrera');
        $fecha = date('Y-m-d H:i:s');
        $data=["nombres"=>$nombre,
               "apaterno"=>$apellidopaterno,
               "amaterno"=>$apellidomaterno,
               "dni"=>$dni,
               "matricula"=>$matricula,
               "email"=>$email,
               "ciclo"=>$ciclo,
               "idrol"=>$rol,
               "idcarrera"=>$carrera,
               "created_at"=>$fecha
               ];
        $alumnos= new AlumnosModel();
        $respuesta=$alumnos->modificar($id, $data);
        
        if ($respuesta > 0) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        }   

    }

    public function delete($id)
    {
        $alumnos= new AlumnosModel();
        $data=["idalumno"=>$id];
        $respuesta=$alumnos->borrar($id);

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
        $alumnos= new AlumnosModel();
        $respuesta=$alumnos->modificar($id, $data);
        $alumnos= new AlumnosModel();
        $item['alumnos']= $alumnos->getAlumnosConRol();
        if ($respuesta > 0) {
            return redirect()->to('/alumnos');
        } else {
            return redirect()->to('/alumnos');
        } 
    }
}
