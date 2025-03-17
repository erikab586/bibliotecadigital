<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\DescargasModel;
class Descargas extends BaseController
{
    public function index()
    {
        $descargas= new DescargasModel();
        $item['descargas']= $descargas->findAll();
        return view('admin/descargas/index', $item);
    }
    public function create()
    {
        return view('admin/descargas/create'); 
    }

    public function save()
    {

    }

    public function edit()
    {

    }

    public function saveedit()
    {

    }

    public function delete()
    {
        
    }
}
