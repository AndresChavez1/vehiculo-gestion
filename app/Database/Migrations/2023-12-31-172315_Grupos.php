<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Grupos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'grupo_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
                'null' => false,
            ],
            'blog_title' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'blog_description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('blog_id', true);
        $this->forge->createTable('grupos');

    }

    public function down()
    {
        $this->forge->dropTable('grupos');
    }
}
