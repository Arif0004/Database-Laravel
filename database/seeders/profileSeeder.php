<?php

namespace Database\Seeders;

use App\Models\profile;
use Illuminate\Database\Seeder;

class profileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 8; $i++) {
            profile::create([
                'user_id' => $i,
                'phone' => rand(1000, 500000),
                'address' => 'Dhaka' . $i,
                'zip_code' => $i % 2 == 0 ? rand(100, 1000) : null,
            ]);
        }
    }
}
