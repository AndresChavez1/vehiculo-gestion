<?php

namespace App\Models;

use CodeIgniter\Model;
use stdClass;

class GestionDependenciaGeneralModel extends Model {

    protected $table = 'dependencia_general';
    protected $primaryKey = 'id_dependencia_general';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'dependencia',
        'parroquia',
        'distrito',
        'circuito',
        'subcircuito'
    ];

    public function getParroquia(){
        $builder = $this->db
        ->table('parroquia')
        ->select('*');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function getDistrito(){
        $builder = $this->db
        ->table('distrito')
        ->select('*');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function getCircuito(){
        $builder = $this->db
        ->table('circuito')
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

    public function getDependencia(){
        $builder = $this->db
        ->table('dependencia')
        ->select('*')
        ->join('distrito', 'distrito.dependencia = dependencia.id_dependencia', 'left')
        ->join('parroquia', 'parroquia.distrito = distrito.id_distrito', 'left')
        ->join('circuito', 'circuito.distrito = distrito.id_distrito', 'left')
        ->join('subcircuito', 'subcircuito.circuito = circuito.id_circuito', 'left');
        $query = $builder->get();
        $result = $query->getResult();
        $parroquia = $this->getParroquia();
        $distrito = $this->getDistrito();
        $circuito = $this->getCircuito();
        $subcircuito = $this->getSubcircuito();
        $data['dependencia'] = $result;
        $data['parroquia'] = $parroquia;
        $data['distrito'] = $distrito;
        $data['circuito'] = $circuito;
        $data['subcircuito'] = $subcircuito;

       /* $builder = $this->db
        ->table('dependencia_general')
        ->select('*')
        ->from('dependencia', 'parroquia', 'distrito', 'circuito', 'subcircuito')
        ->where('subcircuito.circuito = circuito.id_circuito')
        ->where('circuito.distrito = distrito.id_distrito')
        ->where('parroquia.distrito = distrito.id_distrito')
        ->where('distito.dependencia = dependencia.id_dependencia');
        $query = $builder->get();
        $result = $query->getResult();
        $data = $result;*/

        return view('vehiculo-gestion/dependencia', $data);
    }
}