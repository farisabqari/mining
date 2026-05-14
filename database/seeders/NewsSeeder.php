<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        $news = [
            [
                'title' => 'Nusantara Mining Achieves Record Production in Q3 2025',
                'slug' => 'record-production-q3-2025',
                'content' => "Nusantara Mining Corporation has announced record production figures for the third quarter of 2025, marking a significant milestone in the company's growth trajectory.\n\nThe company reported a 25% increase in gold production and a 30% increase in copper production compared to the same period last year, driven by operational improvements and the successful ramp-up of new mining areas.\n\n\"This outstanding performance is a testament to our team's dedication and the effectiveness of our operational excellence initiatives,\" said the CEO. \"We remain committed to sustainable growth while maintaining the highest standards of safety and environmental stewardship.\"\n\nThe record production was achieved while maintaining industry-leading safety metrics, with zero lost-time incidents during the quarter.",
                'thumbnail' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=600&q=80',
                'published_at' => '2025-10-15 09:00:00',
            ],
            [
                'title' => 'New Sustainability Initiative Launched for 2026',
                'slug' => 'sustainability-initiative-2026',
                'content' => "Nusantara Mining Corporation has launched a comprehensive sustainability initiative for 2026, reinforcing its commitment to environmental stewardship and community development.\n\nThe initiative includes a target to reduce carbon emissions by 30% by 2030, a commitment to zero waste discharge from all operations, and a $50 million investment in community development programs.\n\nKey components of the initiative include:\n\n- Transition to renewable energy sources for 40% of power requirements\n- Implementation of advanced water recycling systems\n- Reforestation of 5,000 hectares of post-mining land\n- Establishment of vocational training centers in mining communities",
                'thumbnail' => 'https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?w=600&q=80',
                'published_at' => '2025-11-20 10:30:00',
            ],
            [
                'title' => 'Strategic Partnership with Global Mining Technology Leader',
                'slug' => 'partnership-global-mining-technology',
                'content' => "Nusantara Mining Corporation has entered into a strategic partnership with a global mining technology leader to accelerate digital transformation across its operations.\n\nThe partnership will focus on implementing autonomous mining systems, AI-powered predictive maintenance, and real-time operational analytics across all major sites.\n\n\"This partnership represents a significant step forward in our digitalization journey,\" explained the Chief Technology Officer. \"These technologies will enhance safety, improve productivity, and reduce our environmental footprint.\"\n\nThe implementation is expected to be completed over the next 18 months across all operational sites.",
                'thumbnail' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=600&q=80',
                'published_at' => '2025-09-05 14:00:00',
            ],
            [
                'title' => 'Community Development Program Reaches 50,000 Beneficiaries',
                'slug' => 'community-development-50000-beneficiaries',
                'content' => "Nusantara Mining Corporation's community development program has reached a milestone of 50,000 beneficiaries across its operational areas.\n\nThe program, which focuses on education, healthcare, and economic empowerment, has been recognized as one of the most comprehensive corporate social responsibility initiatives in Indonesia's mining sector.\n\nAchievements include:\n- Construction of 25 schools\n- Establishment of 10 healthcare facilities\n- Training and employment of 5,000 local residents\n- Support for 2,000 small and medium enterprises\n- Scholarship programs for 1,000 students",
                'thumbnail' => 'https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=600&q=80',
                'published_at' => '2025-08-12 11:00:00',
            ],
            [
                'title' => 'Safety Milestone: 15 Million Hours Without Lost-Time Incident',
                'slug' => 'safety-milestone-15-million-hours',
                'content' => "Nusantara Mining Corporation has achieved an extraordinary safety milestone of 15 million working hours without a lost-time incident across all operations.\n\nThis achievement reflects the company's unwavering commitment to safety excellence and its comprehensive safety management system.\n\n\"Safety is our number one value,\" stated the Director of Safety & Compliance. \"This milestone belongs to every employee and contractor who has made safety their personal commitment every single day.\"\n\nThe company has invested significantly in safety training, hazard identification systems, and safety culture programs to achieve this result.",
                'thumbnail' => 'https://images.unsplash.com/photo-1558618666-fcd25c85f82e?w=600&q=80',
                'published_at' => '2025-07-22 08:00:00',
            ],
            [
                'title' => 'Annual ESG Report Highlights Progress in Sustainable Mining',
                'slug' => 'annual-esg-report-2025',
                'content' => "Nusantara Mining Corporation has published its annual Environmental, Social, and Governance (ESG) report, highlighting significant progress in sustainable mining practices.\n\nKey highlights from the report include:\n\nEnvironmental:\n- 20% reduction in greenhouse gas emissions intensity\n- 95% water recycling rate\n- 500 hectares of rehabilitated land\n\nSocial:\n- $30 million invested in community programs\n- 60% local employment rate\n- Zero human rights incidents\n\nGovernance:\n- 100% completion of ethics training\n- Enhanced transparency in reporting\n- Strengthened anti-corruption measures",
                'thumbnail' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=600&q=80',
                'published_at' => '2025-06-15 09:00:00',
            ],
        ];

        foreach ($news as $item) {
            News::create($item);
        }
    }
}
