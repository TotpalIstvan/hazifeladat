<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HazifeladatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Hazifeladat::factory(15)->create();
    }
}
