<?php

namespace App\Models;

use CodeIgniter\Model;

class ConsultasModel extends Model
{
    protected $table            = 'consulta';
    protected $primaryKey       = 'idconsulta';
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
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getConsultas($id) {
        return $this->db->table('consulta')
            ->select('consulta.*, libros.*, alumnos.*')
            ->join('libros', 'consulta.idlibro = libros.idlibros')
            ->join('alumnos', 'consulta.idalumno = alumnos.idalumno')
            ->where('consulta.idalumno',$id)
            ->get()
            ->getResult();
    }

    public function obtener() {
        return $this->db->table('consulta')
            ->select('consulta.*, libros.*, alumnos.*, areaconocimiento.nombrearea as carrera')
            ->join('libros', 'consulta.idlibro = libros.idlibros')
            ->join('alumnos', 'consulta.idalumno = alumnos.idalumno')
            ->join('areaconocimiento', 'alumnos.idcarrera = areaconocimiento.idarea')
            ->get()
            ->getResult();
    }

    public function insertar($data)
    {
        $cobranzaModel= $this->db->table('consulta');
        $cobranzaModel->insert($data);
        return $this->db->InsertID();

    }

    public function modificar($id, $data)
    {
        $cobranzaModel= $this->db->table('consulta');
        $cobranzaModel->set($data);
        $cobranzaModel->where('idconsulta',$id);
        return $cobranzaModel->update();

    }
    public function borrar($id)
    {
        $cobranzaModel= $this->db->table('consulta');
        $cobranzaModel->where('idconsulta',$id);
        return $cobranzaModel->delete();
    }
    
}
