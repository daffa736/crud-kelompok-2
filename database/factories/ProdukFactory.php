<?php

namespace Database\Factories;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_produk' => fake()->unique()->bothify('PRD###'),
            'nama_produk' => fake()->words(3, true),
            'kategori' => fake()->randomElement([
                'Elektronik',
                'Makanan',
                'Minuman',
                'Alat Tulis',
                'Pakaian',
            ]),
            'merek' => fake()->company(),
            'harga' => fake()->numberBetween(5000, 1000000),
            'stok' => fake()->numberBetween(1, 100),
            'keterangan' => fake()->sentence(),
        ];
    }
}
