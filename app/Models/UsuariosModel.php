<?php 
namespace App\Models;
use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table = 'usuarios';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['usuario', 'email', 'contrasenna'];

    protected $returnType = 'array';
    protected $useTimestamps = false; 
    protected $createdField = 'created_at'; 
    protected $updatedField = 'updated_at'; 
    protected $deletedField = 'deleted_at'; 
    protected $validationRules = [
        'usuario' => 'required',
        'email' => 'required',
        'contrasenna' => 'required'
    ];  
    protected $validationMessages = []; 
    protected $skipValidation = false; 

    public function getEntity($identity) { 
        return $this->where("identity=". $identity)->find(); 
    } 
}