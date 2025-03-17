<?php

namespace App\Controllers;
use App\Models\LibrosModel;
use App\Models\AreasconocimientoModel;
use App\Models\ConfiguracionModel;
class Home extends BaseController
{
    public function index()
    {
        $libros= new LibrosModel();
        $item['libros']= $libros->getLibrosConCarrera();
        $carreras= new AreasconocimientoModel();
        $item['carreras']= $carreras->findAll();
        $librosxautor= new LibrosModel();
        $item['librosxautor']= $librosxautor->getLibrosPorAutor();
        $configuracion= new ConfiguracionModel();
        $item['configuracion']= $configuracion->findAll();
        return view('biblioteca',$item);
    }
    public function mostrar()
    {
        $libros= new LibrosModel();
        $item['libros']= $libros->getLibrosConCarrera();
        $carreras= new AreasconocimientoModel();
        $item['carreras']= $carreras->findAll();
        $configuracion= new ConfiguracionModel();
        $item['configuracion']= $configuracion->findAll();
        return view('libreria',$item);
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
        return view('detalle',$item);
    }
    public function mostrarporcarrera($id)
    {
        $carreras= new AreasconocimientoModel();
        $item['carreras']= $carreras->findAll();
        $configuracion= new ConfiguracionModel();
        $item['configuracion']= $configuracion->findAll();
        $libros= new LibrosModel();
        $item['libros']= $libros->getLibrerias($id);
        return view('carrera',$item);
    }
    public function mostrarderecho()
    {
        $id=4;
        $libros= new LibrosModel();
        $item['libros']= $libros->getLibrerias($id);
        $carreras= new AreasconocimientoModel();
        $item['carreras']= $carreras->findAll();
        $configuracion= new ConfiguracionModel();
        $item['configuracion']= $configuracion->findAll();
        return view('derecho',$item);
    }
    public function mostrarpsicologia()
    {
        $id=3;
        $libros= new LibrosModel();
        $item['libros']= $libros->getLibrerias($id);
        $carreras= new AreasconocimientoModel();
        $item['carreras']= $carreras->findAll();
        $configuracion= new ConfiguracionModel();
        $item['configuracion']= $configuracion->findAll();
        return view('psicologia',$item);
    }
    public function mostraradministracion()
    {
        $id=1;
        $libros= new LibrosModel();
        $item['libros']= $libros->getLibrerias($id);
        $carreras= new AreasconocimientoModel();
        $item['carreras']= $carreras->findAll();
        $configuracion= new ConfiguracionModel();
        $item['configuracion']= $configuracion->findAll();
        return view('administracion',$item);
    }
    public function mostrarlibrosautor()
    {
        $librosxautor= new LibrosModel();
        $item['librosxautor']= $librosxautor->getLibrosPorAutor();
        var_dump($item);
        return $item;
    }
    public function probando($id)
    {
        $libros= new LibrosModel();
        $item['libros']= $libros->getIdLibrosConCarrera($id);
        $carreras= new AreasconocimientoModel();
        $item['carreras']= $carreras->findAll();
        $configuracion= new ConfiguracionModel();
        $item['configuracion']= $configuracion->findAll();
        return view('detalle',$item);
    }

}
