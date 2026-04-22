<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E7 GROUP Clone</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body
    class="antialiased bg-white text-gray-900 font-sans selection:bg-[#00d0d6] selection:text-white pb-0 m-0 overflow-x-hidden">
    <!-- Navbar -->
    <nav
        class="fixed top-0 left-0 w-full z-50 bg-black/90 backdrop-blur-md text-white border-b border-white/10 transition-all">
        <div class="w-full px-6 md:px-12 h-20 flex items-center justify-between">
            <!-- Logo -->
            <a href="/" class="flex items-center gap-1 group">
                <span
                    class="text-[#00d0d6] text-[1.7rem] font-bold tracking-tighter group-hover:text-white transition-colors">e7</span>
                <span
                    class="text-white text-[1.1rem] font-medium tracking-tight group-hover:text-[#00d0d6] transition-colors mt-[2px]">GROUP</span>
            </a>

            <!-- Desktop Links -->
            <div class="hidden lg:flex items-center gap-8 text-[13px] font-medium tracking-wide">
                <a href="/about-us" class="hover:text-[#00d0d6] hover:-translate-y-0.5 transition-all">About us</a>
                <a href="/areas-of-expertise" class="hover:text-[#00d0d6] hover:-translate-y-0.5 transition-all">Areas
                    of
                    expertise</a>
                <a href="/our-commitment" class="hover:text-[#00d0d6] hover:-translate-y-0.5 transition-all">Our
                    commitment</a>
                <a href="/investor-relations"
                    class="hover:text-[#00d0d6] hover:-translate-y-0.5 transition-all">Investor
                    relations</a>
                <a href="/careers" class="hover:text-[#00d0d6] hover:-translate-y-0.5 transition-all">Careers</a>
            </div>

            <!-- Right Actions -->
            <div class="flex items-center gap-6">
                <!-- Search Icon -->
                <button class="hover:text-[#00d0d6] transition-colors">
                    <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                    </svg>
                </button>
                <a href="/contact"
                    class="hidden sm:inline-flex items-center justify-center px-6 py-[0.6rem] border border-[#00d0d6] text-white hover:bg-[#00d0d6]/10 transition-all text-sm font-medium tracking-wide">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative h-screen min-h-[600px] w-full flex items-end">
        <div class="absolute inset-0 z-0">
            <img src="/images/hero.png" alt="Industrial Printer Background" class="w-full h-full object-cover" />
            <div
                class="absolute inset-0 bg-gradient-to-t from-[#0a111a] via-[#0a111a]/60 to-black/30 mix-blend-multiply">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-transparent to-transparent"></div>
        </div>

        <div class="relative z-10 w-full px-6 md:px-12 pb-24 md:pb-32">
            <h1
                class="text-4xl md:text-6xl lg:text-[5.5rem] font-black text-white max-w-[1200px] leading-[1.05] tracking-tight uppercase">
                TRUSTED <br />
                SOLUTIONS FOR <br />
                YOUR BUSINESS <br />
                ACROSS THE UAE
            </h1>
        </div>
    </header>

    <!-- About Section -->
    <section class="max-w-[1200px] mx-auto px-6 md:px-12 py-24 lg:py-32">
        <p class="text-[13px] font-medium text-gray-800 mb-8 tracking-wide">About us</p>
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_0.9fr] gap-16 lg:gap-24 items-start">
            <div class="flex flex-col pr-0 lg:pr-8">
                <h2 class="text-[2rem] lg:text-[2.6rem] font-medium text-gray-900 tracking-tight leading-[1.1] mb-8">
                    From identity solutions to printing, packaging and delivery, we provide seamless integrated
                    solutions
                </h2>

                <p class="text-base lg:text-[15px] text-gray-800 leading-relaxed mb-6 font-normal">
                    e7 Group is a driving force in progress, building long-term partnerships with the world's leading
                    companies and governments. We go beyond solutions—we redefine industries, set new standards, and
                    create a more secure, connected, and dynamic future. Innovation drives us. With a proven track
                    record of quality, reliability, and cutting-edge expertise, we anticipate the evolving needs of
                    businesses and institutions—keeping them ahead in a rapidly changing world.
                </p>
                <p class="text-base lg:text-[15px] text-gray-800 leading-relaxed mb-10 font-normal">
                    From identity solutions and secure printing to packaging, education, and logistics, our seamless,
                    integrated services work effortlessly together—designed for maximum efficiency and always focused on
                    our clients' success.
                </p>

                <div>
                    <a href="#"
                        class="inline-flex items-center justify-center px-8 py-[0.7rem] border border-[#00d0d6] text-[#00d0d6] hover:bg-[#00d0d6] hover:text-white transition-all text-sm font-medium rounded-sm tracking-wide group">
                        View more
                    </a>
                </div>
            </div>
            <div class="relative w-full aspect-[4/3] lg:aspect-auto lg:h-[480px] overflow-hidden group">
                <img src="/images/about.png" alt="Printing Rollers"
                    class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" />
            </div>
        </div>
    </section>

    <!-- Mid Hero Section -->
    <section
        class="relative h-[60vh] min-h-[500px] lg:h-[70vh] w-full flex items-center justify-center text-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="/images/mid_hero.png" alt="Machinery" class="w-full h-full object-cover scale-105" />
            <div class="absolute inset-0 bg-[#0f1f2e]/60 mix-blend-multiply border-y-8 border-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/50 via-gray-900/70 to-gray-900/50"></div>
        </div>

        <div class="relative z-10 px-6">
            <h2
                class="text-[2.5rem] md:text-[4.5rem] lg:text-[6.5rem] font-black text-white tracking-tight uppercase leading-[0.95] drop-shadow-2xl">
                SEAMLESS <br />
                INTEGRATION <br />
                AT YOUR <br />
                SERVICE
            </h2>
        </div>
    </section>

    <!-- Areas of Expertise -->
    <section class="max-w-[1200px] mx-auto px-6 md:px-12 py-24 lg:py-32">
        <div class="flex justify-between items-end mb-12 border-b border-gray-200 pb-5">
            <h2 class="text-3xl lg:text-[2.2rem] font-medium tracking-tight text-gray-900 leading-none">Areas of
                expertise</h2>
            <a href="#"
                class="text-[13px] font-medium text-gray-900 hover:text-[#00d0d6] transition-colors flex items-center gap-2 tracking-wide">
                See all
                <svg class="w-[14px] h-[14px] text-[#00d0d6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 mb-16">
            <!-- Card 1 -->
            <div class="group flex flex-col h-full bg-white cursor-pointer relative overflow-hidden">
                <div class="overflow-hidden aspect-[1.4] w-full mb-6">
                    <img src="/images/security.png" alt="Security Card"
                        class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" />
                </div>
                <h3 class="text-lg font-bold uppercase tracking-wide mb-4 text-gray-900">SECURITY</h3>
                <p class="text-gray-700 text-[14px] leading-[1.6] mb-4 flex-grow">
                    e7 Security leverages the latest in secure printing to protect sensitive personal and corporate
                    data. We serve diverse sectors, including banking, government, telecom, retail, hospitality, and
                    transport, delivering advanced security and personalization solutions.
                </p>
                <p class="text-gray-700 text-[14px] leading-[1.6] mb-8">
                    As a leader in secure printing and identity management, we support governments and global businesses
                    with reliable, end-to-end data protection solutions.
                </p>
                <div>
                    <a href="#"
                        class="inline-flex items-center justify-center px-6 py-2.5 border border-[#00d0d6] text-[#00d0d6] hover:bg-[#00d0d6] hover:text-white transition-all text-[13px] font-medium tracking-wide">Contact
                        Us</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="group flex flex-col h-full bg-white cursor-pointer relative overflow-hidden">
                <div class="overflow-hidden aspect-[1.4] w-full mb-6">
                    <img src="/images/packaging.png" alt="Packaging"
                        class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" />
                </div>
                <h3 class="text-lg font-bold uppercase tracking-wide mb-4 text-gray-900">PACKAGING</h3>
                <p class="text-gray-700 text-[14px] leading-[1.6] mb-8 flex-grow">
                    Like all industries in the 21st century, print needs to adapt to answer the future demands of
                    clients and meet the global movement for more sustainable production. Packaging is ahead of the
                    curve, using state-of-the-art technologies to produce innovative and environmentally friendly
                    solutions to a diverse range of packaging.
                </p>
                <div>
                    <a href="#"
                        class="inline-flex items-center justify-center px-6 py-2.5 border border-[#00d0d6] text-[#00d0d6] hover:bg-[#00d0d6] hover:text-white transition-all text-[13px] font-medium tracking-wide">Contact
                        Us</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="group flex flex-col h-full bg-white cursor-pointer relative overflow-hidden">
                <div class="overflow-hidden aspect-[1.4] w-full mb-6">
                    <img src="/images/printing.png" alt="Printing"
                        class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" />
                </div>
                <h3 class="text-lg font-bold uppercase tracking-wide mb-4 text-gray-900">PRINTING</h3>
                <p class="text-gray-700 text-[14px] leading-[1.6] mb-8 flex-grow">
                    e7 Printing is a long-established regional powerhouse, a trusted partner across a range of
                    publishing sectors that include newspapers, magazines and books, as well as large scale out-of-home
                    print projects and educational materials. We constantly upgrade our print equipment so all our
                    clients can rest assured that we'll always deliver the world-class premium service their print
                    projects deserve.
                </p>
                <div>
                    <a href="#"
                        class="inline-flex items-center justify-center px-6 py-2.5 border border-[#00d0d6] text-[#00d0d6] hover:bg-[#00d0d6] hover:text-white transition-all text-[13px] font-medium tracking-wide">Contact
                        Us</a>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between border-t border-gray-200 pt-5">
            <div class="flex gap-4">
                <button
                    class="text-[#00d0d6] hover:text-[#00b0b5] transition-colors flex items-center justify-center h-8 w-8 hover:-translate-x-1 duration-200">
                    <svg class="w-[22px] h-[22px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                </button>
                <button
                    class="text-[#00d0d6] hover:text-[#00b0b5] transition-colors flex items-center justify-center h-8 w-8 hover:translate-x-1 duration-200">
                    <svg class="w-[22px] h-[22px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </button>
            </div>
            <div class="text-[13px] font-semibold tracking-widest">
                <span class="text-gray-900">01</span> <span class="text-gray-300 mx-1">/</span> <span
                    class="text-gray-400">05</span>
            </div>
        </div>
    </section>

    <!-- Bottom Hero Section -->
    <section
        class="relative h-[60vh] min-h-[500px] lg:h-[70vh] w-full flex flex-col items-center justify-center text-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="/images/mid_hero.png" alt="Machinery" class="w-full h-full object-cover scale-100" />
            <div class="absolute inset-0 bg-blue-950/20 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-gray-900/70"></div>
        </div>

        <div class="relative z-10 px-6 max-w-5xl flex flex-col items-center mt-8">
            <h2
                class="text-4xl md:text-6xl lg:text-[6rem] font-black text-white tracking-tight uppercase leading-[0.9] mb-12 drop-shadow-2xl">
                PIONEERING <br />
                THE FUTURE <br />
                WE WANT TO <br />
                SEE
            </h2>
            <div class="mt-4">
                <a href="#"
                    class="inline-flex items-center justify-center px-10 py-[1rem] border border-[#00d0d6]/70 bg-black/30 backdrop-blur-sm text-white hover:bg-[#00d0d6] hover:border-[#00d0d6] transition-all text-sm font-semibold tracking-wider rounded-sm shadow-xl hover:shadow-[#00d0d6]/20 group">
                    View more
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-gray-400 py-16 lg:py-24 text-sm">
        <div
            class="max-w-[1200px] mx-auto px-6 md:px-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">
            <div class="flex flex-col gap-6">
                <a href="/" class="flex items-center gap-1 group w-max">
                    <span class="text-[#00d0d6] text-[2rem] font-bold tracking-tighter">e7</span>
                    <span class="text-white text-[1.2rem] font-medium tracking-tight mt-[3px]">GROUP</span>
                </a>
                <p class="text-gray-500 leading-relaxed max-w-xs text-[13px]">
                    Trusted solutions for your business across the UAE. We provide seamless integration from identity
                    security to packaging and printing.
                </p>
            </div>

            <div class="flex flex-col gap-4">
                <h4 class="text-white font-semibold uppercase tracking-wide mb-2">Company</h4>
                <a href="#" class="hover:text-white transition-colors w-max">Dashboard</a>
                <a href="#" class="hover:text-white transition-colors w-max">About us</a>
                <a href="#" class="hover:text-white transition-colors w-max">Areas of expertise</a>
                <a href="#" class="hover:text-white transition-colors w-max">Our commitment</a>
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
                        <!-- Twitter/X -->
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-[#00d0d6] transition-colors">
                        <!-- LinkedIn -->
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div
            class="max-w-[1200px] mx-auto px-6 md:px-12 mt-16 pt-8 border-t border-gray-800 flex flex-col md:flex-row items-center justify-between gap-4 text-[13px]">
            <p>&copy; 2026 E7 Group PJSC (ADX: E7). All rights reserved.</p>
            <div class="flex items-center gap-6">
                <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
            </div>
        </div>
    </footer>
</body>

</html>