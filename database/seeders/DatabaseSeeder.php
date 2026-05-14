<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin Nusantara Mining',
            'email' => 'admin@nusantaramining.co.id',
            'password' => bcrypt('admin123'),
        ]);

        $this->call([
            CompanyProfileSeeder::class,
            ProjectSeeder::class,
            OperationSeeder::class,
            NewsSeeder::class,
            TeamSeeder::class,
            GallerySeeder::class,
            CareerSeeder::class,
            ContactSeeder::class,
            SustainabilityReportSeeder::class,
        ]);
    }
}
