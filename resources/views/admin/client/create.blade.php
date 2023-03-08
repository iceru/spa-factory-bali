<x-app-layout>
    <div class="font-bold text-2xl text-secondary">
        Input Clients Data
    </div>
    @if ($errors->any())
        {!! implode('', $errors->all('<div>:message</div>')) !!}
    @endif
    <div class="my-6 w-full border-b border-gray-200"></div>
    <form action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex items-center mb-6">
            <x-input-label for="name" :value="__('Name')" class="mr-4 w-1/5 text-lg" />

            <div class="w-3/5">
                <x-text-input id="name" class="block w-full" type="name" name="name" required
                    autocomplete="current-name" />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center mb-6">
            <x-input-label for="logo" :value="__('Logo')" class="mr-4 w-1/5 text-lg" />
            <div class="w-3/5">
                <input type="file" name="logo" id="logo">
                <x-input-error :messages="$errors->get('logo')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center mb-6">
            <x-input-label for="images" :value="__('Images')" class="mr-4 w-1/5 text-lg" />

            <div class="w-3/5">
                <input type="file" name="images[]" id="images" multiple>

                <x-input-error :messages="$errors->get('images')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center mb-6">
            <x-input-label for="featured" :value="__('Featured')" class="mr-4 w-1/5 text-lg" />

            <div class="w-3/5">
                <x-input-select name="featured" :options="$options" nameOption="name" valueOption="value" />
                <x-input-error :messages="$errors->get('featured')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center mb-6">
            <x-input-label for="products" :value="__('Product')" class="mr-4 w-1/5 text-lg" />

            <div class="w-3/5">
                <x-input-select name="products" :options="$products" nameOption="title" valueOption="id" />
                <x-input-error :messages="$errors->get('products')" class="mt-2" />
            </div>
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
                    <th class="p-3 border">Product</th>
                    <th class="p-3 border">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td class="p-3 border">{{ $client->name }}</td>
                        <td class="p-3 border">
                            <img src="{{ Storage::url($client->logo) }}" alt="{{ $client->name }}">
                        </td>
                        <td class="p-3 border">
                            @foreach (json_decode($client->images) as $image)
                                <img src="{{ Storage::url('/client-images/' . $image) }}" alt="{{ $client->name }}">
                            @endforeach
                        </td>
                        <td class="p-3 border">{{ Str::ucfirst($client->featured) }}</td>
                        <td class="p-3 border">{{ $client->product->title }}</td>
                        <td class="p-3"> <a href="{{ route('client.edit', $client->id) }}">
                                <x-primary-button class="text-sm mb-3">Edit</x-primary-button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-slot>
</x-app-layout>
