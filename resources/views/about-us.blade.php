<x-frontend-layout title="About Us | E7 GROUP">
    <div class="w-full bg-[#0a111a] py-24 relative overflow-hidden">
        <div class="absolute inset-0 opacity-20 bg-[url('/images/hero.png')] bg-cover bg-center mix-blend-overlay"></div>
        <div class="relative z-10 max-w-[1200px] mx-auto px-6 md:px-12 text-center lg:text-left">
            <p class="text-[#00d0d6] uppercase tracking-widest text-sm font-bold mb-4">Discover E7 Group</p>
            <h1 class="text-4xl lg:text-6xl font-black text-white uppercase tracking-tight">About Us</h1>
        </div>
    </div>

    <section class="max-w-[1000px] mx-auto px-6 md:px-12 py-20">
        @php
            $about = \App\Models\AboutSection::first();
        @endphp
        <h2 class="text-3xl lg:text-4xl font-bold mb-8 text-[#0a111a] uppercase">{{ $about->about_us_heading }}</h2>
        <div class="prose prose-lg text-gray-700 max-w-none">
            <p class="leading-relaxed mb-6 font-medium text-xl text-gray-600">
                {!! nl2br(e($about->about_us_p1)) !!}
            </p>
            <p class="leading-relaxed mb-8 text-gray-800">
                {!! nl2br(e($about->about_us_p2)) !!}
            </p>
            
            <div class="bg-gray-50 border-l-4 border-[#00d0d6] p-8 my-10 rounded shadow-sm">
                <h3 class="text-2xl font-bold mb-3 text-black">{{ $about->about_us_highlight_title }}</h3>
                <p class="text-gray-700 leading-relaxed font-medium">
                    {!! nl2br(e($about->about_us_highlight_text)) !!}
                </p>
            </div>
            
            <div class="mt-12 overflow-hidden rounded shadow-2xl relative aspect-[21/9]">
                <img src="{{ $about->about_us_image ?? '/images/about.png' }}" class="w-full h-full object-cover">
            </div>
        </div>
    </section>
</x-frontend-layout>
