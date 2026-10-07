<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAccountTables extends Migration
{
    public function up(): void
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'full_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 190,
            ],
            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => 30,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('email');
        $this->forge->createTable('customers');

        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'full_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
            ],
            'role' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('username');
        $this->forge->createTable('users');

        $this->db->table('customers')->insertBatch([
            ['full_name' => 'Angelo Brillantitos', 'email' => 'Angelo.b@yahaa.com', 'phone' => '99999999999'],
            ['full_name' => 'Rovic Bilbao', 'email' => 'Roc.b@yahaa.com', 'phone' => '88888888888'],
            ['full_name' => 'Francis Pertudo', 'email' => 'Francis.perts@yahaa.com', 'phone' => '77777777777'],
            ['full_name' => 'Kath Daba', 'email' => 'Kath.d@yahaa.com', 'phone' => '66666666666'],
            ['full_name' => 'Reven lhi', 'email' => 'Reven.lhi@yahaa.com', 'phone' => '55555555555'],
        ]);

        $this->db->table('users')->insertBatch([
            ['username' => 'admin01', 'full_name' => 'Angelo Brillantes', 'role' => 'Administrator'],
            ['username' => 'cashier01', 'full_name' => 'Rovic Bilbao', 'role' => 'Cashier'],
            ['username' => 'cashier02', 'full_name' => 'Reven Lhi', 'role' => 'Cashier'],
            ['username' => 'stock01', 'full_name' => 'Kathleen Daba', 'role' => 'Inventory Clerk'],
            ['username' => 'manager01', 'full_name' => 'Karl Brillantes', 'role' => 'Store Manager'],
        ]);
    }

    public function down(): void
    {
        $this->forge->dropTable('users', true);
        $this->forge->dropTable('customers', true);
    }
}
