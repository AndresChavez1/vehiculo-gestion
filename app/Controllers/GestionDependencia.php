<?php

namespace App\Controllers;
use App\Models\DependenciaModel;

class GestionDependencia extendS BaseController {

    public function getPersonal()
    {
        $db = db_connect();
        $model = new DependenciaModel($db);
        echo '<pre>';
        print_r($model->getRango());
        echo '<pre>';
    }

    public function getData()
    {
        $db = db_connect();
        $model = new DependenciaModel($db);
        return $model->getColumns();
    }

    public function store()
    {
        $db = db_connect();
        $model = new DependenciaModel($db);
        $data = [
            'identificacion' =>$this->request->getPost('identificacion'),
            'nombres' =>$this->request->getPost('nombres'),
            'apellidos' =>$this->request->getPost('apellidos'),
            'fecha_nacimiento' =>$this->request->getPost('fecha_nacimiento'),
            'tipo_sangre' =>$this->request->getPost('tipo_sangre'),
            'ciudad_nacimiento' =>$this->request->getPost('ciudad_nacimiento'),
            'telefono' =>$this->request->getPost('telefono'),
            'rango' =>$this->request->getPost('rango'),
            'dependencia' =>$this->request->getPost('dependencia'),
            'vehiculo' =>$this->request->getPost('vehiculo'),
            'rol' =>$this->request->getPost('rol'),
        ];
        $model->$this->db->table('personal')->insert($data);
        return $this->response->redirect(base_url('gestion-dependencia'));
    }
}