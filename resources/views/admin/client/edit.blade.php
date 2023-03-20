<x-app-layout>
    <div class="font-bold text-2xl text-secondary">
        Edit Client - {{ $client->name }}
    </div>
    <div class="my-6 w-full border-b border-gray-200"></div>
    <form action={{ route('client.update', $client->id) }} method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" value="{{ $client->id }}">
        <div class="flex items-center mb-6">
            <x-input-label for="name" :value="__('Name')" class="mr-4 w-1/5 text-lg" />

            <div class="w-3/5">
                <x-text-input id="name" class="block w-full" type="name" name="name" required
                    autocomplete="current-name" value="{{ $client->name }}" />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center mb-6">
            {{-- Add Feature Delete Image --}}
            <x-input-label for="logo" :value="__('Logo')" class="mr-4 w-1/5 text-lg" />
            <div class="w-3/5">
                <input type="file" name="logo" id="logo">
                <x-input-error :messages="$errors->get('logo')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center mb-6">
            <x-input-label for="images" :value="__('Images')" class="mr-4 w-1/5 text-lg" />
            {{-- Add Feature Delete Images --}}

            <div class="w-3/5">
                <input type="file" name="images[]" id="images" multiple>

                <x-input-error :messages="$errors->get('images')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center mb-6">
            <x-input-label for="featured" :value="__('Featured')" class="mr-4 w-1/5 text-lg" />

            <div class="w-3/5">
                <x-input-select name="featured" :options="$options" nameOption="name" valueOption="value"
                    :selectedOption="$client->featured" />
                <x-input-error :messages="$errors->get('featured')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center mb-6">
            <x-input-label for="products" :value="__('Product')" class="mr-4 w-1/5 text-lg" />

            <div class="w-3/5">
                <x-input-select name="products" :options="$products" nameOption="title" valueOption="id"
                    :selectedOption="$client->product_id" />
                <x-input-error :messages="$errors->get('products')" class="mt-2" />
            </div>
        </div>


        <div>
            <x-primary-button type="submit">
                Submit
            </x-primary-button>
            <a href="{{ route('client.create') }}" class="btn bg-red-600 hover:bg-red-800 ml-4">
                Cancel
            </a>
        </div>
    </form>
</x-app-layout>
