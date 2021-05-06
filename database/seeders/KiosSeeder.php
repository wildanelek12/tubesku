<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kios;
class KiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kios::factory()->count(10)->create();
    }
}
