<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Funding;
use App\Models\Donation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Funding::create(attributes: [
            'title' => 'Bantuan Kemanusiaan',
            'desc' => 'Bantuan untuk korban bencana alam',
            'image' => 'bantuan-kemanusiaan.jpg',
            'progress' => 0,
            'duration' => '1 bulan',
            'collected' => 0,
            'target' => 1000000,
            'user_id' => 1,

        ]);
        Donation::create(attributes: [
            'amount' => 100000,
            'funding_id' => 1,
            'user_id' => 2,
        ]);
    }
}
