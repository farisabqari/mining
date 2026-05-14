<?php

namespace Database\Seeders;

use App\Models\SustainabilityReport;
use Illuminate\Database\Seeder;

class SustainabilityReportSeeder extends Seeder
{
    public function run(): void
    {
        $reports = [
            [
                'title' => 'Annual Sustainability Report 2025',
                'description' => 'Comprehensive report detailing our environmental, social, and governance performance for the fiscal year 2025. Includes metrics on emissions reduction, community investment, and governance practices.',
                'file' => null,
                'year' => 2025,
            ],
            [
                'title' => 'ESG Performance Report 2024',
                'description' => 'Detailed analysis of our ESG metrics and progress against sustainability targets. Highlights achievements in water management, biodiversity conservation, and local employment.',
                'file' => null,
                'year' => 2024,
            ],
            [
                'title' => 'Climate Action Report 2024',
                'description' => 'Focused report on our climate change mitigation strategies, carbon footprint analysis, and roadmap to achieve net-zero emissions by 2050.',
                'file' => null,
                'year' => 2024,
            ],
            [
                'title' => 'Corporate Social Responsibility Report 2023',
                'description' => 'Overview of our CSR programs and community development initiatives across all operational areas. Showcases impact on education, healthcare, and economic empowerment.',
                'file' => null,
                'year' => 2023,
            ],
            [
                'title' => 'Environmental Impact Assessment 2023',
                'description' => 'Scientific assessment of our environmental impact and mitigation measures. Covers air quality, water resources, biodiversity, and land rehabilitation efforts.',
                'file' => null,
                'year' => 2023,
            ],
        ];

        foreach ($reports as $report) {
            SustainabilityReport::create($report);
        }
    }
}
