<?php

namespace Database\Factories;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryFactory extends Factory
{
    protected $model = Gallery::class;

    public function definition(): array
    {
        $categories = ['mining-site', 'equipment', 'community', 'environmental', 'aerial', 'processing'];

        $images = [
            'https://picsum.photos/seed/889/800/600',
            'https://picsum.photos/seed/178/800/600',
            'https://picsum.photos/seed/128/800/600',
            'https://picsum.photos/seed/676/800/600',
            'https://picsum.photos/seed/849/800/600',
            'https://picsum.photos/seed/979/800/600',
            'https://picsum.photos/seed/256/800/600',
            'https://picsum.photos/seed/29/800/600',
        ];

        return [
            'title' => fake()->sentence(3),
            'image' => fake()->randomElement($images),
            'category' => fake()->randomElement($categories),
        ];
    }
}
