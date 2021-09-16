<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for ($i=1; $i <30 ; $i++) {
        DB::insert('insert into categories (id, name) values (?, ?)', [$i, "Category$i"]);
       }
    }
}

