<?php

namespace Database\Factories;

use App\Models\Operation;
use Illuminate\Database\Eloquent\Factories\Factory;

class OperationFactory extends Factory
{
    protected $model = Operation::class;

    public function definition(): array
    {
        $titles = [
            'Open Pit Mining Operations',
            'Underground Mining Operations',
            'Crushing & Screening Plant',
            'Hauling & Transportation',
            'Processing & Refinery',
            'Drilling & Blasting Operations',
            'Heap Leaching Facility',
            'Conveyor Belt System',
        ];

        return [
            'title' => fake()->randomElement($titles),
            'description' => fake()->paragraphs(2, true),
            'image' => 'https://picsum.photos/seed/372/800/600',
            'capacity' => fake()->numberBetween(500, 10000).' '.fake()->randomElement(['TPH', 'TPD', 'MTPA']),
            'site_location' => fake()->randomElement([
                'Site A - East Pit',
                'Site B - West矿区',
                'Site C - North Quarry',
                'Site D - South Processing',
                'Central Processing Facility',
            ]),
        ];
    }
}
