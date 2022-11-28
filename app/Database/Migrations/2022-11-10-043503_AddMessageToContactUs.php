<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddMessageToContactUs extends Migration
{
    public function up()
    {
        $this->forge->addColumn('contactus', [
            'message' => [
                'type' => 'VARCHAR',
                'constraint'    => '500' 
            ] 
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('contactus', 'message');
    }
}
