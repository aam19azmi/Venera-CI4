<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Product extends Migration
{
    public function up()
{
    // Define the table structure for 'products' table
    $this->forge->addField([
        'id' => [
            'type' => 'int',
            'constraint' => 11,
            'unsigned' => true,
            'auto_increment' => true,
        ],
        'name' => [
            'type' => 'varchar',
            'constraint' => 255,
        ],
        'description' => [
            'type' => 'text',
        ],
        'picture' => [
            'type' => 'varchar',
            'constraint' => 255,
        ],
        'stock' => [
            'type' => 'int',
            'constraint' => 255,
        ],
        'price' => [
            'type' => 'int',
            'constraint' => 255,
        ],
        'created_at' => [
            'type' => 'TIMESTAMP',
            'default' => new RawSql('CURRENT_TIMESTAMP'),
        ],
    ]);

    // Set the primary key for the 'products' table
    $this->forge->addKey('id', true);

    // Create the 'products' table
    $this->forge->createTable('products', true);
}

    public function down()
    {
        // Drop the 'products' table if it exists
        $this->forge->dropTable('products');
    }
}