<?php

namespace App\Models;

use CodeIgniter\Model;

class DistritoModel extends Model {

    protected $table = 'distrito';
    protected $primaryKey = 'id_distrito';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'nombre_distrito',
        'codigo_distrito',
        'numero_circuitos',
        'provincia'
    ];
}