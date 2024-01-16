<?php 

namespace App\Controllers;


use App\Models\ProvinciaModel;
use App\Models\ParroquiaModel;
use App\Models\DistritoModel;
use App\Models\CircuitoModel;
use App\Models\SubcircuitoModel;

class Dependencia extends BaseController{


    public function index(){
        $model = new ProvinciaModel();
        // echo '<pre>';
        // print_r($model->getProvincia());
        // echo  '</pre>';
        return $model->getData();
    }

    //CRUD DE PROVINCIA
    public function createProvincia(){
        return view('vehiculo-gestion/add-provincia');
    }

    public function storeProvincia(){
        $model = new ProvinciaModel();
        $data = [
            'nombre_provincia' => $this->request->getPost('nombre_provincia')
        ];
        $model->insert($data);
        return $this->response->redirect(base_url('/dependencia'));
    }

    public function showProvincia($id = null){
        $model = new ProvinciaModel();
        $data['provincia_obj'] = $model->where('id_provincia', $id)->first();
        return view('vehiculo-gestion/provincia-edit', $data);
    }

    public function updateProvincia(){
        $model = new ProvinciaModel();
        $id = $this->request->getPost('id_provincia');
        $data = [
            'nombre_provincia' => $this->request->getPost('nombre_provincia')
        ];
        $model->update($id, $data);
        return $this->response->redirect(base_url('/dependencia'));
    }

    public function deleteProvincia($id = null)
    {
        $model = new ProvinciaModel();
        $model->where('id_provincia', $id)->delete($id);
        return $this->response->redirect(base_url('/dependencia'));
    }
    
    // CRUD DE PARROQUIA

    public function storeParroquia(){
        $model = new ParroquiaModel();
        $data = [
            'nombre_parroquia' => $this->request->getPost('nombre_parroquia'),
            'distrito' => $this->request->getPost('distrito')
        ];
        $model->insert($data);
        return $this->response->redirect(base_url('/dependencia'));
    }

    public function createParroquia(){
        $model2 = new ProvinciaModel();
        $data['distrito_obj'] = $model2->getDistrito();
        return view('vehiculo-gestion/add-parroquia', $data);
    }

    public function showParroquia($id = null){
        $model = new ParroquiaModel();
        $model2 = new ProvinciaModel();
        $data['parroquia_obj'] = $model
        ->join('distrito', 'parroquia.distrito = distrito.id_distrito')
        ->where('id_parroquia', $id)->first();
        $data['distrito_obj'] = $model2->getDistrito();
        return view('vehiculo-gestion/parroquia-edit', $data);
    }

    public function updateParroquia(){
        $model = new ParroquiaModel();
        $id = $this->request->getPost('id_parroquia');
        $data = [
            'nombre_parroquia' => $this->request->getPost('nombre_parroquia'),
            'distrito' => $this->request->getPost('distrito'),
        ];
        $model->update($id, $data);
        return $this->response->redirect(base_url('/dependencia'));
    }

    public function deleteParroquia($id = null)
    {
        $model = new ParroquiaModel();
        $model->where('id_parroquia', $id)->delete($id);
        return $this->response->redirect(base_url('/dependencia'));
    }

    //CRUD DISTRITO

    public function storeDistrito(){
        $model = new DistritoModel();
        $data = [
            'nombre_distrito' => $this->request->getPost('nombre_distrito'),
            'codigo_distrito' => $this->request->getPost('codigo_distrito'),
            'provincia' => $this->request->getPost('provincia'),
        ];
        $model->insert($data);
        return $this->response->redirect(base_url('/dependencia'));
    }

    public function createDistrito(){
        $model2 = new ProvinciaModel();
        $data['provincia_obj'] = $model2->getProvincia();
        return view('vehiculo-gestion/add-distrito', $data);
    }

    public function showDistrito($id = null){
        $model = new DistritoModel();
        $model2 = new ProvinciaModel();
        $data['distrito_obj'] = $model
        ->join('provincia', 'distrito.provincia = provincia.id_provincia')
        ->where('id_distrito', $id)->first();
        $data['provincia_obj'] = $model2->getProvincia();
        return view('vehiculo-gestion/distrito-edit', $data);
    }

