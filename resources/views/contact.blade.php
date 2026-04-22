<x-frontend-layout title="Contact Us | E7 GROUP">
    <div class="w-full bg-[#0a111a] py-24 relative overflow-hidden">
        <div class="absolute inset-0 opacity-20 bg-[url('/images/hero.png')] bg-cover bg-center mix-blend-overlay"></div>
        <div class="relative z-10 max-w-[1200px] mx-auto px-6 md:px-12 text-center lg:text-left">
            <p class="text-[#00d0d6] uppercase tracking-widest text-sm font-bold mb-4">Get in touch</p>
            <h1 class="text-4xl lg:text-6xl font-black text-white uppercase tracking-tight">Contact Us</h1>
        </div>
    </div>

    <section class="max-w-[1200px] mx-auto px-6 md:px-12 py-24">
        @php
            $settings = \App\Models\SiteSetting::first() ?? new \App\Models\SiteSetting([
                'site_name' => 'E7 GROUP',
                'contact_email' => 'info@e7group.ae',
                'contact_phone' => '+971 2 000 0000',
                'address' => "Abu Dhabi\nUnited Arab Emirates\nPO Box 123456",
            ]);
        @endphp
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_1fr] gap-16 lg:gap-24">
            
            <!-- Contact Information -->
            <div>
                <h2 class="text-3xl font-black mb-8 text-black uppercase tracking-tight">Reach out to us</h2>
                <p class="text-gray-700 text-lg leading-relaxed mb-8">
                    Whether you are an aspiring client, looking for investment opportunities, or seeking general information, we want to hear from you.
                </p>

                <div class="space-y-8">
                    <div>
                        <h4 class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-2">Corporate Headquarters</h4>
                        <p class="text-black font-semibold">{{ current(explode(' ', $settings->site_name, 2)) }} Group PJSC</p>
                        <p class="text-gray-600">{!! nl2br(e($settings->address)) !!}</p>
                    </div>

                    <div>
                        <h4 class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-2">General Inquiries</h4>
                        <p class="text-[#00d0d6] hover:text-black transition-colors font-medium"><a href="mailto:{{ $settings->contact_email }}">{{ $settings->contact_email }}</a></p>
                        <p class="text-gray-600">{{ $settings->contact_phone }}</p>
                    </div>

                    <div>
                        <h4 class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-2">Investor Relations</h4>
                        <p class="text-[#00d0d6] hover:text-black transition-colors font-medium">ir@e7group.ae</p>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="bg-gray-50 p-8 rounded border-t-4 border-[#00d0d6] shadow-sm">
                @if (session('success'))
                    <div class="p-4 mb-6 text-sm text-green-800 rounded bg-green-50" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-2">Full Name *</label>
                            <input type="text" name="name" required class="w-full border-gray-300 rounded shadow-sm focus:border-[#00d0d6] focus:ring-[#00d0d6]" value="{{ old('name') }}">
                            @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-2">Email Address *</label>
                            <input type="email" name="email" required class="w-full border-gray-300 rounded shadow-sm focus:border-[#00d0d6] focus:ring-[#00d0d6]" value="{{ old('email') }}">
                            @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-2">Phone Number</label>
                            <input type="text" name="phone" class="w-full border-gray-300 rounded shadow-sm focus:border-[#00d0d6] focus:ring-[#00d0d6]" value="{{ old('phone') }}">
                            @error('phone') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-2">Company / Organization</label>
                            <input type="text" name="company" class="w-full border-gray-300 rounded shadow-sm focus:border-[#00d0d6] focus:ring-[#00d0d6]" value="{{ old('company') }}">
                            @error('company') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-semibold text-gray-800 mb-2">Subject *</label>
                        <select name="subject" required class="w-full border-gray-300 rounded shadow-sm focus:border-[#00d0d6] focus:ring-[#00d0d6]">
                            <option value="">Select a subject...</option>
                            <option value="General Inquiry" {{ old('subject') == 'General Inquiry' ? 'selected' : '' }}>General Inquiry</option>
                            <option value="Sales / Services" {{ old('subject') == 'Sales / Services' ? 'selected' : '' }}>Sales / Services</option>
                            <option value="Investor Relations" {{ old('subject') == 'Investor Relations' ? 'selected' : '' }}>Investor Relations</option>
                            <option value="Careers" {{ old('subject') == 'Careers' ? 'selected' : '' }}>Careers</option>
                        </select>
                        @error('subject') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-8">
                        <label class="block text-sm font-semibold text-gray-800 mb-2">Message *</label>
                        <textarea name="message" rows="5" required class="w-full border-gray-300 rounded shadow-sm focus:border-[#00d0d6] focus:ring-[#00d0d6]">{{ old('message') }}</textarea>
                        @error('message') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="w-full py-4 bg-black text-white hover:bg-[#00d0d6] transition-all font-bold uppercase tracking-widest text-sm rounded shadow-lg">
                        Submit Message
                    </button>
                </form>
            </div>
        </div>
    </section>
</x-frontend-layout>
