<?php

namespace Database\Factories;

use App\Models\Pembayaran;
use Illuminate\Database\Eloquent\Factories\Factory;

class PembayaranFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pembayaran::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bulan' => $this->faker->monthName($max = 'now'),
            'kios_id' => rand(1,10),
            'tgl_pembayaran' => $this->faker->date($format = 'y-m-d', $max = 'now'),
            'bukti' => '',
        ];
    }
}
