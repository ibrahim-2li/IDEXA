<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Site Settings') }}
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

                    <form action="{{ route('admin.settings.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <h3 class="text-lg font-medium text-gray-900 mb-4 border-b pb-2">General</h3>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Site Name (Used for branding and titles)</label>
                            <input type="text" name="site_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ old('site_name', $settings->site_name) }}" required>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700">Homepage Hero Title (Use Enter for new lines)</label>
                            <textarea name="hero_title" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>{{ old('hero_title', $settings->hero_title) }}</textarea>
                        </div>



                        <h3 class="text-lg font-medium text-gray-900 mb-4 border-b pb-2">Contact Information</h3>
                        <div class="text-gray-600 text-sm mb-4">
                            This contact information will be globally reflected in the footer and the contact page.
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Contact Email</label>
                                <input type="email" name="contact_email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ old('contact_email', $settings->contact_email) }}" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Contact Phone</label>
                                <input type="text" name="contact_phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ old('contact_phone', $settings->contact_phone) }}" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Physical Address (Multi-line)</label>
                            <textarea name="address" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>{{ old('address', $settings->address) }}</textarea>
                        </div>

                        <h3 class="text-lg font-medium text-gray-900 mb-4 border-b pb-2 mt-8">Footer</h3>
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700">Footer About Text</label>
                            <textarea name="footer_text" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>{{ old('footer_text', $settings->footer_text) }}</textarea>
                        </div>

                        <div class="flex items-center justify-end mt-4 pt-4 border-t border-gray-200">
                            <button type="submit" class="inline-flex items-center px-6 py-3 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 disabled:opacity-25 transition">
                                Save Settings
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
