<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Admin extends Migration
{
    public function up()
    {
        // Create admin table
        $this->forge->addField([
            'id' => [   
                'type'=> 'INT',
                'constraint' => 11,
                'unsigned'=> true,
                'auto_increment'=> true
            ],
            'name' => [
                'type'=> 'VARCHAR',
                'constraint'=> 255
            ],
            'username' => [
                'type'=> 'VARCHAR',
                'constraint'=> 225
            ],
            'email' => [
                'type'=> 'VARCHAR',
                'constraint'=> 225
            ],
            'password' => [
                'type'=> 'VARCHAR',
                'constraint'=> 64
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP')
            ]
        ]);

        // Crate Primary Key
        $this->forge->addKey('id', true);

        // Create Unique Key
        $this->forge->addUniqueKey('username', 'email',true);

        // Crate Admin Table
        $this->forge->createTable('admins', true);
    }

    public function down()
    {
        // Drop admin table
        $this->forge->dropTable('admins');
    }
}
