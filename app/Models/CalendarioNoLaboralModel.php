<?php 
namespace App\Models;
use CodeIgniter\Model;

class CalendarioNoLaboralModel extends Model
{
    protected $table = 'calendario_no_laboral';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['anno', 'mes', 'dia', 'motivo'];

    protected $returnType = 'array';
    protected $useTimestamps = false; 
    protected $createdField = 'created_at'; 
    protected $updatedField = 'updated_at'; 
    protected $deletedField = 'deleted_at'; 
    protected $validationRules = [
        'anno' => 'required',
        'mes' => 'required',
        'dia' => 'required'
    ]; 
    protected $validationMessages = []; 
    protected $skipValidation = false; 

    public function getEntity($identity) { 
        return $this->where("identity=". $identity)->find(); 
    } 
}