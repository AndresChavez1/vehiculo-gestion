<?php

namespace App\Models;

use CodeIgniter\Model;

class CircuitoModel extends Model {

    protected $table = 'circuito';
    protected $primaryKey = 'id_circuito';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'nombre_circuito',
        'codigo_circuito',
        'numero_subcircuitos',
        'distrito',
        'parroquia'
    ];
}