<?php

namespace App\Models;

use CodeIgniter\Model;

class ProvinciaModel extends Model {

    protected $table = 'provincia';
    protected $primaryKey = 'id_provincia';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'numero_distritos',
        'nombre_provincia'
    ];

    public function getSubcircuito(){
        $builder = $this->db->table('subcircuito')
        ->join('circuito', 'subcircuito.circuito = circuito.id_circuito');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function getCircuito(){
        $builder = $this->db->table('circuito')
        ->join('parroquia', 'circuito.parroquia = parroquia.id_parroquia')
        ->join('distrito', 'circuito.distrito = distrito.id_distrito');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }
    public function getParroquia(){
        $builder = $this->db->table('parroquia')
        ->select('*')
        ->join('distrito', 'parroquia.distrito = distrito.id_distrito');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function getDistrito(){
        $builder = $this->db->table('distrito')
        ->join('provincia', 'distrito.provincia = provincia.id_provincia');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function getProvincia(){
        $builder = $this->db->table('provincia');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }
    public function getData(){
        $builder = $this->db->table('provincia')
        ->join('distrito', 'provincia.id_provincia = distrito.provincia')
        ->join('parroquia', 'distrito.id_distrito = parroquia.distrito')
        ->join('circuito', 'distrito.id_distrito = circuito.distrito')
        ->join('subcircuito', 'circuito.id_circuito = subcircuito.circuito');
        $query = $builder->get();
        $result = $query->getResult();
        $subcircuito = $this->getSubcircuito();
        $circuito = $this->getCircuito();
        $parroquia = $this->getParroquia();
        $distrito = $this->getDistrito();
        $provincia = $this->getProvincia();
        $data['subcircuito'] = $subcircuito;
        $data['circuito'] = $circuito;
        $data['parroquia'] = $parroquia;
        $data['distrito'] = $distrito;
        $data['provincia'] = $provincia;
        $data['dependencia'] = $result;
        return view('vehiculo-gestion/dependencia', $data);
    }


    // protected $table = 'dependencia_general';
    // protected $primaryKey = 'id_dependencia_general';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = false;

    // protected $allowedFields = [
    //     'dependencia',
    //     'parroquia',
    //     'distrito',
    //     'circuito',
    //     'subcircuito'
    // ];

    // public function getParroquia(){
    //     $builder = $this->db
    //     ->table('parroquia')
    //     ->select('*');
    //     $query = $builder->get();
    //     $result = $query->getResult();
    //     return $result;
    // }

    // public function getDistrito(){
    //     $builder = $this->db
    //     ->table('distrito')
    //     ->select('*');
    //     $query = $builder->get();
    //     $result = $query->getResult();
    //     return $result;
    // }

    // public function getCircuito(){
    //     $builder = $this->db
    //     ->table('circuito')
    //     ->select('*');
    //     $query = $builder->get();
    //     $result = $query->getResult();
    //     return $result;
    // }

    // public function getSubcircuito(){
    //     $builder = $this->db
    //     ->table('subcircuito')
    //     ->select('*');
    //     $query = $builder->get();
    //     $result = $query->getResult();
    //     return $result;
    // }

    // public function getDependencia(){
    //     $builder = $this->db
    //     ->table('dependencia')
    //     ->select('*')
    //     ->join('distrito', 'distrito.dependencia = dependencia.id_dependencia', 'left')
    //     ->join('parroquia', 'parroquia.distrito = distrito.id_distrito', 'left')
    //     ->join('circuito', 'circuito.distrito = distrito.id_distrito', 'left')
    //     ->join('subcircuito', 'subcircuito.circuito = circuito.id_circuito', 'left');
    //     $query = $builder->get();
    //     $result = $query->getResult();
    //     $parroquia = $this->getParroquia();
    //     $distrito = $this->getDistrito();
    //     $circuito = $this->getCircuito();
    //     $subcircuito = $this->getSubcircuito();
    //     $data['dependencia'] = $result;
    //     $data['parroquia'] = $parroquia;
    //     $data['distrito'] = $distrito;
    //     $data['circuito'] = $circuito;
    //     $data['subcircuito'] = $subcircuito;

    //    /* $builder = $this->db
    //     ->table('dependencia_general')
    //     ->select('*')
    //     ->from('dependencia', 'parroquia', 'distrito', 'circuito', 'subcircuito')
    //     ->where('subcircuito.circuito = circuito.id_circuito')
    //     ->where('circuito.distrito = distrito.id_distrito')
    //     ->where('parroquia.distrito = distrito.id_distrito')
    //     ->where('distito.dependencia = dependencia.id_dependencia');
    //     $query = $builder->get();
    //     $result = $query->getResult();
    //     $data = $result;*/

    //     return view('vehiculo-gestion/dependencia', $data);
    // }
}