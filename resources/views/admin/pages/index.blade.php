<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Pages') }}
            </h2>
            <a href="{{ route('pages.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                Create New Page
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr>
                                    <th class="border-b-2 py-3 px-4 font-semibold text-gray-700">Title</th>
                                    <th class="border-b-2 py-3 px-4 font-semibold text-gray-700">Slug</th>
                                    <th class="border-b-2 py-3 px-4 font-semibold text-gray-700">Link</th>
                                    <th class="border-b-2 py-3 px-4 font-semibold text-gray-700">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($pages as $page)
                                <tr class="hover:bg-gray-50 border-b">
                                    <td class="py-3 px-4">{{ $page->title }}</td>
                                    <td class="py-3 px-4 text-gray-500">{{ $page->slug }}</td>
                                    <td class="py-3 px-4 text-blue-500 hover:underline"><a href="{{ route('page.show', $page->slug) }}" target="_blank">View</a></td>
                                    <td class="py-3 px-4 flex space-x-2">
                                        <a href="{{ route('pages.edit', $page) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        <form action="{{ route('pages.destroy', $page) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900 ml-2">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="py-3 px-4 text-center text-gray-500">No pages found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $pages->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
