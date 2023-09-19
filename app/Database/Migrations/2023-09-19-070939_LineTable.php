<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LineTable extends Migration
{
    private $table = 'line';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'line' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
            'description' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
            'building_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('brand_id', 'brand', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
