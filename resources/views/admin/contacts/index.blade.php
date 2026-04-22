<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact Submissions') }}
        </h2>
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
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr>
                                    <th class="border-b-2 py-3 px-4 font-semibold text-gray-700">Date</th>
                                    <th class="border-b-2 py-3 px-4 font-semibold text-gray-700">Name</th>
                                    <th class="border-b-2 py-3 px-4 font-semibold text-gray-700">Contact Info</th>
                                    <th class="border-b-2 py-3 px-4 font-semibold text-gray-700">Subject</th>
                                    <th class="border-b-2 py-3 px-4 font-semibold text-gray-700 w-1/3">Message</th>
                                    <th class="border-b-2 py-3 px-4 font-semibold text-gray-700">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($submissions as $sub)
                                <tr class="hover:bg-gray-50 border-b border-gray-100">
                                    <td class="py-3 px-4 whitespace-nowrap text-sm text-gray-500">{{ $sub->created_at->format('M d, Y H:i') }}</td>
                                    <td class="py-3 px-4 font-medium">{{ $sub->name }}<br><span class="text-xs text-gray-500">{{ $sub->company }}</span></td>
                                    <td class="py-3 px-4 text-sm"><a href="mailto:{{ $sub->email }}" class="text-blue-500 hover:underline">{{ $sub->email }}</a><br>{{ $sub->phone }}</td>
                                    <td class="py-3 px-4 text-sm font-semibold">{{ $sub->subject }}</td>
                                    <td class="py-3 px-4 text-sm text-gray-600 truncate max-w-xs" title="{{ $sub->message }}">{{ Str::limit($sub->message, 100) }}</td>
                                    <td class="py-3 px-4">
                                        <form action="{{ route('admin.contacts.destroy', $sub) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this submission?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700 text-sm font-medium">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="py-6 px-4 text-center text-gray-500">No contact submissions yet.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $submissions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
