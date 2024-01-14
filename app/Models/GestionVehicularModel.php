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
        'dependencia'
    ];

    public function getTipo(){
        $builder = $this->db
        ->table('tipo_vehiculo')
        ->select('*');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function getDependencia(){
        $builder = $this->db
        ->table('dependencia');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function getVehiculo(){
        $builder = $this->db
        ->table('vehiculo')
        ->select('*')
        ->join('tipo_vehiculo', 'vehiculo.tipo = tipo_vehiculo.id_tipo_vehiculo')
        ->join('dependencia', 'vehiculo.dependencia = dependencia.id_dependencia');
        $query = $builder->get();
        $result = $query->getResult();
        $tipo_vehiculo = $this->getTipo();
        $dependencia = $this->getDependencia();
        $data['tipo_vehiculo'] = $tipo_vehiculo;
        $data['vehiculo'] = $result;
        $data['dependencia'] = $dependencia;
        return view('vehiculo-gestion/vehiculo', $data);
    }

}