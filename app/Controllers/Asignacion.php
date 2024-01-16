<?php 

namespace App\Controllers;

use App\Models\PersonalModel;

class Asignacion extends BaseController {


    public function index(){
       return view('vehiculo-gestion/asignacion'); 
    }
}