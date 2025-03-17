<?php

namespace App\Models;

use CodeIgniter\Model;

class AreasconocimientoModel extends Model
{
    protected $table            = 'areaconocimiento';
    protected $primaryKey       = 'idarea';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nombrearea'];

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
        $cobranzaModel= $this->db->table('areaconocimiento');
        $cobranzaModel->insert($data);
        return $this->db->InsertID();

    }

    public function modificar($id, $data)
    {
        $cobranzaModel= $this->db->table('areaconocimiento');
        $cobranzaModel->set($data);
        $cobranzaModel->where('idarea',$id);
        return $cobranzaModel->update();

    }
    public function borrar($id)
    {
        $cobranzaModel= $this->db->table('areaconocimiento');
        $cobranzaModel->where('idarea',$id);
        return $cobranzaModel->delete();
    }
}
