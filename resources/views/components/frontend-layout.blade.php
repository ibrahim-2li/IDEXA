<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'E7 GROUP' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="antialiased bg-white text-gray-900 font-sans selection:bg-[#00d0d6] selection:text-white pb-0 m-0 overflow-x-hidden flex flex-col min-h-screen">
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full z-50 bg-black/95 text-white border-b border-white/10 transition-all shadow-xl">
        <div class="w-full px-6 md:px-12 h-20 flex items-center justify-between">
            <!-- Logo -->
            <a href="/" class="flex items-center gap-1 group">
                <span class="text-[#00d0d6] text-[1.7rem] font-bold tracking-tighter group-hover:text-white transition-colors">e7</span>
                <span class="text-white text-[1.1rem] font-medium tracking-tight group-hover:text-[#00d0d6] transition-colors mt-[2px]">GROUP</span>
            </a>
            
            <!-- Desktop Links -->
            <div class="hidden lg:flex items-center gap-8 text-[13px] font-medium tracking-wide">
                <a href="/about-us" class="hover:text-[#00d0d6] {{ request()->is('about-us') ? 'text-[#00d0d6]' : '' }} hover:-translate-y-0.5 transition-all">About us</a>
                <a href="/areas-of-expertise" class="hover:text-[#00d0d6] {{ request()->is('areas-of-expertise') ? 'text-[#00d0d6]' : '' }} hover:-translate-y-0.5 transition-all">Areas of expertise</a>
                <a href="/our-commitment" class="hover:text-[#00d0d6] {{ request()->is('our-commitment') ? 'text-[#00d0d6]' : '' }} hover:-translate-y-0.5 transition-all">Our commitment</a>
                <a href="/investor-relations" class="hover:text-[#00d0d6] {{ request()->is('investor-relations') ? 'text-[#00d0d6]' : '' }} hover:-translate-y-0.5 transition-all">Investor relations</a>
                <a href="/careers" class="hover:text-[#00d0d6] {{ request()->is('careers') ? 'text-[#00d0d6]' : '' }} hover:-translate-y-0.5 transition-all">Careers</a>
            </div>

            <!-- Right Actions -->
            <div class="flex items-center gap-6">
                <!-- Search Icon -->
                <button class="hover:text-[#00d0d6] transition-colors">
                    <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path></svg>
                </button>
                <a href="/contact" class="hidden sm:inline-flex items-center justify-center px-6 py-[0.6rem] border border-[#00d0d6] text-white hover:bg-[#00d0d6]/10 transition-all text-sm font-medium tracking-wide">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Page Content Slot -->
    <main class="flex-grow pt-20">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-black text-gray-400 py-16 lg:py-24 text-sm mt-auto">
        <div class="max-w-[1200px] mx-auto px-6 md:px-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">
            <div class="flex flex-col gap-6">
                <a href="/" class="flex items-center gap-1 group w-max">
                    <span class="text-[#00d0d6] text-[2rem] font-bold tracking-tighter">e7</span>
                    <span class="text-white text-[1.2rem] font-medium tracking-tight mt-[3px]">GROUP</span>
                </a>
                <p class="text-gray-500 leading-relaxed max-w-xs text-[13px]">
                    Trusted solutions for your business across the UAE. We provide seamless integration from identity security to packaging and printing.
                </p>
            </div>
            
            <div class="flex flex-col gap-4">
                <h4 class="text-white font-semibold uppercase tracking-wide mb-2">Company</h4>
                <a href="/about-us" class="hover:text-white transition-colors w-max">About us</a>
                <a href="/areas-of-expertise" class="hover:text-white transition-colors w-max">Areas of expertise</a>
                <a href="/our-commitment" class="hover:text-white transition-colors w-max">Our commitment</a>
            </div>

            <div class="flex flex-col gap-4">
                <h4 class="text-white font-semibold uppercase tracking-wide mb-2">Connect</h4>
                <a href="/investor-relations" class="hover:text-white transition-colors w-max">Investor relations</a>
                <a href="/careers" class="hover:text-white transition-colors w-max">Careers</a>
                <a href="/contact" class="hover:text-white transition-colors w-max">Contact us</a>
            </div>

            <div class="flex flex-col gap-4">
                <h4 class="text-white font-semibold uppercase tracking-wide mb-2">Address</h4>
                <p class="text-gray-500 leading-relaxed text-[13px]">
                    Abu Dhabi<br>
                    United Arab Emirates<br>
                    PO Box 123456
                </p>
                <div class="flex items-center gap-4 mt-4">
                    <!-- Social icons placeholders -->
                    <a href="#" class="text-gray-500 hover:text-[#00d0d6] transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-[#00d0d6] transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="max-w-[1200px] mx-auto px-6 md:px-12 mt-16 pt-8 border-t border-gray-800 flex flex-col md:flex-row items-center justify-between gap-4 text-[13px]">
            <p>&copy; 2026 E7 Group PJSC (ADX: E7). All rights reserved.</p>
            <div class="flex items-center gap-6">
                <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
            </div>
        </div>
    </footer>
</body>
</html>
