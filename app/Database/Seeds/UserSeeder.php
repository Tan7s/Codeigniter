<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'email' => 'Admin123@gmail.com',
                'username' => 'Admin1',
                'password' => password_hash('123123',PASSWORD_BCRYPT),
                'loai' => '1'
            ],
            [
                'email' => 'Tan456@gmail.com',
                'username' => 'TanPO',
                'password' => password_hash('123123',PASSWORD_BCRYPT),
                'loai' => '2'
            ],
        ];
        $this -> db -> table('users') -> insertBatch($data);
    }
}

