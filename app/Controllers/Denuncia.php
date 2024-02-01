<?php 

namespace App\Controllers;

use App\Models\DenunciaModel;

class Denuncia extends BaseController{

    public function index(){
        $model = new DenunciaModel();
        // echo '<pre>';
        // print_r($model->getDenuncia());
        // echo  '</pre>';
        return $model->getDenuncia();
    }

    public function store(){
        $model = new DenunciaModel();
        $data = [
            'tipo_denuncia' =>$this->request->getPost('tipo_denuncia'),
            'subcircuito' =>$this->request->getPost('subcircuito'),
            'detalle' =>$this->request->getPost('detalle'),
            'contacto' =>$this->request->getPost('contacto'),
            'nombres' =>$this->request->getPost('nombres'),
            'apellidos' =>$this->request->getPost('apellidos'),
        ];
        $model->insert($data);
        return $this->response->redirect(base_url('/denuncias'));
    }

    public function show($id = null){
        $model = new DenunciaModel();
        $data['denuncia_obj'] = $model
        ->join('tipo_denuncia', 'denuncia.tipo_denuncia = tipo_denuncia.id_tipo_denuncia')
        ->where('id_denuncia', $id)->first();
        return view('vehiculo-gestion/denuncia-edit', $data); 
    }

    public function update(){
        $model = new DenunciaModel();
        $id = $this->request->getPost('id_denuncia');
        $data = [
            'fecha_fin' =>$this->request->getPost('fecha_fin'),
        ];
        $model->update($id, $data);
        return $this->response->redirect(base_url('/denuncias'));
    }

    // public function delete($id = null){
    //     $model = new DenunciaModel();
    //     $model->where('id_denuncia', $id)->delete($id);
    //     return $this->response->redirect(base_url('/denuncias'));
    // }
}