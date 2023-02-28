<x-app-layout>
    <div class="font-bold text-2xl text-secondary">
        Input Clients Data
    </div>
    <div class="my-6 w-full border-b border-gray-200"></div>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex items-center mb-6">
            <x-input-label for="name" :value="__('Name')" class="mr-4 w-1/5 text-lg" />

            <x-text-input id="name" class="block w-3/5" type="name" name="name" required
                autocomplete="current-name" />

            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="flex items-center mb-6">
            <x-input-label for="image" :value="__('Image')" class="mr-4 w-1/5 text-lg" />

            <input type="file" name="image" id="image">

            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>

        <div class="flex items-center mb-6">
            <x-input-label for="images" :value="__('Images')" class="mr-4 w-1/5 text-lg" />

            <input type="file" name="images[]" id="images" multiple>

            <x-input-error :messages="$errors->get('images')" class="mt-2" />
        </div>

        <div class="flex items-center mb-6">
            <x-input-label for="featured" :value="__('Featured')" class="mr-4 w-1/5 text-lg" />

            <x-input-select name="featured" :options="$options" />
            <x-input-error :messages="$errors->get('featured')" class="mt-2" />
        </div>

        <div>
            <x-primary-button type="submit">
                Submit
            </x-primary-button>
        </div>
    </form>

    <x-slot name="table">
        <div class="font-bold text-2xl text-secondary">
            Clients Data
        </div>
        <div class="my-6 w-full border-b border-gray-200"></div>
        <table class="table-auto border-collapse border">
            <thead>
                <tr>
                    <th class="p-3 border">Name</th>
                    <th class="p-3 border">Logo</th>
                    <th class="p-3 border">Images</th>
                    <th class="p-3 border">Featured</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td class="p-3 border">{{ $client->name }}</td>
                        <td class="p-3 border">{{ $client->logo }}</td>
                        <td class="p-3 border">{{ $client->images }}</td>
                        <td class="p-3 border">{{ Str::ucfirst($client->featured) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-slot>
</x-app-layout>
