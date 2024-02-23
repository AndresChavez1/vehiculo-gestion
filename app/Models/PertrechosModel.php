<?php 

namespace App\Models;

use CodeIgniter\Model;

class PertrechosModel extends Model{
    protected $table = 'pertrecho';
    protected $primaryKey = 'id_pertrecho';

    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'tipo_arma', 
        'nombre',
        'descripcion',
        'codigo',
        'personal',
        'fecha_registro',
        'hora_registro',
    ];

    public function getPersonal(){
        $builder = $this->db->table('personal');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function getPertrecho(){
        $builder = $this->db
        ->table('pertrecho')
        ->select('*')
        ->join('personal', 'personal.id_personal = pertrecho.personal')
        ->join('subcircuito', 'subcircuito.id_subcircuito = personal.subcircuito')
        ->join('rango', 'rango.id_rango = personal.rango');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }


}