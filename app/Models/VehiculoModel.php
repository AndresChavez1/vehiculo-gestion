<?php 
namespace App\Models;

use CodeIgniter\Model;

class VehiculoModel extends Model{
    protected $table = 'vehiculo';
    protected $primary_key = 'id_vehiculo';

    protected $allowedFields = [
        'tipo',
        'placa',
        'chasis',
        'marca',
        'modelo',
        'motor',
        'kilometraje',
        'cilindraje',
        'carga',
        'pasajeros'
    ];
}