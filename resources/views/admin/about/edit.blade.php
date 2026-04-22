<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Landing Page About') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (session('success'))
                        <div class="p-4 mb-6 text-sm text-green-800 rounded bg-green-50" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h3 class="text-lg font-medium text-gray-900 mb-4 border-b pb-2">Homepage About Section</h3>
                        <div class="mb-4 text-sm text-gray-600">
                            Manage the text that appears in the split About section on the main landing page alongside the machinery image.
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">About Title</label>
                            <input type="text" name="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ old('title', $about->title) }}" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">About Paragraph 1</label>
                            <textarea name="p1" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>{{ old('p1', $about->p1) }}</textarea>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700">About Paragraph 2</label>
                            <textarea name="p2" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>{{ old('p2', $about->p2) }}</textarea>
                        </div>
                        
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Landing About Image</label>
                            @if($about->image)
                                <div class="mb-4">
                                    <img src="{{ $about->image }}" alt="Current image view" class="h-32 object-contain rounded border border-gray-200">
                                </div>
                            @endif
                            <input type="file" name="image" accept="image/*" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                            <p class="text-xs text-gray-500 mt-2">Leave blank to retain current.</p>
                        </div>

                        <!-- Full Dedicated About Us Page Editor -->
                        <h3 class="text-lg font-medium text-gray-900 mb-4 mt-8 pt-6 border-t border-b pb-2">Dedicated 'About Us' Page</h3>
                        <div class="mb-4 text-sm text-gray-600">
                            Manage the robust content shown specifically when navigating to the /about-us route.
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Top Main Heading</label>
                            <input type="text" name="about_us_heading" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ old('about_us_heading', $about->about_us_heading) }}" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Primary Description</label>
                            <textarea name="about_us_p1" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>{{ old('about_us_p1', $about->about_us_p1) }}</textarea>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700">Secondary Context Paragraph</label>
                            <textarea name="about_us_p2" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>{{ old('about_us_p2', $about->about_us_p2) }}</textarea>
                        </div>

                        <div class="mb-4 p-4 border border-gray-200 rounded-md bg-gray-50">
                            <h4 class="font-medium text-gray-800 mb-4 text-sm">Highlighted Sidebar Callout Box</h4>
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700">Callout Title</label>
                                <input type="text" name="about_us_highlight_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500" value="{{ old('about_us_highlight_title', $about->about_us_highlight_title) }}" required>
                            </div>
                            <div class="mb-2">
                                <label class="block text-sm font-medium text-gray-700">Callout Text</label>
                                <textarea name="about_us_highlight_text" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500" required>{{ old('about_us_highlight_text', $about->about_us_highlight_text) }}</textarea>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Dedicated About Us Wide Banner Image</label>
                            @if($about->about_us_image)
                                <div class="mb-4">
                                    <img src="{{ $about->about_us_image }}" alt="Current image view" class="h-32 object-contain rounded border border-gray-200">
                                </div>
                            @endif
                            <input type="file" name="about_us_image" accept="image/*" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                            <p class="text-xs text-gray-500 mt-2">Leave blank to retain current.</p>
                        </div>

                        <div class="flex items-center justify-end mt-6 pt-4 border-t border-gray-200">
                            <button type="submit" class="inline-flex items-center px-6 py-3 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 disabled:opacity-25 transition">
                                Save About Section
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
