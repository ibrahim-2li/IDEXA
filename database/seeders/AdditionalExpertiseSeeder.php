<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExpertiseArea;

class AdditionalExpertiseSeeder extends Seeder
{
    public function run(): void
    {
        if(!ExpertiseArea::where('title', 'e7 Education')->exists()) {
            ExpertiseArea::create([
                'title' => 'e7 Education',
                'description_1' => 'Established in 2019 to provide UAE educational institutions with the best innovative products, solutions, and consultations to develop the educational system to globally competitive levels.',
                'link' => '/contact'
            ]);
        }
        
        if(!ExpertiseArea::where('title', 'Tawzea by e7')->exists()) {
            ExpertiseArea::create([
                'title' => 'Tawzea by e7',
                'description_1' => 'Delivers the next generation of distribution and logistics services, streamlining supply chains to maximize efficiency.',
                'link' => '/contact'
            ]);
        }
    }
}
