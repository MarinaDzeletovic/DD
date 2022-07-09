<?php

namespace Database\Seeders;

use App\Models\Emission;
use Illuminate\Database\Seeder;

class EmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Emission::factory(30)->create();
    }
}
