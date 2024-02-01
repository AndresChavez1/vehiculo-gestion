<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistroCredencialesModel extends Model {

    protected $table = 'credenciales';
    protected $primaryKey = 'id_credencial';
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];
    protected $allowedFields = [
        'correo',
        'contraseña',
        'fecha_creacion',
        'fecha_actualizacion',
        'personal'
    ];
    protected function beforeInsert(array $data){
        $data = $this->passwordHash($data);
        return $data;
    }

    protected function beforeUpdate(array $data){
        $data = $this->passwordHash($data);
        return $data;
    }

    protected function passwordHash(array $data){
        if(isset($data['data']['contraseña']))
            $data['data']['contraseña'] = password_hash($data['data']['contraseña'], PASSWORD_DEFAULT);
        return $data;
    }

}