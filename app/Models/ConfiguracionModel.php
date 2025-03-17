<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfiguracionModel extends Model
{
    protected $table            = 'configuracion';
    protected $primaryKey       = 'idconfiguracion';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['logo', 'favicon','telefono', 'correo', 'horario', 'descripcion', 'url_facebok',
    'url_x', 'url_instagram', 'url_youtube'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function insertar($data)
    {
        $configuracionModel= $this->db->table('configuracion');
        $configuracionModel->insert($data);
        return $this->db->InsertID();

    }

    public function modificar($id, $data)
    {
        $configuracionModel= $this->db->table('configuracion');
        $configuracionModel->set($data);
        $configuracionModel->where('idconfiguracion',$id);
        return $configuracionModel->update();

    }

    public function borrar($id)
    {
        $configuracionModel= $this->db->table('configuracion');
        $configuracionModel->where('idconfiguracion',$id);
        return $configuracionModel->delete();
    }

}
