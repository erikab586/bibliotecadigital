<?php

namespace App\Models;

use CodeIgniter\Model;

class DescargasModel extends Model
{
    protected $table            = 'descarga';
    protected $primaryKey       = 'iddescarga';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['idlibro', 'idalumno'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function obtener($data)
    {
        $usuarioModel= $this->where($data);
        $usuarioModel= $this->join('roles', 'alumnos.idrol = roles.idrol');
        $usuarioModel= $this ->join('areaconocimiento', 'alumnos.idcarrera = areaconocimiento.idarea');
        $usuarioModel= $this->select('descarga.*, libros.*, alumnos.*');
        return $usuarioModel->get()->getResultArray();
    }

    public function insertar($data)
    {
        $cobranzaModel= $this->db->table('alumnos');
        $cobranzaModel->insert($data);
        return $this->db->InsertID();

    }

    public function modificar($id, $data)
    {
        $cobranzaModel= $this->db->table('alumnos');
        $cobranzaModel->set($data);
        $cobranzaModel->where('idalumno',$id);
        return $cobranzaModel->update();

    }
    public function borrar($id)
    {
        $cobranzaModel= $this->db->table('alumnos');
        $cobranzaModel->where('idalumno',$id);
        return $cobranzaModel->delete();
    }

    public function getDescargas($id) {
        return $this->db->table('descarga')
            ->select('descarga.*, libros.*, alumnos.*')
            ->join('libros', 'descarga.idlibro = libros.idlibros')
            ->join('alumnos', 'descarga.idalumno = alumnos.idalumno')
            ->where('descarga.idalumno',$id)
            ->get()
            ->getResult();
    }
    
}
