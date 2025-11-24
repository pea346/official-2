<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
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
            'firstName' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => false,
            ],
            'middleName' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => true,
            ],
            'lastName' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => false,
            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'           => false,
            ],
            'password' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'           => false,
            ],
            'type' => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
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

        $this->forge->addUniqueKey('email');

        $this->forge->createTable('Users', true);
    }

    public function down()
    {
        $this->forge->dropTable('Users', true);
    }
}
