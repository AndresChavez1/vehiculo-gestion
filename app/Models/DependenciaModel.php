<?php

namespace App\Models;

use CodeIgniter\Model;

class DependenciaModel extends Model {

    protected $table = 'dependencia';
    protected $primaryKey = 'id_dependencia';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'nombre_dependencia',
        'numero_distritos'
    ];
}