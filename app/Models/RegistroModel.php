<?php 

namespace App\Models;

use CodeIgniter\Model;

class RegistroModel extends Model {

    protected $table = 'personal';
    protected $primaryKey = 'id_personal';

    protected $allowedFields = [
        'nombres', 
        'apellidos',
        'cedula',
        'fecha_nacimiento',
        'ciudad_nacimiento',
        'tipo_sangre',
        'telefono',
        'rango',
        'dependencia',
        'vehiculo',
        'rol'
    ];

    public function getRango(){
        $builder = $this->db->table('rango');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function getTipoSangre(){
        $builder = $this->db->table('tipo_sangre');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function getRol(){
        $builder = $this->db->table('rol');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function insertId(){
        return $this->db->insertID();
    }

}