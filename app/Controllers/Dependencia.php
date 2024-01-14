<?php 

namespace App\Controllers;
use App\Models\GestionDependenciaGeneralModel;
use App\Models\DependenciaModel;
use APP\Models\ProvinciaModel;
use App\Models\DistritoModel;
use App\Models\CircuitoModel;
use App\Models\SubcircuitoModel;

class Dependencia extends BaseController{


    public function index(){
        $model = new GestionDependenciaGeneralModel();
        return $model->getDependencia();
    }

    public function storeDependencia(){
        $model = new DependenciaModel();
    }

    public function storeProvincia(){
        $model = new ProvinciaModel();
    }

    public function storeDistrito(){
        $model = new DistritoModel();
    }

    public function storeCircuito(){
        $model = new CircuitoModel();
    }

    public function storeSubcircuito(){
        $model = new SubcircuitoModel();
    }
}