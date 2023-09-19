<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MachineTableSeeder extends Seeder
{
    private $table = 'machine';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'kind_of_machine' => '4 Needle 6 Threads Flatseamer',
                'brand_id' => 1,
                'model' => 'D007S-452-02-AT/AWT',
                'serial' => 'Z490528',
                'qty' => 1,
            ],
            [
                'id' => 2,
                'kind_of_machine' => 'Bartack',
                'brand_id' => 1,
                'model' => 'KE-430C-07',
                'serial' => 'L2112923',
                'qty' => 1,
            ],
            [
                'id' => 3,
                'kind_of_machine' => 'Blindstich Hemming',
                'brand_id' => 4,
                'model' => 'KE-430C-07',
                'serial' => 'L2112923',
                'qty' => 1,
            ],
            [
                'id' => 4,
                'kind_of_machine' => 'Button sew',
                'brand_id' => 10,
                'model' => 'LK-1903BSS-301/MC-670K',
                'serial' => '2LIKG01302',
                'qty' => 1,
            ],
            [
                'id' => 5,
                'kind_of_machine' => 'Coverseam',
                'brand_id' => 4,
                'model' => 'W664-01GB',
                'serial' => '0186294',
                'qty' => 1,
            ],
            [
                'id' => 6,
                'kind_of_machine' => 'Overlock',
                'brand_id' => 6,
                'model' => '747K-514M2-24',
                'serial' => '128057880',
                'qty' => 1,
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
