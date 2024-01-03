<?php 
namespace App\Models;

use CodeIgniter\Model;

class PersonalModel extends Model{
    protected $table = 'personal';
    protected $primaryKey = 'id_personal';

    protected $allowedFields = [
        'nombres',
        'apellidos',
        'cedula',
        'fecha_nacimiento',
        'grupo_sanguineo',
        'ciudad_nacimiento',
        'telefono',
        'id_rango_personal',
        'id_dependencia_personal'
    ];
}