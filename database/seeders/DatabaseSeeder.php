<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()  {



        DB::table('users')->insert([
          
            'name' => 'Minh Trần',
            'avatar' =>  'minh.jpg',
           'email'=> 'minh@gmail.com',
            'password'=>bcrypt('admin123'),
            'address'=>'1261/9 Lê Đức Thọ',
            'phone'=>'0836080801',
            'active'=>'1',
            'idgroup'=>'1',
        ]);

        DB::table('users')->insert([
           
            'name' => 'Quản Trị',
            'avatar' =>  'admin.jpg',
           'email'=> 'admin@gmail.com',
            'password'=>bcrypt('admin123'),
            'address'=>'1261/9 Lê Đức Thọ',
            'phone'=>'0836080801',
            'active'=>'1',
            'idgroup'=>'1',
        ]);

        DB::table('users')->insert([
            'name' => 'Tester',
            'avatar' =>  'kh.jpg',
            'email'=> 'tester@gmail.com',
            'password'=>bcrypt('admin123'),
            'address'=>'1261/9 Lê Đức Thọ',
            'phone'=>'0836080801',
            'active'=>'1',
            'idgroup'=>'0',
        ]);

        DB::table('tinhtranghd')->insert([
            'id_tinhtrang' => '1',
            'name_tinhtrang'=>'Chưa xử lí',
        ]);

        DB::table('tinhtranghd')->insert([
            'id_tinhtrang' => '2',
            'name_tinhtrang'=>'Đã xác nhận',
        ]);
        DB::table('tinhtranghd')->insert([
            'id_tinhtrang' => '3',
            'name_tinhtrang'=>'Đang gói hàng',
        ]);
        DB::table('tinhtranghd')->insert([
            'id_tinhtrang' => '4',
            'name_tinhtrang'=>'Đang vận chuyển',
        ]);
        DB::table('tinhtranghd')->insert([
            'id_tinhtrang' => '5',
            'name_tinhtrang'=>'Đã thanh toán',
        ]);
        DB::table('tinhtranghd')->insert([
            'id_tinhtrang' => '6',
            'name_tinhtrang'=>'Chưa thanh toán',
        ]);
        DB::table('tinhtranghd')->insert([
            'id_tinhtrang' => '7',
            'name_tinhtrang'=>'Đã hủy đơn',
        ]);

    }
}
