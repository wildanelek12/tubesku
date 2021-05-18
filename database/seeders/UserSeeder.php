<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'nik' => '0',
          'nama' => 'admin',
          'hp' => '0',
          'email' => 'admin@admin.com',
          'alamat' => '0',
          'ktp' => '0',
        ]);
        // User::factory()->count(10)->create();
    }
}
