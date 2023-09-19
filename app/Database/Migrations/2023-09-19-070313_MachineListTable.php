<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MachineTable extends Migration
{
    private $table = 'machine_list';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'kind_of_machine' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
            'brand_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'model' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
            'serial' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
            'qty' => [
                'type' => 'int',
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('brand_id', 'brand', 'id', 'RESTRICT', 'RESTRICT');
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
