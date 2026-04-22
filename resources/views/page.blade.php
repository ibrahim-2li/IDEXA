<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $page->title }} - E7 GROUP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Inter', sans-serif; }
        .page-content h1 { font-size: 2.25rem; font-weight: 700; margin-bottom: 1rem; color: #111827; }
        .page-content h2 { font-size: 1.875rem; font-weight: 600; margin-top: 2rem; margin-bottom: 0.75rem; color: #1f2937; }
        .page-content p { margin-bottom: 1rem; color: #374151; line-height: 1.7; }
        .page-content a { color: #00d0d6; text-decoration: underline; }
        .page-content ul { list-style-type: disc; margin-left: 1.5rem; margin-bottom: 1rem; }
        .page-content blockquote { border-left: 4px solid #00d0d6; padding-left: 1rem; font-style: italic; color: #4b5563; }
    </style>
</head>
<body class="antialiased bg-white text-gray-900 font-sans selection:bg-[#00d0d6] selection:text-white pb-0 m-0 overflow-x-hidden">
    <!-- Navbar (simplified for subpages) -->
    <nav class="w-full z-50 bg-black/95 text-white border-b border-white/10">
        <div class="w-full px-6 md:px-12 h-20 flex items-center justify-between">
            <a href="/" class="flex items-center gap-1 group">
                <span class="text-[#00d0d6] text-[1.7rem] font-bold tracking-tighter group-hover:text-white transition-colors">e7</span>
                <span class="text-white text-[1.1rem] font-medium tracking-tight group-hover:text-[#00d0d6] transition-colors mt-[2px]">GROUP</span>
            </a>
            <div class="hidden lg:flex items-center gap-8 text-[13px] font-medium tracking-wide">
                <a href="/" class="hover:text-[#00d0d6] transition-all">Home</a>
                <a href="#" class="hover:text-[#00d0d6] transition-all">About us</a>
                <a href="#" class="hover:text-[#00d0d6] transition-all">Areas of expertise</a>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="w-full bg-gray-50 py-16 md:py-24 border-b border-gray-200">
        <div class="max-w-[1000px] mx-auto px-6 md:px-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 tracking-tight">{{ $page->title }}</h1>
        </div>
    </header>

    <!-- Page Content -->
    <main class="max-w-[1000px] mx-auto px-6 md:px-12 py-16 lg:py-24 page-content">
        {!! $page->content !!}
    </main>

    <!-- Footer -->
    <footer class="bg-black text-gray-400 py-12 text-sm mt-auto">
        <div class="max-w-[1200px] mx-auto px-6 md:px-12 text-center">
            <p>&copy; {{ date('Y') }} E7 Group PJSC (ADX: E7). All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
