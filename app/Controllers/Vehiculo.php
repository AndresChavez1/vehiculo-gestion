<?php

namespace App\Controllers;
use App\Models\GestionVehicularModel;

class Vehiculo extends BaseController{


    public function index(){

        $model = new GestionVehicularModel();
        return $model->getVehiculo();
    }

    public function store(){
        $model = new GestionVehicularModel();

        $data = [
            'placa' => $this->request->getPost('placa'),
            'tipo' => $this->request->getPost('tipo'),
            'chasis' => $this->request->getPost('chasis'),
            'marca' => $this->request->getPost('marca'),
            'modelo' => $this->request->getPost('modelo'),
            'motor' => $this->request->getPost('motor'),
            'kilometraje' => $this->request->getPost('kilometraje'),
            'cilindraje' => $this->request->getPost('cilindraje'),
            'carga' => $this->request->getPost('carga'),
            'pasajeros' => $this->request->getPost('pasajeros'),
            'dependencia' => $this->request->getPost('dependencia')
        ];
        $model->insert($data);
        return $this->response->redirect(base_url('/vehiculo'));
    }

    public function show($id = null){
        $model = new GestionVehicularModel();

        $data['vehiculo_obj'] = $model->where('id_vehiculo', $id)->first();
        $data['tipo_vehiculo_obj'] = $model->getTipo();
        $data['dependencia_obj'] = $model->getDependencia();

        return view('vehiculo-gestion/vehiculo-edit', $data);
    }

    public function update(){
        $model = new GestionVehicularModel();
        $id = $this->request->getPost('id_vehiculo');
        $data = [
            'placa' => $this->request->getPost('placa'),
            'tipo' => $this->request->getPost('tipo'),
            'chasis' => $this->request->getPost('chasis'),
            'marca' => $this->request->getPost('marca'),
            'modelo' => $this->request->getPost('modelo'),
            'motor' => $this->request->getPost('motor'),
            'kilometraje' => $this->request->getPost('kilometraje'),
            'cilindraje' => $this->request->getPost('cilindraje'),
            'carga' => $this->request->getPost('carga'),
            'pasajeros' => $this->request->getPost('pasajeros'),
            'dependencia' => $this->request->getPost('dependencia')
        ];
        $model->update($id, $data);
        return $this->response->redirect(base_url('/vehiculo'));
    }

    public function delete($id = null){
        $model = new GestionVehicularModel();
        $model->where('id_vehiculo', $id)->delete($id);

        return $this->response->redirect(base_url('/vehiculo'));
    }
}