<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $galleries = [
            ['title' => 'Aerial View of Main Pit Operations', 'image' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=800&q=80', 'category' => 'mining-site'],
            ['title' => 'Heavy Equipment Fleet', 'image' => 'https://images.unsplash.com/photo-1581092795360-fd1ca04f0952?w=800&q=80', 'category' => 'equipment'],
            ['title' => 'Processing Plant at Sunset', 'image' => 'https://images.unsplash.com/photo-1578991624413-d76c8e3a5f28?w=800&q=80', 'category' => 'processing'],
            ['title' => 'Community Development Program', 'image' => 'https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=800&q=80', 'category' => 'community'],
            ['title' => 'Rehabilitated Forest Area', 'image' => 'https://images.unsplash.com/photo-1511497584788-876760111969?w=800&q=80', 'category' => 'environmental'],
            ['title' => 'Drone Panorama of Mining Complex', 'image' => 'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?w=800&q=80', 'category' => 'aerial'],
            ['title' => 'Underground Mining Operations', 'image' => 'https://images.unsplash.com/photo-1541888946425-d81bb96040ea?w=800&q=80', 'category' => 'mining-site'],
            ['title' => 'Haul Truck in Action', 'image' => 'https://images.unsplash.com/photo-1578991624412-cf3c6c7e2b57?w=800&q=80', 'category' => 'equipment'],
            ['title' => 'Environmental Monitoring Station', 'image' => 'https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?w=800&q=80', 'category' => 'environmental'],
            ['title' => 'Corporate Headquarters', 'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800&q=80', 'category' => 'mining-site'],
            ['title' => 'Conveyor Belt System', 'image' => 'https://images.unsplash.com/photo-1590756251556-b1c54b8f439d?w=800&q=80', 'category' => 'processing'],
            ['title' => 'Team at Work', 'image' => 'https://images.unsplash.com/photo-1521791136064-7986c2920216?w=800&q=80', 'category' => 'community'],
        ];

        foreach ($galleries as $gallery) {
            Gallery::create($gallery);
        }
    }
}
