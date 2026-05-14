<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        $teams = [
            [
                'name' => 'Dr. Alexander Pratama',
                'position' => 'President & CEO',
                'photo' => 'https://picsum.photos/seed/225/800/600',
                'description' => 'Over 30 years of experience in the global mining industry. Previously served as COO of major mining corporations across Southeast Asia and Australia. Holds a PhD in Mining Engineering from Curtin University.',
            ],
            [
                'name' => 'Sarah Wijaya',
                'position' => 'Chief Operating Officer',
                'photo' => 'https://picsum.photos/seed/559/800/600',
                'description' => 'Seasoned mining executive with 25 years of operational experience. Expert in large-scale open pit and underground mining operations. MBA from INSEAD.',
            ],
            [
                'name' => 'Budi Hartono',
                'position' => 'Chief Financial Officer',
                'photo' => 'https://picsum.photos/seed/601/800/600',
                'description' => 'CFO with extensive experience in corporate finance, M&A, and capital markets. Previously held senior finance roles at multinational corporations. CPA and CFA charterholder.',
            ],
            [
                'name' => 'Dr. Maya Kusuma',
                'position' => 'Director of Sustainability',
                'photo' => 'https://picsum.photos/seed/672/800/600',
                'description' => 'Leading sustainability expert with a PhD in Environmental Science. Champion of responsible mining practices and community development. Awarded for contributions to sustainable development.',
            ],
            [
                'name' => 'Rudi Setiawan',
                'position' => 'VP of Mining Operations',
                'photo' => 'https://picsum.photos/seed/915/800/600',
                'description' => 'Over 20 years of experience managing large-scale mining operations. Specialist in operational excellence and safety management systems.',
            ],
            [
                'name' => 'Linda Permata Sari',
                'position' => 'Chief Technology Officer',
                'photo' => 'https://picsum.photos/seed/772/800/600',
                'description' => 'Technology leader driving digital transformation in mining. Expertise in automation, AI, and IoT applications in industrial environments. Former Google engineer.',
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
