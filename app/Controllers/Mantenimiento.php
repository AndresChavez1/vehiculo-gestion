<?php 

namespace App\Controllers;

use App\Models\MantenimientoVehicular;

class Mantenimiento extends BaseController{

    public function index(){
        
        $model = new MantenimientoVehicular();
        return $model->getMantenimiento();
    }

    public function store(){
        $model = new MantenimientoVehicular();

        $data = [
            'asunto' => $this->request->getPost('asunto'),
            'fecha_ingreso' => $this->request->getPost('fecha_ingreso'),
            'detalle' => $this->request->getPost('detalle'),
            'vehiculo' => $this->request->getPost('vehiculo'),
            'personal' => $this->request->getPost('personal'),
            'tipo_mantenimiento' => $this->request->getPost('tipo_mantenimiento'),
        ];

        $model->insert($data);
        return $this->response->redirect(base_url('/mantenimiento')); 
    }

    public function delete($id = null){
        $model = new MantenimientoVehicular();
        $model->where('id_mantenimiento', $id)->delete($id);
        return $this->response->redirect(base_url('/mantenimiento'));
    }   
}