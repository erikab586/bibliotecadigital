<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ConfiguracionModel;
class Configuracion extends BaseController
{
    public function index()
    {
        $conf= new ConfiguracionModel;
        $item['conf']= $conf->findAll();
        return view('admin/configuracion/configurar',$item); 
    }
    public function save() {
        $id=$this->request->getPost('id');
        $logoactual = $this->request->getPost('logoactual'); 
        $faviconactual = $this->request->getPost('faviconactual'); 
        $logo = $this->request->getFile('logo');
        $favicon = $this->request->getFile('favicon');
        $telefono = $this->request->getPost('telefono');
        $email = $this->request->getPost('email');
        $horario = $this->request->getPost('horario');
        $descripcion = $this->request->getPost('descripcion');
        $facebook = $this->request->getPost('facebook');
        $x = $this->request->getPost('ex');
        $instagram = $this->request->getPost('instagram');
        $youtube = $this->request->getPost('youtube'); 
        
        if (($logo==NULL) && ($favicon==NULL)) {
            $rutaLogo = null;
            $rutaFavicon = null;
            $rutaLogo = $logoactual;
            $rutaFavicon = $faviconactual;
        }
        else{
            $rutaLogo = null;
            $rutaFavicon = null;
            
            if ($logo && $logo->isValid() && !$logo->hasMoved()) {
                $nuevoLogo = $logo->getRandomName();
                if ($logo->move(FCPATH . 'uploads/pagina', $nuevoLogo)) {
                    $rutaLogo = 'uploads/pagina/' . $nuevoLogo;
                } else {
                    log_message('error', 'Error al mover el archivo imgLibro.');
                }
            }
        
            // Validar y mover el archivo imgAutor
           
            if ($favicon && $favicon->isValid() && !$favicon->hasMoved()) {
                $nuevoFavicon = $favicon->getRandomName();
                if ($favicon->move(FCPATH . 'uploads/pagina', $nuevoFavicon)) {
                    $rutaFavicon = 'uploads/pagina/' . $nuevoFavicon;
                } else {
                    log_message('error', 'Error al mover el archivo imgAutor.');
                }
            }
        }
        $fecha = date('Y-m-d H:i:s');
        $data = [
            "idconfiguracion"=>$id,
            "logo"=>$rutaLogo,
            "favicon"=>$rutaFavicon,
            "telefono"=>$telefono, 
            "correo"=>$email, 
            "horario"=>$horario, 
            "descripcion"=>$descripcion, 
            "url_facebook"=>$facebook,
            "url_x"=>$x, 
            "url_instagram"=>$instagram, 
            "url_youtube"=>$youtube,
            "created_at" => $fecha
        ];
       //var_dump($data); 
        $configuracionModel = new ConfiguracionModel();
        $respuesta = $configuracionModel->modificar($id,$data);
    
        if ($respuesta > 0) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        }
    }
}
