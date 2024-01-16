<?php 

namespace App\Models;

use CodeIgniter\Model;

class ParroquiaModel extends Model{
    protected $table = 'parroquia';
    protected $primaryKey = 'id_parroquia';
    protected $allowedFields = [
        'nombre_parroquia',
        'distrito'
    ];
}