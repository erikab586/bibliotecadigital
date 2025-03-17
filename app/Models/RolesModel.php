<?php

namespace App\Models;

use CodeIgniter\Model;

class RolesModel extends Model
{
    protected $table            = 'roles';
    protected $primaryKey       = 'idrol';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nombrerol', 'descripcion'];

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
        $cobranzaModel= $this->db->table('roles');
        $cobranzaModel->insert($data);
        return $this->db->InsertID();

    }

    public function modificar($id, $data)
    {
        $cobranzaModel= $this->db->table('roles');
        $cobranzaModel->set($data);
        $cobranzaModel->where('idrol',$id);
        return $cobranzaModel->update();

    }
    public function borrar($id)
    {
        $cobranzaModel= $this->db->table('roles');
        $cobranzaModel->where('idrol',$id);
        return $cobranzaModel->delete();
    }

}
