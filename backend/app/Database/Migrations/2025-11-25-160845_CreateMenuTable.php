<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMenuTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',  // important
                'constraint'     => 11,     // important, but some fields don't require this. This controls the field size.
                'unsigned'       => true,   // optional, it means all positive value
                'auto_increment' => true,   // optional if you want auto counting, but important for the id
                'null'           => false,  // needed for most, it means it can be empty
            ],
            'name' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => false,
            ],
            'description' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => true,
            ],
            'price' => [
                'type'           => 'DECIMAL',
                'constraint'     => '10,2',
                'unsigned'       => true,
                'null'           => false,
            ],
            'is_available' => [
                'type'           => 'BOOLEAN',
                'default'        => true,
                'null'           => false,
            ],
            'deletedAt' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'createdAt' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updatedAt' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addUniqueKey('name');

        $this->forge->createTable('Menu', true);
    }

    public function down()
    {
        $this->forge->dropTable('Menu', true);
    }
}
