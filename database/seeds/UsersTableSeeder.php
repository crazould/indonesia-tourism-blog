<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            [
                'name' => 'dummy one',
                'email' => 'dummy.one@gmail.com',
                'phone' => '081212341234',
                'role' => 'user',
                'password' => bcrypt('dummyOne')
            ],
            [
                'name' => 'dummy two',
                'email' => 'dummy.two@gmail.com',
                'phone' => '081212341234',
                'role' => 'user',
                'password' => bcrypt('dummyTwo')
            ],
            [
                'name' => 'dummy three',
                'email' => 'dummy.three@gmail.com',
                'phone' => '081212341234',
                'role' => 'user',
                'password' => bcrypt('dummyThree')
            ],
            [
                'name' => 'admin one',
                'email' => 'admin.one@gmail.com',
                'phone' => '081212341234',
                'role' => 'admin',
                'password' => bcrypt('adminOne')
            ],
            [
                'name' => 'admin two',
                'email' => 'admin.two@gmail.com',
                'phone' => '081212341234',
                'role' => 'admin',
                'password' => bcrypt('adminTwo')
            ],
        ]);
    }
}
