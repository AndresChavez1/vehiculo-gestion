<?php 

namespace App\Models;

use CodeIgniter\Model;

class PersonalModel extends Model{
    protected $table = 'personal';
    protected $primaryKey = 'id_personal';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'nombres', 
        'apellidos',
        'cedula',
        'fecha_nacimiento',
        'ciudad_nacimiento',
        'tipo_sangre',
        'telefono',
        'rango',
        'subcircuito',
        'vehiculo',
        'rol'
    ];

    public function getRango()
    {
        $builder = $this->db->table('rango')
        ->select('*');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function getTipoSangre(){
        $builder = $this->db->table('tipo_sangre')
        ->select('*');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function getSubcircuito(){
        $builder = $this->db
        ->table('subcircuito')
        ->select('*');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }
    public function getVehiculo(){
        $builder = $this->db
        ->table('vehiculo')
        ->select('*');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }
    public function getRol(){
        $builder = $this->db
        ->table('rol')
        ->select('*');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function getPersonal()
    {
        $builder = $this->db
        ->table('personal')
        ->join('rango', 'personal.rango  = rango.id_rango', 'left')
        ->join('rol', 'personal.rol  = rol.id_rol', 'left')
        ->join('subcircuito', 'personal.subcircuito  = subcircuito.id_subcircuito', 'left')
        ->join('tipo_sangre', 'personal.tipo_sangre  = tipo_sangre.id_tipo_sangre', 'left')
        ->join('vehiculo', 'personal.vehiculo  = vehiculo.id_vehiculo', 'left')
        ->orderBy('id_personal', 'asc');
        $query = $builder->get();
        $result = $query->getResult();
        $rango = $this->getRango();
        $subcircuito = $this->getSubcircuito();
        $tipo_sangre = $this->getTipoSangre();
        $rol = $this->getRol();
        $vehiculo = $this->getVehiculo();
        $data['personal'] = $result;
        $data['rango'] = $rango;
        $data['subcircuito'] = $subcircuito;
        $data['rol'] = $rol;
        $data['tipo_sangre'] = $tipo_sangre;
        $data['vehiculo'] = $vehiculo;
        return view('vehiculo-gestion/personal', $data);
    }

}