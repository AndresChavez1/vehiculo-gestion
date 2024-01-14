<?php 

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model {

    protected $table = 'personal';
    protected $primaryKey = '';

    protected $allowedFields = '';


    protected function beforeInsert(){

    }

    protected function beforeUpdate(){

    }

    protected function paswordHash(){

    }
}