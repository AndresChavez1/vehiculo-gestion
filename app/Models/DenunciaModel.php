<?php 

namespace App\Models;

use CodeIgniter\Model;

class DenunciaModel extends Model{
    protected $table = 'denuncias';
    protected $primaryKey = 'id_denuncia';
    protected $allowedFields = [
        'fecha_inicio',
        'fecha_fin',
        'tipo_denuncia',
        'subcircuito',
        'detalle',
        'contacto',
        'nombres',
        'apellidos',
    ];

    public function getTipoDenuncia(){
        $builder = $this->db->table('tipo_denuncia');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function getSubcircuito(){
        $builder = $this->db->table('subcircuito')
        ->join('circuito', 'subcircuito.circuito = circuito.id_circuito');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function getDenuncia(){
        $builder = $this->db->table('denuncias')
        ->join('tipo_denuncia', 'denuncias.tipo_denuncia = tipo_denuncia.id_tipo_denuncia')
        ->join('subcircuito', 'denuncias.subcircuito = subcircuito.id_subcircuito')
        ->join('circuito', 'subcircuito.circuito = circuito.id_circuito');
        $query = $builder->get();
        $result = $query->getResult();
        $tipo_denuncia = $this->getTipoDenuncia();
        $subcircuito = $this->getSubcircuito();
        $data['denuncia'] = $result;
        $data['tipo_denuncia'] = $tipo_denuncia;
        $data['subcircuito'] = $subcircuito;
        return view('vehiculo-gestion/denuncia', $data);
    }
}