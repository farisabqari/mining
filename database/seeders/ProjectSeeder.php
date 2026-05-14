<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Batu Hijau Copper-Gold Mine Expansion',
                'slug' => 'batu-hijau-copper-gold-mine-expansion',
                'description' => 'A major expansion of our flagship copper-gold mine in West Sumbawa, increasing production capacity by 40% through advanced mining technologies and infrastructure development. The project includes construction of new processing facilities, tailings management systems, and community infrastructure.',
                'image' => 'https://picsum.photos/seed/509/800/600',
                'location' => 'West Sumbawa, NTB, Indonesia',
                'category' => 'gold',
                'production_capacity' => '2,500 MT/year',
                'status' => 'active',
                'year' => 2024,
            ],
            [
                'title' => 'Kaltim Prima Coal Mining Development',
                'slug' => 'kaltim-prima-coal-mining-development',
                'description' => 'Development of a new coal mining operation in East Kalimantan with state-of-the-art mining equipment and environmentally responsible mining practices. The project incorporates advanced rehabilitation planning and water management systems.',
                'image' => 'https://picsum.photos/seed/817/800/600',
                'location' => 'East Kalimantan, Indonesia',
                'category' => 'coal',
                'production_capacity' => '5,000 MT/year',
                'status' => 'active',
                'year' => 2023,
            ],
            [
                'title' => 'Pomalaa Nickel Smelter Construction',
                'slug' => 'pomalaa-nickel-smelter-construction',
                'description' => 'Construction of a world-class nickel smelter and processing facility in Southeast Sulawesi, supporting Indonesia\'s downstream processing strategy for nickel resources. The facility will produce high-grade nickel matte for the EV battery supply chain.',
                'image' => 'https://picsum.photos/seed/362/800/600',
                'location' => 'Southeast Sulawesi, Indonesia',
                'category' => 'nickel',
                'production_capacity' => '1,200 MT/year',
                'status' => 'development',
                'year' => 2025,
            ],
            [
                'title' => 'Grasberg Block Cave Underground Mine',
                'slug' => 'grasberg-block-cave-underground-mine',
                'description' => 'Transition from open-pit to large-scale block cave underground mining at one of the world\'s largest gold and copper deposits in Papua. This project represents a new era of deep resource extraction with advanced automation.',
                'image' => 'https://picsum.photos/seed/516/800/600',
                'location' => 'Papua, Indonesia',
                'category' => 'gold',
                'production_capacity' => '3,200 MT/year',
                'status' => 'active',
                'year' => 2022,
            ],
            [
                'title' => 'Tayan Bauxite Mining & Refinery',
                'slug' => 'tayan-bauxite-mining-refinery',
                'description' => 'Integrated bauxite mining and alumina refinery project in West Kalimantan, designed to process local bauxite into high-quality alumina for domestic and international markets.',
                'image' => 'https://picsum.photos/seed/298/800/600',
                'location' => 'West Kalimantan, Indonesia',
                'category' => 'bauxite',
                'production_capacity' => '1,800 MT/year',
                'status' => 'active',
                'year' => 2023,
            ],
            [
                'title' => 'Meratus Iron Ore Development',
                'slug' => 'meratus-iron-ore-development',
                'description' => 'Development of iron ore mining operations in the Meratus Mountains of South Kalimantan, focusing on premium-grade iron ore extraction with minimal environmental footprint.',
                'image' => 'https://picsum.photos/seed/317/800/600',
                'location' => 'South Kalimantan, Indonesia',
                'category' => 'iron',
                'production_capacity' => '900 MT/year',
                'status' => 'completed',
                'year' => 2021,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
