<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BuildingTableSeeder extends Seeder
{
    private $table = 'building';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'building' => 'building A',
            ],
            [
                'id' => 2,
                'building' => 'building B',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
