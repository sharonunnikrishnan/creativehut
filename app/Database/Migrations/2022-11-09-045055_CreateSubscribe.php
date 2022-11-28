<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSubscribe extends Migration
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
            ]
        ]);

        $this->forge->addPrimaryKey('id')
                    ->addUniqueKey('email');
        $this->forge->createTable('subscriber');
    }

    public function down()
    {
        $this->forge->dropTable('subscriber');
    }
}
