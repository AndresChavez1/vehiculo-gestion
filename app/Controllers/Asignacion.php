<?php 

namespace App\Controllers;

use App\Models\PersonalModel;
use App\Models\GestionVehicularModel;
use App\Models\SubcircuitoModel;

class Asignacion extends BaseController {


    public function index(){
        $model = new PersonalModel();
        $model2 = new GestionVehicularModel();
        $model3 = new SubcircuitoModel();

        $builder = $model->select('personal.id_personal, personal.nombres, personal.apellidos, 
        personal.subcircuito, subcircuito.nombre_subcircuito')
            ->join('subcircuito', 'subcircuito.id_subcircuito = personal.subcircuito');
            $query = $builder->get();
            $result = $query->getResult();
        $builder2 = $model2->select('vehiculo.id_vehiculo, vehiculo.placa, vehiculo.marca,
        vehiculo.subcircuito, subcircuito.nombre_subcircuito')
            ->join('subcircuito', 'subcircuito.id_subcircuito = vehiculo.subcircuito');
            $query2 = $builder2->get();
            $result2 = $query2->getResult();
        $subcircuito = $model3->findAll();

        $data = [
            'personal' => $result,
            'vehiculo' => $result2,
            'subcircuito' => $subcircuito,
        ];

        return view('vehiculo-gestion/asignacion', $data);
    }

    public function updatePersonal(){
        $model = new PersonalModel();
        $ids = $this->request->getPost('id_personal');
        $subcircuitos = $this->request->getPost('subcircuito');
        foreach ($ids as $id) { 
            if(isset($subcircuitos[$id])){
                $data = [
                    'subcircuito' => $subcircuitos[$id]
                ];
                $model->update($id, $data);
            }
        }
        return $this->response->redirect(base_url('/asignacion'));
    }
    
    public function updateVehiculo(){
        $model2 = new GestionVehicularModel();
        $ids = $this->request->getPost('id_vehiculo');
        $subcircuitos = $this->request->getPost('subcircuito');
        foreach ($ids as $id) {
            if(isset($subcircuitos[$id])){
                $data = [
                    'subcircuito' => $subcircuitos[$id]
                ];
                $model2->update($id, $data);
            }
        }
        return $this->response->redirect(base_url('/asignacion'));
    }

}