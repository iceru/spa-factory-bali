<x-app-layout>
    <div class="font-bold text-2xl text-secondary">
        Edit Product - {{ $sustainability->title }}
    </div>
    <div class="my-6 w-full border-b border-gray-200"></div>
    <form action={{ route('sustainability.update', $sustainability->id) }} method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" value="{{ $sustainability->id }}">

        <div class="flex items-center mb-6">
            <x-input-label for="title" :value="__('Title')" class="mr-4 w-1/5 text-lg" />

            <x-text-input id="title" class="block w-3/5" type="title" name="title" required
                autocomplete="current-title" value="{{ $sustainability->title }}" />

            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <div class="flex items-center mb-6">
            <x-input-label for="description" :value="__('Description')" class="mr-4 w-1/5 text-lg" />

            <div class="w-3/5">

                <textarea name="description" id="description" cols="20" rows="10">
                   {{ $sustainability->description }}
                </textarea>
            </div>

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
</x-app-layout>
