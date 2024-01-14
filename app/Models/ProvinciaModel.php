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
        'dependencia',
        'numero_distritos',
        'parroquia'
    ];
}