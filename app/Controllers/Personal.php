<?php 

namespace App\Controllers;

use App\Models\PersonalModel;

class Personal extends BaseController{

    public function index(){
        $model = new PersonalModel();
        return $model->getPersonal();
    }

    public function store(){
        $model = new PersonalModel();
        $data = [
            'cedula' =>$this->request->getPost('cedula'),
            'nombres' =>$this->request->getPost('nombres'),
            'apellidos' =>$this->request->getPost('apellidos'),
            'fecha_nacimiento' =>$this->request->getPost('fecha_nacimiento'),
            'tipo_sangre' =>$this->request->getPost('tipo_sangre'),
            'ciudad_nacimiento' =>$this->request->getPost('ciudad_nacimiento'),
            'telefono' =>$this->request->getPost('telefono'),
            'rango' =>$this->request->getPost('rango'),
            'dependencia' =>$this->request->getPost('dependencia'),
            'vehiculo' =>$this->request->getPost('vehiculo'),
            'rol' =>$this->request->getPost('rol')
        ];
        $model->insert($data);
        return $this->response->redirect(base_url('/personal'));
    }

    public function show($id = null){
        $model = new PersonalModel();
        $data['personal_obj'] = $model->where('id_personal', $id)->first();
        $data['rango_obj'] = $model->getRango();
        $data['tipo_sangre_obj'] = $model->getTipoSangre();
        $data['vehiculo_obj'] = $model->getVehiculo();
        $data['rol_obj'] = $model->getRol();
        $data['subcircuito_obj'] = $model->getSubcircuito();
        return view('vehiculo-gestion/personal-edit', $data);
    }

    public function update(){
        $model = new PersonalModel();
        $id = $this->request->getPost('id_personal');
        $data = [
            'cedula' =>$this->request->getPost('cedula'),
            'nombres' =>$this->request->getPost('nombres'),
            'apellidos' =>$this->request->getPost('apellidos'),
            'fecha_nacimiento' =>$this->request->getPost('fecha_nacimiento'),
            'tipo_sangre' =>$this->request->getPost('tipo_sangre'),
            'ciudad_nacimiento' =>$this->request->getPost('ciudad_nacimiento'),
            'telefono' =>$this->request->getPost('telefono'),
            'rango' =>$this->request->getPost('rango'),
            'dependencia' =>$this->request->getPost('dependencia'),
            'vehiculo' =>$this->request->getPost('vehiculo'),
            'rol' =>$this->request->getPost('rol')
        ];
        $model->update($id, $data);
        return $this->response->redirect(base_url('/personal'));
    }

    public function delete($id = null){
        $model = new PersonalModel();
        $model->where('id_personal', $id)->delete($id);
        return $this->response->redirect(base_url('/personal'));
    }
}