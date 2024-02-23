<?php 
namespace App\Controllers;
use App\Models\PertrechosModel;
use App\Models\PersonalModel;
use App\Models\ProvinciaModel;

class Pertrechos extends BaseController{


    public function index(){
        $model = new PertrechosModel();
        $model2 = new ProvinciaModel();

        $data['pertrechos'] = $model->getPertrecho();
        $data['personal'] = $model->getPersonal();
        $data['provincia'] = $model2->getProvincia();
        return view('vehiculo-gestion/pertrechos', $data);
    }

    public function store(){
        $model = new PertrechosModel();
        $data = [
            'tipo_arma' =>$this->request->getPost('tipo_arma'),
            'nombre' =>$this->request->getPost('nombre'),
            'descripcion' =>$this->request->getPost('descripcion'),
            'codigo' =>$this->request->getPost('codigo'),
            'personal' =>$this->request->getPost('personal'),
        ];
        $model->insert($data);
        return $this->response->redirect(base_url('/pertrecho'));
    }

    public function show($id = null){
        $model = new PertrechosModel();
        $data['pertrechos_obj'] = $model->where('id_pertrecho', $id)->first();
        $data['personal_obj'] = $model->getPersonal();
        return view('vehiculo-gestion/editar-pertrecho', $data);
    }

    public function update(){
        $model = new PertrechosModel();
        $ids = $this->request->getPost('id_pertrecho');
        $tipo_arma = $this->request->getPost('tipo_arma');
        $descripcion = $this->request->getPost('descripcion');
        $codigo = $this->request->getPost('codigo');
    
        if(is_array($ids)) {
            foreach ($ids as $id) {
                $data = [
                    'tipo_arma' => $tipo_arma[$id],
                    'descripcion' => $descripcion[$id],
                    'codigo' => $codigo[$id]
                ];
                $model->update($id, $data);
            }
        }
        return $this->response->redirect(base_url('/pertrecho'));
    }

    public function delete($id = null){
        $model = new PertrechosModel();
        $model->where('id_pertrecho', $id)->delete($id);
        return $this->response->redirect(base_url('/pertrecho'));
    }
}