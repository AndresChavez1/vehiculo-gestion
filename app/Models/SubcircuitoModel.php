<?php

namespace App\Models;

use CodeIgniter\Model;

class SubcircuitoModel extends Model {

    protected $table = 'subcircuito';
    protected $primaryKey = 'id_subcircuito';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'nombre_subcircuito',
        'codigo_subcircuito',
        'circuito'
    ];
}