<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    protected $model = Team::class;

    public function definition(): array
    {
        $positions = [
            'President & CEO',
            'Chief Operating Officer',
            'Chief Financial Officer',
            'VP of Mining Operations',
            'Director of Sustainability',
            'Head of Exploration',
            'Chief Technology Officer',
            'VP of Human Resources',
            'Director of Safety & Compliance',
            'Head of Corporate Communications',
        ];

        return [
            'name' => fake()->name(),
            'position' => fake()->randomElement($positions),
            'photo' => 'https://picsum.photos/seed/50/800/600',
            'description' => fake()->paragraph(2),
        ];
    }
}
