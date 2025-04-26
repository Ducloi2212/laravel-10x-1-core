<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    const MAX = 30;

    public function run(): void
    {

        for ($i = 1; $i <= self::MAX; $i++) {
            DB::table('orders')->insert([
                [
                    'user_id' => $i,
                    'total_amount' => rand(10000, 200000),
                    'address' => 'address' . $i,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
        }
    }
}

