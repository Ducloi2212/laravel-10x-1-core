<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     const MAX = 30;
    public function run(): void
    {
        for ($i = 1; $i < self::MAX; $i++) {
            DB::table('user_role')->insert([
                [
                        'user_id' => $i,
                        'role_id' => rand(1,4),
                        'created_at' => now(),
                        'updated_at' => now(),
            ],
            ]);
        }
    }
}
