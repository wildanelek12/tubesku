<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(KiosSeeder::class);
        $this->call(PembayaranSeeder::class);
        $this->call(BarangSeeder::class);
    }
}
