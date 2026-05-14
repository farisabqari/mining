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
                'photo' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&q=80',
                'description' => 'Over 30 years of experience in the global mining industry. Previously served as COO of major mining corporations across Southeast Asia and Australia. Holds a PhD in Mining Engineering from Curtin University.',
            ],
            [
                'name' => 'Sarah Wijaya',
                'position' => 'Chief Operating Officer',
                'photo' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&q=80',
                'description' => 'Seasoned mining executive with 25 years of operational experience. Expert in large-scale open pit and underground mining operations. MBA from INSEAD.',
            ],
            [
                'name' => 'Budi Hartono',
                'position' => 'Chief Financial Officer',
                'photo' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&q=80',
                'description' => 'CFO with extensive experience in corporate finance, M&A, and capital markets. Previously held senior finance roles at multinational corporations. CPA and CFA charterholder.',
            ],
            [
                'name' => 'Dr. Maya Kusuma',
                'position' => 'Director of Sustainability',
                'photo' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&q=80',
                'description' => 'Leading sustainability expert with a PhD in Environmental Science. Champion of responsible mining practices and community development. Awarded for contributions to sustainable development.',
            ],
            [
                'name' => 'Rudi Setiawan',
                'position' => 'VP of Mining Operations',
                'photo' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&q=80',
                'description' => 'Over 20 years of experience managing large-scale mining operations. Specialist in operational excellence and safety management systems.',
            ],
            [
                'name' => 'Linda Permata Sari',
                'position' => 'Chief Technology Officer',
                'photo' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&q=80',
                'description' => 'Technology leader driving digital transformation in mining. Expertise in automation, AI, and IoT applications in industrial environments. Former Google engineer.',
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
