<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTimestampToSubscriber extends Migration
{
    public function up()
    {
        $this->forge->addColumn('subscriber', [
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
    }

    public function down()
    {
        $this->forge->dropColumn('subscriber', 'updated_at');
        $this->forge->dropColumn('subscriber', 'created_at'); 
    }
}
