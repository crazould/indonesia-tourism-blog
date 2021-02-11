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
                'password' => 'dummyOne'
            ],
            [
                'name' => 'dummy two',
                'email' => 'dummy.two@gmail.com',
                'phone' => '081212341234',
                'role' => 'user',
                'password' => 'dummyTwo'
            ],
            [
                'name' => 'dummy three',
                'email' => 'dummy.three@gmail.com',
                'phone' => '081212341234',
                'role' => 'user',
                'password' => 'dummyThree'
            ],
            [
                'name' => 'admin one',
                'email' => 'admin.one@gmail.com',
                'phone' => '081212341234',
                'role' => 'admin',
                'password' => 'dummyOne'
            ],
            [
                'name' => 'admin two',
                'email' => 'admin.two@gmail.com',
                'phone' => '081212341234',
                'role' => 'admin',
                'password' => 'adminTwo'
            ],
        ]);
    }
}
