<?php

namespace Database\Factories;

use App\Models\Kios;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class KiosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kios::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1,10),
            'nama' => $this->faker->word(),
            'password' => Hash::make('admin'),
            'verified' => 0,
            'tgl_kontrak' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
