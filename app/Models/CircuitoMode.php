<?php

namespace App\Models;

use CodeIgniter\Model;

class CircuitoModel extends Model {

    protected $table = 'circuidto';
    protected $primaryKey = 'id_circuidto';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'nombre_circuito',
        'codigo_circuito',
        'numero_subcircuitos',
        'distrito'
    ];
}