<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NewsFactory extends Factory
{
    protected $model = News::class;

    public function definition(): array
    {
        $titles = [
            'Company Achieves Record Production in Q3 2025',
            'New Sustainability Initiative Launched',
            'Partnership Agreement with International Mining Corp',
            'Community Development Program Expands to 5 Villages',
            'Innovation in Mining Technology Implementation',
            'Safety Milestone: 10 Million Hours Without Incident',
            'Annual ESG Report Published',
            'New Exploration Rights Acquired in Papua',
            'Company Receives Industry Excellence Award',
            'Expansion Project Reaches New Milestone',
        ];

        return [
            'title' => fake()->randomElement($titles),
            'slug' => fn (array $attrs) => Str::slug($attrs['title']),
            'content' => fake()->paragraphs(6, true),
            'thumbnail' => 'https://picsum.photos/seed/18/800/600',
            'published_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
