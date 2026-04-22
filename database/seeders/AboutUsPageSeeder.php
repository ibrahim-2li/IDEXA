<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutSection;

class AboutUsPageSeeder extends Seeder
{
    public function run(): void
    {
        $about = AboutSection::first();
        if ($about && !$about->about_us_heading) {
            $about->update([
                'about_us_heading' => 'INNOVATION AND EXCELLENCE IN EVERY SOLUTION',
                'about_us_p1' => 'Based in Abu Dhabi, E7 Group builds on a legacy and strong track record of providing an innovative and diversified portfolio of printing, packaging, and distribution solutions that empower essential industries.',
                'about_us_p2' => 'We cater to local and global clients by leveraging cutting-edge technology and best-in-class practices. Our legacy is built on a foundation of reliability and precision.',
                'about_us_highlight_title' => 'Integrated Ecosystem',
                'about_us_highlight_text' => 'We champion an "All-in-One Partner" approach, offering a fully integrated ecosystem from secure identity systems to high-quality printing, branding, packaging, and logistics. This seamless approach is designed to ensure every component works efficiently and securely together, serving both government institutions and businesses.'
            ]);
        }
    }
}
