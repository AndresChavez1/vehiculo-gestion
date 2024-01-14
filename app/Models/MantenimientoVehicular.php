<?php

namespace App\Models;

use CodeIgniter\Model;

class MantenimientoVehicular extends Model{

    protected $table = 'mantenimiento';
    protected $primaryKey = 'id_mantenimiento';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'asunto',
        'fecha_ingreso',
        'detalle',
        'vehiculo',
        'personal',
        'tipo_mantenimiento'
    ];

    public function getVehiculo(){
        $builder = $this->db
        ->table('vehiculo');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function getPersonal()
    {
        $builder = $this->db
        ->table('personal');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function getTipoMantenimiento(){
        $builder = $this->db
        ->table('tipo_mantenimiento');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function getTipoVehiculo(){
        $builder = $this->db
        ->table('tipo_vehiculo');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }
    public function getMantenimiento(){
        $builder = $this->db
        ->table('mantenimiento')
        ->select('*')
        ->join('vehiculo', 'mantenimiento.vehiculo = vehiculo.id_vehiculo', 'inner')
        ->join('personal', 'mantenimiento.personal = personal.id_personal', 'inner')
        ->join('tipo_vehiculo', 'vehiculo.tipo = tipo_vehiculo.id_tipo_vehiculo', 'inner');
        $query = $builder->get();
        $result = $query->getResult();
        $vehiculo = $this->getVehiculo();
        $personal = $this->getPersonal();
        $tipo_vehiculo = $this->getTipoVehiculo();
        $tipo_mantenimiento = $this->getTipoMantenimiento();
        $data['mantenimiento'] = $result;
        $data['vehiculo'] = $vehiculo;
        $data['personal'] = $personal;
        $data['tipo_vehiculo'] = $tipo_vehiculo;
        $data['tipo_mantenimiento'] = $tipo_mantenimiento;
        return view('vehiculo-gestion/mantenimiento', $data);
    }

}