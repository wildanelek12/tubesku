<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kios;
use Illuminate\Support\Facades\Hash;

class KiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kios::create([
          'user_id' => rand(1,10),
          'nama' => 'admin',
          'role' => 'admin',
          'password' => Hash::make('admin'),
          'verified' => 'admin',
          'tgl_kontrak' => '2021-05-16 10:39:07',
        ]);
        Kios::factory()->count(10)->create();
    }
}
