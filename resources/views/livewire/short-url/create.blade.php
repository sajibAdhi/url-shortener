<div>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <form wire:submit="store">
            <div class="mb-4">
                <label for="url" class="block text-gray-600">Enter URL</label>
                <input
                    type="url"
                    id="url"
                    wire:model="url"
                    placeholder="https://example.com"
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                    required>
                <x-input-error :messages="$errors->get('url')" class="mt-2" />
            </div>
            <div class="flex items-center">
                <x-primary-button class="mt-4">{{ __('Shorten') }}</x-primary-button>
                <div class="dark:bg-gray-200 ml-3 mt-4 rounded px-4 py-1">{{$shortUrl}}</div>
            </div>
        </form>
    </div>
</div>
