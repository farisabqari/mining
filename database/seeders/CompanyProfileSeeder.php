<?php

namespace Database\Seeders;

use App\Models\CompanyProfile;
use Illuminate\Database\Seeder;

class CompanyProfileSeeder extends Seeder
{
    public function run(): void
    {
        CompanyProfile::create([
            'company_name' => 'Nusantara Mining Corporation',
            'tagline' => 'Powering Indonesia\'s Future Through Sustainable Mining',
            'description' => 'Nusantara Mining Corporation is a premier Indonesian mining company committed to sustainable resource development. With operations spanning across the archipelago, we specialize in the exploration, extraction, and processing of precious metals, base metals, and industrial minerals. Our commitment to operational excellence, environmental stewardship, and community development sets us apart as a leader in the global mining industry.',
            'vision' => 'To be Indonesia\'s most respected and sustainable mining company, setting global standards in responsible resource development and creating lasting value for all stakeholders.',
            'mission' => '1. Operate with the highest standards of safety and environmental responsibility
2. Deliver superior value through operational excellence and innovation
3. Develop our people and empower local communities
4. Maintain transparent governance and ethical business practices
5. Contribute to Indonesia\'s economic growth and energy security',
            'hero_title' => 'Mining Indonesia\'s Future',
            'hero_subtitle' => 'Sustainable Resource Development for Generations to Come',
            'hero_video' => null,
            'logo' => null,
            'address' => 'Menara Nusantara, 25th Floor, Jl. Jenderal Sudirman Kav. 52-53, Jakarta 12190, Indonesia',
            'email' => 'corporate@nusantaramining.co.id',
            'phone' => '+62 21 5082 9000',
        ]);
    }
}
