<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MainSeeder extends Seeder // file seeder được tạo nhằm mục đích chạy dữ liệu demo trên database
{
    public function run()
    {
        //gọi đến file menu seeder ( mục đích tạo main seeder đê chỉ cần chạy 1 file thì sẽ chạy tất cả các file dc gọi)`
        
        $this -> call('UserSeeder');
        
    }
}
