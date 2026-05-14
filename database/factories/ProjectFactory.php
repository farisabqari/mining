<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        $titles = [
            'Gold Mining Expansion Project',
            'Coal Mining Development Phase III',
            'Nickel Smelter Construction',
            'Copper Ore Mining Initiative',
            'Bauxite Mining & Refinery Project',
            'Iron Ore Mining Development',
            'Offshore Oil & Gas Exploration',
            'Mineral Processing Facility Upgrade',
            'Sustainable Mining Initiative 2026',
            'Advanced Quarry Operations Project',
        ];

        $categories = ['gold', 'coal', 'nickel', 'copper', 'bauxite', 'iron', 'oil-gas', 'mineral', 'quarry'];
        $locations = [
            'East Kalimantan, Indonesia',
            'Papua, Indonesia',
            'Sulawesi, Indonesia',
            'Sumatra, Indonesia',
            'West Java, Indonesia',
            'NTB, Indonesia',
            'Central Kalimantan, Indonesia',
            'South Kalimantan, Indonesia',
        ];

        return [
            'title' => fake()->randomElement($titles),
            'slug' => fn (array $attrs) => Str::slug($attrs['title'].'-'.fake()->unique()->numberBetween(1, 999)),
            'description' => fake()->paragraphs(3, true),
            'image' => 'https://picsum.photos/seed/862/800/600',
            'location' => fake()->randomElement($locations),
            'category' => fake()->randomElement($categories),
            'production_capacity' => fake()->numberBetween(100, 5000).' '.fake()->randomElement(['tons/year', 'MT/year', 'oz/year']),
            'status' => fake()->randomElement(['active', 'completed', 'planned', 'development']),
            'year' => fake()->numberBetween(2020, 2026),
        ];
    }
}
