<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Areas of Expertise') }}
            </h2>
            <a href="{{ route('admin.expertise.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 disabled:opacity-25 transition">
                Add New Area
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
                <div class="p-6 text-gray-900 border-b border-gray-200">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr>
                                <th class="border-b-2 py-3 px-4 font-semibold text-gray-700">Image</th>
                                <th class="border-b-2 py-3 px-4 font-semibold text-gray-700">Title</th>
                                <th class="border-b-2 py-3 px-4 font-semibold text-gray-700 w-1/3">Description</th>
                                <th class="border-b-2 py-3 px-4 font-semibold text-gray-700 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($expertise as $area)
                            <tr class="hover:bg-gray-50 border-b border-gray-100">
                                <td class="py-3 px-4">
                                    <img src="{{ $area->image ?? '/images/security.png' }}" class="h-16 w-24 object-cover rounded shadow-sm">
                                </td>
                                <td class="py-3 px-4 font-bold text-gray-900">{{ $area->title }}</td>
                                <td class="py-3 px-4 text-sm text-gray-600">{{ Str::limit($area->description_1, 60) }}</td>
                                <td class="py-3 px-4 text-right">
                                    <div class="flex items-center justify-end gap-3">
                                        <a href="{{ route('admin.expertise.edit', $area) }}" class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">Edit</a>
                                        <form action="{{ route('admin.expertise.destroy', $area) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this module?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700 text-sm font-medium">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="py-6 px-4 text-center text-gray-500">No areas of expertise created yet.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
