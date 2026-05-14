<?php

namespace Database\Seeders;

use App\Models\Operation;
use Illuminate\Database\Seeder;

class OperationSeeder extends Seeder
{
    public function run(): void
    {
        $operations = [
            [
                'title' => 'Open Pit Mining Operations',
                'description' => 'Our primary open-pit mining operations utilize advanced drilling, blasting, and extraction techniques to safely recover mineral resources. The operation employs a fleet of modern heavy equipment including excavators, haul trucks, and dozers.',
                'image' => 'https://picsum.photos/seed/983/800/600',
                'capacity' => '50,000 TPD',
                'site_location' => 'Main Pit - East Kalimantan',
            ],
            [
                'title' => 'Crushing & Screening Plant',
                'description' => 'State-of-the-art crushing and screening facilities designed to process raw materials into various product specifications. The plant features primary jaw crushers, secondary cone crushers, and multi-deck screening systems.',
                'image' => 'https://picsum.photos/seed/865/800/600',
                'capacity' => '15,000 TPH',
                'site_location' => 'Central Processing Facility',
            ],
            [
                'title' => 'Concentrator & Processing Plant',
                'description' => 'Advanced mineral processing facility utilizing flotation, gravity separation, and leaching technologies to produce high-grade concentrates. The plant incorporates automated control systems for optimal recovery rates.',
                'image' => 'https://picsum.photos/seed/484/800/600',
                'capacity' => '8,000 TPD',
                'site_location' => 'Processing Complex - Site C',
            ],
            [
                'title' => 'Hauling & Transportation System',
                'description' => 'Comprehensive hauling and transportation network featuring a fleet of ultra-class haul trucks, conveyor systems, and rail infrastructure for efficient material movement from pit to processing facilities.',
                'image' => 'https://picsum.photos/seed/313/800/600',
                'capacity' => '100,000 TPD',
                'site_location' => 'Across All Sites',
            ],
            [
                'title' => 'Heap Leach Facility',
                'description' => 'Large-scale heap leaching operation for gold and copper recovery, featuring lined leach pads, solution collection systems, and a carbon-in-column (CIC) recovery plant for optimal metal extraction.',
                'image' => 'https://picsum.photos/seed/521/800/600',
                'capacity' => '20,000 TPD',
                'site_location' => 'Heap Leach Pad - Site B',
            ],
            [
                'title' => 'Tailings Management Facility',
                'description' => 'Engineered tailings storage facility designed with international best practices for long-term stability and environmental protection. Features include downstream construction, seepage collection, and water recycling systems.',
                'image' => 'https://picsum.photos/seed/942/800/600',
                'capacity' => '25 Million m³',
                'site_location' => 'TSF - Valley East',
            ],
        ];

        foreach ($operations as $op) {
            Operation::create($op);
        }
    }
}
