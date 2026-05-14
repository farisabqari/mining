<?php

namespace Database\Factories;

use App\Models\SustainabilityReport;
use Illuminate\Database\Eloquent\Factories\Factory;

class SustainabilityReportFactory extends Factory
{
    protected $model = SustainabilityReport::class;

    public function definition(): array
    {
        return [
            'title' => fake()->randomElement([
                'Annual Sustainability Report '.fake()->numberBetween(2020, 2025),
                'ESG Performance Report '.fake()->numberBetween(2020, 2025),
                'Environmental Impact Assessment '.fake()->year(),
                'Corporate Social Responsibility Report '.fake()->year(),
                'Climate Action Report '.fake()->year(),
            ]),
            'description' => fake()->paragraphs(2, true),
            'file' => 'uploads/reports/sample-report.pdf',
            'year' => fake()->numberBetween(2020, 2025),
        ];
    }
}
