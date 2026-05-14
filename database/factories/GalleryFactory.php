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
            'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=800&q=80',
            'https://images.unsplash.com/photo-1581092795360-fd1ca04f0952?w=800&q=80',
            'https://images.unsplash.com/photo-1578991624413-d76c8e3a5f28?w=800&q=80',
            'https://images.unsplash.com/photo-1541888946425-d81bb96040ea?w=800&q=80',
            'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?w=800&q=80',
            'https://images.unsplash.com/photo-1578991624412-cf3c6c7e2b57?w=800&q=80',
            'https://images.unsplash.com/photo-1590756251556-b1c54b8f439d?w=800&q=80',
            'https://images.unsplash.com/photo-1615211510395-e6a3ff9faa90?w=800&q=80',
        ];

        return [
            'title' => fake()->sentence(3),
            'image' => fake()->randomElement($images),
            'category' => fake()->randomElement($categories),
        ];
    }
}
