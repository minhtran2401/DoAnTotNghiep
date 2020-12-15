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

      
    }
}
