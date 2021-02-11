<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            [
                'name' => 'Beach'
            ],
            [
                'name' => 'Mountain'
            ],
            [
                'name' => 'Adventure'
            ],
        ]);
    }
}
