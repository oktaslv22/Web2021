<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
                'auto_increment'=>TRUE,
            ],
            'username'=>[
                'type'=>'VARCHAR',
                'constraint'=>100,
            ],
            'password'=>[
                'type'=>'TEXT',
            ]
    
            ]);

            $this->forge->addKey('id',TRUE);
            $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}