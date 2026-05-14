<?php

namespace Database\Seeders;

use App\Models\Career;
use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    public function run(): void
    {
        $careers = [
            [
                'title' => 'Senior Mining Engineer',
                'department' => 'Mining Operations',
                'location' => 'East Kalimantan Site',
                'description' => 'We are seeking an experienced Senior Mining Engineer to join our operations team. The ideal candidate will be responsible for mine planning, design, and optimization of open-pit mining operations.',
                'requirements' => "- Bachelor's degree in Mining Engineering or related field\n- Minimum 8 years of experience in open-pit mining\n- Proficiency in mining software (Surpac, Datamine, or Vulcan)\n- Strong knowledge of mine planning and design\n- Excellent leadership and communication skills\n- Experience with autonomous mining systems is a plus",
                'status' => 'open',
            ],
            [
                'title' => 'Exploration Geologist',
                'department' => 'Exploration',
                'location' => 'Papua Site',
                'description' => 'Responsible for planning and executing exploration programs, including geological mapping, sampling, and resource estimation to identify new mineral deposits.',
                'requirements' => "- Bachelor's degree in Geology\n- 5+ years of exploration experience\n- Strong understanding of mineral deposit models\n- Experience with GIS and geological modeling software\n- Willingness to work in remote locations\n- Fluency in English and Bahasa Indonesia",
                'status' => 'open',
            ],
            [
                'title' => 'Heavy Equipment Operator',
                'department' => 'Mining Operations',
                'location' => 'Sulawesi Site',
                'description' => 'Operating heavy mining equipment including excavators, haul trucks, bulldozers, and graders in a safe and efficient manner to support production targets.',
                'requirements' => "- Valid heavy equipment operator certification\n- Minimum 3 years of experience operating mining equipment\n- Strong safety awareness\n- Ability to work in shift rotations\n- Physical fitness for demanding work conditions",
                'status' => 'open',
            ],
            [
                'title' => 'Safety Officer',
                'department' => 'Safety & Health',
                'location' => 'Jakarta, Indonesia',
                'description' => 'Implement and monitor safety programs across mining operations. Conduct safety inspections, investigations, and training to ensure compliance with regulations and company standards.',
                'requirements' => "- Bachelor's degree in Occupational Health & Safety\n- Certified Safety Professional (CSP) or equivalent\n- 5+ years of experience in mining safety\n- Knowledge of Indonesian mining safety regulations\n- Strong analytical and reporting skills",
                'status' => 'open',
            ],
            [
                'title' => 'Environmental Specialist',
                'department' => 'Environment',
                'location' => 'East Kalimantan Site',
                'description' => 'Manage environmental compliance programs, conduct impact assessments, and implement rehabilitation and conservation initiatives across operational sites.',
                'requirements' => "- Degree in Environmental Science or related field\n- 5+ years of experience in mining environmental management\n- Knowledge of AMDAL and environmental regulations\n- Experience in land rehabilitation and reforestation\n- Strong project management skills",
                'status' => 'open',
            ],
            [
                'title' => 'Processing Plant Manager',
                'department' => 'Processing',
                'location' => 'Sulawesi Site',
                'description' => 'Oversee all aspects of mineral processing operations including crushing, grinding, flotation, and tailings management to optimize recovery rates and production efficiency.',
                'requirements' => "- Degree in Metallurgy or Chemical Engineering\n- 10+ years of experience in mineral processing\n- Proven track record in plant management\n- Strong leadership and team management abilities\n- Knowledge of process optimization and control systems",
                'status' => 'closed',
            ],
        ];

        foreach ($careers as $career) {
            Career::create($career);
        }
    }
}
