<?php

namespace App\Controllers;

use App\Models\PersonalModel;

class Registro extends BaseController {
    
    public function index()
    {
        $data = [];
        return view('vehiculo-gestion/registro', $data);
    }

    public function store()
    {
        $rules = [
            'nombres' => 'required',
            'correo' => 'required',
            'password' => 'required',
            'confirmpassword' => 'matches[password]'
        ];

        if($this->validate($rules)){
            $personalModel = new PersonalModel();
            $data = [
                'nombres' => $this->request->getVar('nombres'),
                'correo' => $this->request->getVar('nombres'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];

            $personalModel ->save($data);
            return redirect()->to('');
        }else{
        }
        $data['validation'] = $this->validator;
        return view('registro', $data);
    }
}