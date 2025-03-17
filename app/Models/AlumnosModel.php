<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumnosModel extends Model
{
    protected $table            = 'alumnos';
    protected $primaryKey       = 'idalumno';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nombres', 'apaterno', 'amaterno', 'dni', 'matricula', 'password', 
    'email', 'ciclo', 'ultimaconexion', 'idrol', 'idcarrera'];

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
        $usuarioModel= $this->select('alumnos.*, roles.nombrerol AS nombrerol, areaconocimiento.nombrearea AS carrera, areaconocimiento.idarea AS idarea');
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

    public function getAlumnosConRol() {
        $cobranzaModel = $this->db->table('alumnos')
            ->join('roles', 'alumnos.idrol = roles.idrol')
            ->join('areaconocimiento', 'alumnos.idcarrera = areaconocimiento.idarea')
            ->select('alumnos.*, roles.nombrerol AS nombrerol, areaconocimiento.nombrearea AS carrera')
            ->get(); // Ejecuta la consulta
    
        return $cobranzaModel->getResult(); // Devuelve todos los registros como un array de objetos
    }
    public function getIdAlumnosConRol($id) {
        $cobranzaModel = $this->db->table('alumnos')
            ->where('idalumno',$id)
            ->join('roles', 'alumnos.idrol = roles.idrol')
            ->join('areaconocimiento', 'alumnos.idcarrera = areaconocimiento.idarea')
            ->select('alumnos.*, roles.nombrerol AS nombrerol, areaconocimiento.nombrearea AS carrera, areaconocimiento.idarea AS idarea')
            ->get(); // Ejecuta la consulta
    
        return $cobranzaModel->getRow(); // Devuelve todos los registros como un array de objetos
    }
}
