<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    const MAX = 30;
    public function run(): void
    {
        for ($i = 1; $i < self::MAX; $i++) {
            DB::table('products')->insert([
                [
                        'name' => 'product' .$i,
                        'image' => 'images/pd' . rand(1,4) .'jpg',
                        'price' => mt_rand(10000, 200000),
                        'quantity' => rand(1, 30),
                        'description' => 'description' . $i,
                        'created_at' => now(),
                        'updated_at' => now(),
            ],
            ]);
        }
    }
}
