<?php

namespace Database\Factories;

use App\Models\Career;
use Illuminate\Database\Eloquent\Factories\Factory;

class CareerFactory extends Factory
{
    protected $model = Career::class;

    public function definition(): array
    {
        $titles = [
            'Senior Mining Engineer',
            'Geologist Exploration',
            'Heavy Equipment Operator',
            'Safety Officer',
            'Environmental Specialist',
            'Mechanical Engineer',
            'Electrical Engineer',
            'Project Manager Mining',
            'Drill & Blast Engineer',
            'Processing Plant Manager',
            'Surveyor',
            'HR Business Partner',
            'Finance Controller',
            'Supply Chain Manager',
            'Community Relations Officer',
        ];

        $departments = [
            'Mining Operations',
            'Exploration',
            'Engineering',
            'Safety & Health',
            'Environment',
            'Processing',
            'Human Resources',
            'Finance',
            'Supply Chain',
            'Corporate Affairs',
        ];

        $locations = [
            'Jakarta, Indonesia',
            'East Kalimantan Site',
            'Papua Site',
            'Sulawesi Site',
            'Sumatra Site',
        ];

        return [
            'title' => fake()->randomElement($titles),
            'department' => fake()->randomElement($departments),
            'location' => fake()->randomElement($locations),
            'description' => fake()->paragraphs(3, true),
            'requirements' => fake()->paragraphs(2, true),
            'status' => 'open',
        ];
    }
}
