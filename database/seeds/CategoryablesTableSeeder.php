<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoryablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $i = 1;
        while ($i <= 50) {
            DB::table('categoryables')->insert([
                'category_id' => rand(1, 6),
                'categoryable_id' => $i,
                'categoryable_type' => 'App\Article'

            ]);
            $i++;
        }
    }
}
