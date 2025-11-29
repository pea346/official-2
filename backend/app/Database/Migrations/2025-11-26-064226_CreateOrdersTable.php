<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrdersTable extends Migration
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
            'order_number' => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
                'unique'         => true,
                'null'           => true,
            ],
            'user_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'null'           => false,
            ],
            'menu_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'null'           => false,
            ],
            'quantity' => [
                'type'           => 'INT',
                'default'        => 1,
                'null'           => false,
            ],
            'total_price' => [
                'type'           => 'DECIMAL',
                'constraint'     => '10,2',
                'unsigned'       => true,
                'null'           => false,
            ],
            'first_name' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => true,
            ],
            'last_name' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => true,
            ],
            'status' => [
                'type'           => 'ENUM',
                'constraint'     => ['Pending', 'Completed', 'Cancelled'],
                'default'        => 'Pending',
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

        $this->forge->addForeignKey('user_id', 'Users', 'id', 'CASCADE', 'CASCADE');

        $this->forge->addForeignKey('menu_id', 'Menu', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('Orders', true);
    }

    public function down()
    {
        $this->forge->dropTable('Orders', true);
    }
}
