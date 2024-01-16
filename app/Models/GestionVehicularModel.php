<?php 

namespace App\Models;

use CodeIgniter\Model;

class GestionVehicularModel extends Model{

    protected $table = 'vehiculo';
    protected $primaryKey = 'id_vehiculo';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'tipo', 
        'placa',
        'chasis',
        'marca',
        'modelo',
        'motor',
        'kilometraje',
        'cilindraje',
        'carga',
        'pasajeros',
        'subcircuito'
    ];

    public function getTipo(){
        $builder = $this->db
        ->table('tipo_vehiculo')
        ->select('*');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function getSubcircuito(){
        $builder = $this->db
        ->table('subcircuito');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function getVehiculo(){
        $builder = $this->db
        ->table('vehiculo')
        ->select('*')
        ->join('tipo_vehiculo', 'vehiculo.tipo = tipo_vehiculo.id_tipo_vehiculo')
        ->join('subcircuito', 'vehiculo.subcircuito = subcircuito.id_subcircuito');
        $query = $builder->get();
        $result = $query->getResult();
        $tipo_vehiculo = $this->getTipo();
        $subcircuito = $this->getSubcircuito();
        $data['tipo_vehiculo'] = $tipo_vehiculo;
        $data['vehiculo'] = $result;
        $data['subcircuito'] = $subcircuito;
        return view('vehiculo-gestion/vehiculo', $data);
    }

}