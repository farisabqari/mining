<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $galleries = [
            ['title' => 'Aerial View of Main Pit Operations', 'image' => 'https://picsum.photos/seed/533/800/600', 'category' => 'mining-site'],
            ['title' => 'Heavy Equipment Fleet', 'image' => 'https://picsum.photos/seed/428/800/600', 'category' => 'equipment'],
            ['title' => 'Processing Plant at Sunset', 'image' => 'https://picsum.photos/seed/553/800/600', 'category' => 'processing'],
            ['title' => 'Community Development Program', 'image' => 'https://picsum.photos/seed/456/800/600', 'category' => 'community'],
            ['title' => 'Rehabilitated Forest Area', 'image' => 'https://picsum.photos/seed/461/800/600', 'category' => 'environmental'],
            ['title' => 'Drone Panorama of Mining Complex', 'image' => 'https://picsum.photos/seed/842/800/600', 'category' => 'aerial'],
            ['title' => 'Underground Mining Operations', 'image' => 'https://picsum.photos/seed/363/800/600', 'category' => 'mining-site'],
            ['title' => 'Haul Truck in Action', 'image' => 'https://picsum.photos/seed/300/800/600', 'category' => 'equipment'],
            ['title' => 'Environmental Monitoring Station', 'image' => 'https://picsum.photos/seed/933/800/600', 'category' => 'environmental'],
            ['title' => 'Corporate Headquarters', 'image' => 'https://picsum.photos/seed/474/800/600', 'category' => 'mining-site'],
            ['title' => 'Conveyor Belt System', 'image' => 'https://picsum.photos/seed/687/800/600', 'category' => 'processing'],
            ['title' => 'Team at Work', 'image' => 'https://picsum.photos/seed/814/800/600', 'category' => 'community'],
        ];

        foreach ($galleries as $gallery) {
            Gallery::create($gallery);
        }
    }
}
