<x-frontend-layout title="Areas of Expertise | E7 GROUP">
    <div class="w-full bg-[#0a111a] py-24 relative overflow-hidden">
        <div class="absolute inset-0 opacity-20 bg-[url('/images/mid_hero.png')] bg-cover bg-center mix-blend-overlay"></div>
        <div class="relative z-10 max-w-[1200px] mx-auto px-6 md:px-12 text-center lg:text-left">
            <p class="text-[#00d0d6] uppercase tracking-widest text-sm font-bold mb-4">What we do</p>
            <h1 class="text-4xl lg:text-6xl font-black text-white uppercase tracking-tight">Areas of Expertise</h1>
        </div>
    </div>

    <section class="max-w-[1200px] mx-auto px-6 md:px-12 py-24">
        <h2 class="text-4xl md:text-5xl font-black mb-16 text-center tracking-tight text-gray-900 uppercase">Our Business Units</h2>
        
        @php
            $areas = \App\Models\ExpertiseArea::all();
            $withImage = $areas->whereNotNull('image');
            $withoutImage = $areas->whereNull('image');
        @endphp

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 gap-y-16">
            
            @foreach($withImage as $area)
            <div class="group">
                <div class="aspect-[16/9] w-full overflow-hidden mb-6 relative">
                    <img src="{{ $area->image }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="{{ $area->title }}">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
                        <h3 class="text-3xl font-bold text-white uppercase tracking-wider">{{ $area->title }}</h3>
                    </div>
                </div>
                <p class="text-gray-700 leading-relaxed text-lg">
                    {{ $area->description_1 }}
                </p>
                @if($area->description_2)
                <p class="text-gray-700 leading-relaxed text-lg mt-2">
                    {{ $area->description_2 }}
                </p>
                @endif
            </div>
            @endforeach

            @if($withoutImage->count() > 0)
            <div class="flex flex-col justify-center space-y-12 pl-0 lg:pl-12">
                @foreach($withoutImage as $area)
                <div class="border-l-4 border-[#00d0d6] pl-6 bg-gray-50 py-6 pr-6 rounded">
                    <h3 class="text-2xl font-bold mb-3 uppercase tracking-wide">{{ $area->title }}</h3>
                    <p class="text-gray-700 leading-relaxed">
                        {{ $area->description_1 }}
                    </p>
                    @if($area->description_2)
                    <p class="text-gray-700 leading-relaxed mt-2">
                        {{ $area->description_2 }}
                    </p>
                    @endif
                </div>
                @endforeach
            </div>
            @endif

        </div>
    </section>
</x-frontend-layout>
