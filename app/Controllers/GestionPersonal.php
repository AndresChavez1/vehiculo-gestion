<?php

namespace App\Controllers;
use App\Models\PersonalModel;

class GestionPersonal extends BaseController{


    public function index()
    {
        $personalModel = new PersonalModel();
        $data['personal'] = $personalModel->orderBy('id_personal', 'DESC')->findAll();
        return view('vehiculo-gestion/gestion-personal', $data);
    }
    
    public function show($id = null)
    {
        $personalModel = new PersonalModel();
        $data['personal_obj'] = $personalModel->where('id_personal', $id)->first();
        return view('vehiculo-gestion/editar-personal', $data);
    }

    public function store()
    {
        $personalModel = new PersonalModel();
        $data =[
            'nombres'=> $this->request->getVar('nombres'),
            'apellidos' => $this->request->getVar('apellidos'),
            'cedula' => $this->request->getVar('cedula'),
            'fecha_nacimiento' => $this->request->getVar('fecha_nacimiento'),
            'ciudad_nacimiento' => $this->request->getVar('ciudad_nacimiento'),
            'grupo_sanguineo' => $this->request->getVar('grupo_sanguineo'),
            'telefono' => $this->request->getVar('telefono'),
            'id_rango_personal' => $this->request->getVar('id_rango_personal'),
            'id_dependencia_personal' => $this->request->getVar('id_dependencia_personal')
        ];
        $personalModel->insert($data);
        return $this->response->redirect(base_url('/gestion-personal'));
    }

    public function update()
    {
        $personalModel = new PersonalModel();
        $id = $this->request->getVar('id_personal');
        $data = [
            'nombres'=> $this->request->getVar('nombres'),
            'apellidos' => $this->request->getVar('apellidos'),
            'cedula' => $this->request->getVar('cedula'),
            'fecha_nacimiento' => $this->request->getVar('fecha_nacimiento'),
            'ciudad_nacimiento' => $this->request->getVar('ciudad_nacimiento'),
            'grupo_sanguineo' => $this->request->getVar('grupo_sanguineo'),
            'telefono' => $this->request->getVar('telefono'),
            'id_rango_personal' => $this->request->getVar('id_rango_personal'),
            'id_dependencia_personal' => $this->request->getVar('id_dependencia_personal')
        ];

        $personalModel->update($id, $data);
        return $this->response->redirect(base_url('/gestion-personal'));
    }

    public function delete($id = null)
    {
        $personalModel = new PersonalModel();
        $data['personal'] = $personalModel->where('id_personal', $id)->delete($id);
        return $this->response->redirect(base_url('/gestion-personal'));
    }
}