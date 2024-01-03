<?php 

namespace App\Controllers;

use App\Models\VehiculoModel;

class GestionVehicular extends BaseController {


    public function index()
    {
        $vehiculoModel = new VehiculoModel();
        $data['vehiculo'] = $vehiculoModel->orderBy('id_vehiculo', 'DESC')->findAll();
        return view('vehiculo-gestion/gestion-vehicular', $data);
    }
    
    public function show($id = null)
    {
        $vehiculoModel = new VehiculoModel();
        $data['vehiculo_obj'] = $vehiculoModel->where('id_vehiculo', $id)->first();
        return view('vehiculo-gestion/editar-vehiculo', $data);
    }

    public function store()
    {
        $vehiculoModel = new VehiculoModel();
        $data =[
            'tipo' => $this->request->getVar('tipo'),
            'placa' => $this->request->getVar('placa'),
            'chasis' => $this->request->getVar('chasis'),
            'marca' => $this->request->getVar('marca'),
            'modelo' => $this->request->getVar('modelo'),
            'motor' => $this->request->getVar('motor'),
            'kilometraje' => $this->request->getVar('kilometraje'),
            'cilindraje' => $this->request->getVar('cilindraje'),
            'carga' => $this->request->getVar('carga'),
            'pasajeros' => $this->request->getVar('pasajeros')
        ];
        $vehiculoModel->insert($data);
        return $this->response->redirect(base_url('/gestion-vehicular'));
    }

    public function update()
    {
        $vehiculoModel = new VehiculoModel();
        $id = $this->request->getVar('id_vehiculo');
        $data = [
            'tipo' => $this->request->getVar('tipo'),
            'placa' => $this->request->getVar('placa'),
            'chasis' => $this->request->getVar('chasis'),
            'marca' => $this->request->getVar('marca'),
            'modelo' => $this->request->getVar('modelo'),
            'motor' => $this->request->getVar('motor'),
            'kilometraje' => $this->request->getVar('kilometraje'),
            'cilindraje' => $this->request->getVar('cilindraje'),
            'carga' => $this->request->getVar('carga'),
            'pasajeros' => $this->request->getVar('pasajeros')
        ];

        $vehiculoModel->update($id, $data);
        return $this->response->redirect(base_url('/gestion-vehicular'));
    }

    public function delete($id = null)
    {
        $vehiculoModel = new VehiculoModel();
        $data['vehiculo'] = $vehiculoModel->where('id_vehiculo', $id)->delete($id);
        return $this->response->redirect(base_url('/gestion-vehicular'));
    }
}