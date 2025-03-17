<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table            = 'usuarios';
    protected $primaryKey       = 'idusuario';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nombreusuario', 'apellidousuario', 'email', 'password', 'ultimaconexion','idrol'];

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
        return $usuarioModel->get()->getResultArray();
    }

    public function insertar($data)
    {
        $usuarioModel= $this->db->table('usuarios');
        $usuarioModel->insert($data);
        return $this->db->InsertID();

    }

    public function modificar($id, $data)
    {
        $usuarioModel= $this->db->table('usuarios');
        $usuarioModel->set($data);
        $usuarioModel->where('idusuario',$id);
        return $usuarioModel->update();

    }
    public function borrar($id)
    {
        $usuarioModel= $this->db->table('usuarios');
        $usuarioModel->where('idusuario',$id);
        return $usuarioModel->delete();
    }
    public function getUsuariosConRol() {
        $usuarioModel = $this->db->table('usuarios')
            ->join('roles', 'usuarios.idrol = roles.idrol')
            ->select('usuarios.*, roles.nombrerol AS nombrerol')
            ->get(); // Ejecuta la consulta
    
        return $usuarioModel->getResult(); // Devuelve todos los registros como un array de objetos
    }
    
    public function getIdUsuariosConRol($id) {
        $usuarioModel = $this->db->table('usuarios')
            ->join('roles', 'usuarios.idrol = roles.idrol')
            ->where('idusuario', $id)
            ->select('usuarios.*, roles.nombrerol AS nombrerol')
            ->get(); 
        return $usuarioModel->getRow(); 
    }
    
}
