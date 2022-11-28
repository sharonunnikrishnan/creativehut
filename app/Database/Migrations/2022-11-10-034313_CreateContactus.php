<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateContactus extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
                'auto_increment'=> true
            ], 
            'email' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'phone' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null
            ]
        ]);

        $this->forge->addPrimaryKey('id')
                    ->addUniqueKey('email');
        $this->forge->createTable('contactus');
    }

    public function down()
    {
        $this->forge->dropTable('contactus');
    }
}
