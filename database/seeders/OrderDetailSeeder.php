<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    const MAX = 100;
    public function run(): void
    {
        for ($i = 1; $i <= self::MAX; $i++) {
            DB::table('order_detail')->insert([
                'order_id' => rand(1,30),
                'product_id' => rand(1,30),
                'quantity' => rand(1, 10),
                'notes' => 'notes ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
