<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{--    Table for {destination, shorturl, visitor} with tailwind css --}}
                    <table class="table-auto w-full">
                        <thead>
                        <tr>
                            <th class="px-4 py-2">Destination</th>
                            <th class="px-4 py-2">Short URL</th>
                            <th class="px-4 py-2">Visitors</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($user->shortUrls as $url)
                            <tr>
                                <td class="border px-4 py-2">{{ $url->destination_url }}</td>
                                <td class="border px-4 py-2">{{ $url->default_short_url }}</td>
                                <td class="border px-4 py-2">{{ $url->visitsCount }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
