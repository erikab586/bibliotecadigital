<?php

namespace App\Models;

use CodeIgniter\Model;

class LibrosModel extends Model
{
    protected $table            = 'libros';
    protected $primaryKey       = 'idlibros';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['codigo', 'titulo', 'nombreautor', 'editorial', 'edicion', 
    'aniopublicacion', 'lugarpublicacion', 'sinopsis', 'imagen','imgautor', 'urlarchivo', 
    'palabrasclave', 'id_carrera'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function insertar($data)
    {
        $cobranzaModel= $this->db->table('libros');
        $cobranzaModel->insert($data);
        return $this->db->InsertID();

    }

    public function modificar($id, $data)
    {
        $cobranzaModel= $this->db->table('libros');
        $cobranzaModel->set($data);
        $cobranzaModel->where('idlibros',$id);
        return $cobranzaModel->update();

    }

    public function borrar($id)
    {
        $cobranzaModel= $this->db->table('libros');
        $cobranzaModel->where('idlibros',$id);
        return $cobranzaModel->delete();
    }

    public function getLibrosConCarrera() {
        return $this->db->table('libros')
            ->select('libros.*, areaconocimiento.nombrearea AS carrera')
            ->join('areaconocimiento', 'libros.id_carrera = areaconocimiento.idarea')
            ->get()
            ->getResult();
    }

    public function getIdLibrosConCarrera($id) {
        return $this->db->table('libros')
            ->select('libros.*, areaconocimiento.nombrearea AS carrera, areaconocimiento.idarea AS id')
            ->join('areaconocimiento', 'libros.id_carrera = areaconocimiento.idarea')
            ->where('idlibros', $id)
            ->get()
            ->getRow();
    }


    public function getLibrosPorAutor()
    {
        $builder = $this->db->table('libros');
        $builder->select('idlibros,nombreautor,imgautor, COUNT(*) as cantidad, GROUP_CONCAT(titulo SEPARATOR ", ") as libros');
        $builder->groupBy('nombreautor');
        $query = $builder->get();
        return $query->getResult();
    }
    public function getLibrosPorCarrera($id) {
        return $this->db->table('libros')
            ->select('libros.*, areaconocimiento.nombrearea AS carrera, areaconocimiento.idarea AS id')
            ->join('areaconocimiento', 'libros.id_carrera = areaconocimiento.idarea')
            ->where('id_carrera', $id)
            ->get()
            ->getRow();
    }

    public function getLibrerias($id) {
        return $this->db->table('libros')
            ->select('libros.*, areaconocimiento.nombrearea AS carrera')
            ->join('areaconocimiento', 'libros.id_carrera = areaconocimiento.idarea')
            ->where('id_carrera',$id)
            ->get()
            ->getResult();
    }
   
    
}
