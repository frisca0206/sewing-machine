<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LineTableSeeder extends Seeder
{
    private $table = 'line';
 
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'line' => 'Line A1',
                'description' => 'Line 1 gedung A',
                'building_id' => 1,
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
