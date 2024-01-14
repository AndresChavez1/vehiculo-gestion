<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumn extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        
    }

    public function down()
    {
        //
    }
}
