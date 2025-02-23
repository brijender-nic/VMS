<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([StateSeeder::class]);
        $this->call([DistrictSeeder::class]);
        $this->call([OfficeSeeder::class]);
        $this->call([UserSeeder::class]);
    }
}
