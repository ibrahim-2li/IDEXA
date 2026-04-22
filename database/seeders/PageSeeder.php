<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            [
                'title' => 'About Us',
                'slug' => 'about-us',
                'content' => '<div class="mb-8">
                    <h2 class="text-2xl font-bold mb-4 text-[#00d0d6]">INNOVATION AND EXCELLENCE IN EVERY SOLUTION</h2>
                    <p class="mb-4 text-gray-700 leading-relaxed">Based in Abu Dhabi, E7 Group builds on a legacy and strong track record of providing an innovative and diversified portfolio of printing, packaging, and distribution solutions that empower essential industries. They cater to local and global clients by leveraging cutting-edge technology and best-in-class practices.</p>
                    <p class="mb-4 text-gray-700 leading-relaxed"><strong>Integrated Ecosystem:</strong> We champion an "All-in-One Partner" approach, offering a fully integrated ecosystem from secure identity systems to high-quality printing, branding, packaging, and logistics. This seamless approach is designed to ensure every component works efficiently and securely together, serving both government institutions and businesses.</p>
                </div>'
            ],
            [
                'title' => 'Areas of expertise',
                'slug' => 'areas-of-expertise',
                'content' => '<div class="mb-8">
                    <h2 class="text-3xl font-bold mb-8 text-[#00d0d6]">Our Business Units</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-gray-50 p-6 rounded relative border-t-4 border-[#00d0d6]">
                            <h3 class="text-xl font-bold mb-3 uppercase tracking-wide">e7 Security</h3>
                            <p class="text-gray-700 mb-2">Leverages the latest in secure printing to protect sensitive personal and corporate data. It serves sectors including banking, government, telecom, retail, and transport with advanced security and personalization solutions.</p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded relative border-t-4 border-[#00d0d6]">
                            <h3 class="text-xl font-bold mb-3 uppercase tracking-wide">e7 Packaging</h3>
                            <p class="text-gray-700 mb-2">Focuses on innovative and environmentally friendly solutions using state-of-the-art technologies to meet the global movement for sustainable production.</p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded relative border-t-4 border-[#00d0d6]">
                            <h3 class="text-xl font-bold mb-3 uppercase tracking-wide">e7 Printing</h3>
                            <p class="text-gray-700 mb-2">A regional powerhouse and trusted partner for publishing sectors (newspapers, magazines, books), out-of-home print projects, and educational materials.</p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded relative border-t-4 border-[#00d0d6]">
                            <h3 class="text-xl font-bold mb-3 uppercase tracking-wide">e7 Education</h3>
                            <p class="text-gray-700 mb-2">Established in 2019 to provide UAE educational institutions with the best innovative products, solutions, and consultations to develop the educational system to globally competitive levels.</p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded relative border-t-4 border-[#00d0d6]">
                            <h3 class="text-xl font-bold mb-3 uppercase tracking-wide">Tawzea by e7</h3>
                            <p class="text-gray-700 mb-2">Delivers the next generation of distribution and logistics services, streamlining supply chains to maximize efficiency.</p>
                        </div>
                    </div>
                </div>'
            ],
            [
                'title' => 'Our commitment',
                'slug' => 'our-commitment',
                'content' => '<div class="mb-8">
                    <h2 class="text-2xl font-bold mb-6 text-[#00d0d6]">Our ESG Approach</h2>
                    <p class="mb-6 text-gray-700 text-lg">The group is committed to implementing robust ESG standards, fully aligned with the UAE\'s sustainability targets. We focus on building a circular economy, enhancing energy efficiency, and developing a skilled workforce.</p>
                    <blockquote class="italic text-xl text-gray-600 border-l-4 border-[#00d0d6] bg-gray-50 p-8 rounded mb-6">
                        "Sustainable operations are not only a corporate responsibility but a fundamental obligation to the people we serve and the planet we call home."<br>
                        <span class="text-sm font-semibold mt-4 block uppercase tracking-widest text-black">— Esteban Gómez Nadal, Group CEO</span>
                    </blockquote>
                    <p class="mb-4 text-gray-700 text-lg"><strong>ESG Pillars:</strong> The strategy is built around three core pillars: Environment, Social Development, and Governance.</p>
                </div>'
            ],
            [
                'title' => 'Investor relations',
                'slug' => 'investor-relations',
                'content' => '<div class="mb-8 text-center max-w-3xl mx-auto py-12">
                    <h2 class="text-4xl font-bold mb-6 text-[#00d0d6]">Investor Relations</h2>
                    <p class="mb-8 text-gray-700 text-xl leading-relaxed">E7 Group was established in 2006 and is listed on the Abu Dhabi Securities Exchange (Ticker: <strong>e7</strong>). The group is committed to enhancing shareholder value through a transformation journey that drives a culture of excellence and innovation across its five integrated business units.</p>
                    <a href="#" class="inline-flex px-8 py-3 border border-[#00d0d6] text-[#00d0d6] bg-transparent hover:bg-[#00d0d6] hover:text-white transition-all rounded text-sm uppercase tracking-widest font-bold">Download Annual Report</a>
                </div>'
            ],
            [
                'title' => 'Careers',
                'slug' => 'careers',
                'content' => '<div class="mb-8">
                    <h2 class="text-3xl font-bold mb-6 text-[#00d0d6]">Why Work with Us</h2>
                    <p class="mb-8 text-gray-700 text-lg">The group describes itself as a multidisciplinary powerhouse where culture is defined by ownership, bold thinking, and meaningful work.</p>
                    
                    <h3 class="text-xl font-bold mb-6 uppercase tracking-wider border-b pb-2">Our Value Proposition:</h3>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-700 text-lg">
                        <li class="bg-gray-50 p-6 shadow-sm border border-gray-100 rounded">
                            <strong class="block mb-2 text-black">Real Impact:</strong> Employees work at the heart of national infrastructure (identity, education, logistics).
                        </li>
                        <li class="bg-gray-50 p-6 shadow-sm border border-gray-100 rounded">
                            <strong class="block mb-2 text-black">Fast Growth:</strong> The scaling nature of the company creates opportunities for rapid professional development and promotions.
                        </li>
                        <li class="bg-gray-50 p-6 shadow-sm border border-gray-100 rounded">
                            <strong class="block mb-2 text-black">Purpose-Driven Teams:</strong> A collaborative environment for builders and problem-solvers who move fast and stay accountable.
                        </li>
                        <li class="bg-gray-50 p-6 shadow-sm border border-gray-100 rounded">
                            <strong class="block mb-2 text-black">Excellence:</strong> A culture that values high standards and provides the resources necessary to achieve them.
                        </li>
                    </ul>
                </div>'
            ],
        ];

        foreach ($pages as $pageData) {
            Page::updateOrCreate(
                ['slug' => $pageData['slug']],
                [
                    'title' => $pageData['title'],
                    'content' => $pageData['content']
                ]
            );
        }
    }
}
