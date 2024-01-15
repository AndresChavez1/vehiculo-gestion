<?php 

namespace App\Validation;

use App\Models\RegistroCredencialesModel;
class UserRules{
    
    public function validar(string $str, string $fields, array $data)
    {
        $credencial = new RegistroCredencialesModel();
        $user = $credencial->where('correo', $data['correo'])->first();
        //Si no hay usuario
        if(! $user)
        return false;

        return password_verify($data['contraseña'], $user['contraseña']);
    }

}