    public function updateDistrito(){
        $model = new DistritoModel();
        $id = $this->request->getPost('id_distrito');
        $data = [
            'nombre_distrito' => $this->request->getPost('nombre_distrito'),
            'codigo_distrito' => $this->request->getPost('codigo_distrito'),
            'provincia' => $this->request->getPost('provincia'),
        ];
        $model->update($id, $data);
        return $this->response->redirect(base_url('/dependencia'));
    }

    public function deleteDistrito($id = null)
    {
        $model = new DistritoModel();
        $model->where('id_distrito', $id)->delete($id);
        return $this->response->redirect(base_url('/dependencia'));
    }

    //CRUD CIRCUITO
    public function storeCircuito(){
        $model = new CircuitoModel();
        $data = [
            'nombre_circuito' => $this->request->getPost('nombre_circuito'),
            'codigo_circuito' => $this->request->getPost('codigo_circuito'),
            'distrito' => $this->request->getPost('distrito'),
            'parroquia' => $this->request->getPost('parroquia'),
        ];
        $model->insert($data);
        return $this->response->redirect(base_url('/dependencia'));
    }

    public function createCircuito(){
        $model2 = new ProvinciaModel();
        $data['distrito_obj'] = $model2->getDistrito();
        $data['parroquia_obj'] = $model2->getParroquia();
        return view('vehiculo-gestion/add-circuito', $data);
    }

    public function showCircuito($id = null){
        $model = new CircuitoModel();
        $model2 = new ProvinciaModel();
        $data['circuito_obj'] = $model
        ->join('distrito', 'circuito.distrito = distrito.id_distrito')
        ->join('parroquia', 'circuito.parroquia = parroquia.id_parroquia')
        ->where('id_circuito', $id)->first();
        $data['distrito_obj'] = $model2->getDistrito();
        $data['parroquia_obj'] = $model2->getParroquia();
        return view('vehiculo-gestion/circuito-edit', $data);
    }

    public function updateCircuito(){
        $model = new CircuitoModel();
        $id = $this->request->getPost('id_circuito');
        $data = [
            'nombre_circuito' => $this->request->getPost('nombre_circuito'),
            'codigo_circuito' => $this->request->getPost('codigo_circuito'),
            'distrito' => $this->request->getPost('distrito'),
            'parroquia' => $this->request->getPost('parroquia'),
        ];
        $model->update($id, $data);
        return $this->response->redirect(base_url('/dependencia'));
    }

    public function deleteCircuito($id = null)
    {
        $model = new CircuitoModel();
        $model->where('id_circuito', $id)->delete($id);
        return $this->response->redirect(base_url('/dependencia'));
    }

    //CRUD SUBCIRCUITO

    public function storeSubcircuito(){
        $model = new SubcircuitoModel();
        $data = [
            'nombre_subcircuito' => $this->request->getPost('nombre_subcircuito'),
            'codigo_subcircuito' => $this->request->getPost('codigo_subcircuito'),
            'circuito' => $this->request->getPost('circuito'),
        ];
        $model->insert($data);
        return $this->response->redirect(base_url('/dependencia'));
    }

    public function createSubcircuito(){
        $model2 = new ProvinciaModel();
        $data['circuito_obj'] = $model2->getCircuito();
        return view('vehiculo-gestion/add-subcircuito', $data);
    }

    public function showSubcircuito($id = null){
        $model = new SubcircuitoModel();
        $model2 = new ProvinciaModel();
        $data['subcircuito_obj'] = $model
        ->join('circuito', 'subcircuito.circuito = circuito.id_circuito')
        ->where('id_subcircuito', $id)->first();
        $data['circuito_obj'] = $model2->getCircuito();
        return view('vehiculo-gestion/subcircuito-edit', $data);
    }

    public function updateSubcircuito(){
        $model = new SubcircuitoModel();
        $id = $this->request->getPost('id_subcircuito');
        $data = [
            'nombre_subcircuito' => $this->request->getPost('nombre_subcircuito'),
            'codigo_subcircuito' => $this->request->getPost('codigo_subcircuito'),
            'circuito' => $this->request->getPost('circuito'),
        ];
        $model->update($id, $data);
        return $this->response->redirect(base_url('/dependencia'));
    }

    public function deleteSubcircuito($id = null)
    {
        $model = new SubcircuitoModel();
        $model->where('id_subcircuito', $id)->delete($id);
        return $this->response->redirect(base_url('/dependencia'));
    }
}