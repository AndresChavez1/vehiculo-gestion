<?php

namespace App\Controllers;


class Inicio extends BaseController {
    
    public function index() 
    {
        return view('vehiculo-gestion/inicio');

    }
}