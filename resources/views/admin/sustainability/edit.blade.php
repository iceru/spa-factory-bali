<x-app-layout>
    <div class="font-bold text-2xl text-secondary">
        Edit Sustainability - {{ $sustainability->title }}
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
            <x-input-label for="number" :value="__('SDG Number')" class="mr-4 w-1/5 text-lg" />

            <div class="w-3/5">
                <x-text-input id="number" class="block w-full" type="number" name="number"
                    value="{{ $sustainability->number }}" required />
                <x-input-error :messages="$errors->get('number')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center mb-6">
            <x-input-label for="bg_color" :value="__('Background Color')" class="mr-4 w-1/5 text-lg" />

            <div class="w-3/5">
                <x-text-input id="bg_color" class="block w-full" type="bg_color" name="bg_color" required
                    value="{{ $sustainability->bg_color }}" />
                <x-input-error :messages="$errors->get('bg_color')" class="mt-2" />
            </div>
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

        <div class="mb-3 flex items-center">
            <div class="w-1/5 mr-4">
            </div>
            @foreach (json_decode($sustainability->images) as $image)
                <img src="{{ Storage::url('/sustainability-images/' . $image) }}" class="mr-4" width="200"
                    alt="{{ $sustainability->name }}">
            @endforeach
        </div>

        <div class="flex items-center mb-6">
            <x-input-label for="images" :value="__('Images')" class="mr-4 w-1/5 text-lg" />

            <input type="file" name="images[]" id="images" multiple>

            <x-input-error :messages="$errors->get('images')" class="mt-2" />
        </div>

        <div class="flex">
            <x-primary-button type="submit">
                Submit
            </x-primary-button>
            <a href="{{ route('sustainability.create') }}" class="btn bg-red-600 hover:bg-red-800 ml-4">
                Cancel
            </a>
        </div>
    </form>

    <script>
        $(document).ready(function() {
            $("#bg_color").spectrum({
                showInput: true,
                type: 'component'
            });
        });
    </script>
</x-app-layout>
