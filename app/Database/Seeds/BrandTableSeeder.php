<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    private $table = 'brand';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'brand' => 'kansai',
            ],
            [
                'id' => 2,
                'brand' => 'okurma',
            ],
            [
                'id' => 3,
                'brand' => 'pegasus',
            ],
            [
                'id' => 4,
                'brand' => 'siruba',
            ],
            [
                'id' => 5, 
                'brand' => 'brother',
            ],
            [
                'id' => 6,
                'brand' => 'shing ling',
            ],
            [
                'id' => 7,
                'brand' => 'juki'
            ],
            [
                'id' => 8,
                'brand' => 'UPFAFF',
            ],
            [
                'id' => 9,
                'brand' => 'strobel',
            ],
            [
                'id' => 10,
                'brand' => 'TONY',
            ],
            [
                'id' => 11,
                'brand' => 'shing ray',
            ],
            [
                'id' => 12,
                'brand' => 'sakgo',
            ],
            [
                'id' => 13,
                'brand' => 'sunstar',
            ],
            [
                'id' => 14,
                'brand' => 'murata',
            ],
            [
                'id' => 15,
                'brand' => 'gemsy',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
