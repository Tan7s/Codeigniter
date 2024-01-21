<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'ten_menu' => 'TRANG CHỦ',
                'meta' => 'trang-chu',
                'loai' => 1,
            ],
        ];
        $this -> db -> table('menu') -> insertBatch($data);
    }
}
//VIDEO = 1:02:00 => xem tiếp
