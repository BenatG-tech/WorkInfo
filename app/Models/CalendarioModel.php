<?php 
namespace App\Models;
use CodeIgniter\Model;

class CalendarioModel extends Model
{
    protected $table = 'calendario';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['anno', 'mes', 'dia', 'pos_dia'];

    protected $returnType = 'array';
    protected $useTimestamps = false; 
    protected $createdField = 'created_at'; 
    protected $updatedField = 'updated_at'; 
    protected $deletedField = 'deleted_at'; 
    protected $validationRules = [
        'anno' => 'required',
        'mes' => 'required',
        'dia' => 'required',
        'pos_dia' => 'required'
    ]; 
    protected $validationMessages = []; 
    protected $skipValidation = false; 

    public function getEntity($identity) { 
        return $this->where("id=". $identity)->find(); 
    } 
}