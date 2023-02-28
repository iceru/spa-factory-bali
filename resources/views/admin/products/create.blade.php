<x-app-layout>
    <div class="font-bold text-2xl text-secondary">
        Input Products
    </div>
    <div class="my-6 w-full border-b border-gray-200"></div>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex items-center mb-6">
            <x-input-label for="title" :value="__('Title')" class="mr-4 w-1/5 text-lg" />

            <x-text-input id="title" class="block w-3/5" type="title" title="title" required
                autocomplete="current-title" />

            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <div class="flex items-center mb-6">
            <x-input-label for="description" :value="__('Title')" class="mr-4 w-1/5 text-lg" />

            <x-text-input id="description" class="block w-3/5" type="description" title="description" required
                autocomplete="current-description" />

            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>


        <div class="flex items-center mb-6">
            <x-input-label for="image" :value="__('Image')" class="mr-4 w-1/5 text-lg" />

            <input type="file" name="image" id="image">

            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>

        <div>
            <x-primary-button type="submit">
                Submit
            </x-primary-button>
        </div>
    </form>

    <x-slot name="table">
        <div class="font-bold text-2xl text-secondary">
            Products Data
        </div>
        <div class="my-6 w-full border-b border-gray-200"></div>
        <table class="table-auto border-collapse border">
            <thead>
                <tr>
                    <th class="p-3 border">Title</th>
                    <th class="p-3 border">Description</th>
                    <th class="p-3 border">Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td class="p-3 border">{{ $product->title }}</td>
                        <td class="p-3 border">{{ $product->description }}</td>
                        <td class="p-3 border">{{ $product->image }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-slot>
</x-app-layout>
