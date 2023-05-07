<x-app-layout>
    <div class="font-bold text-2xl text-secondary">
        Edit sdgImages - {{ $sdgImage->title }}
    </div>
    <div class="my-6 w-full border-b border-gray-200"></div>
    <form action={{ route('sdgImage.update', $sdgImage->id) }} method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" value="{{ $sdgImage->id }}">

        <div class="flex items-center mb-6">
            <x-input-label for="title" :value="__('Title')" class="mr-4 w-1/5 text-lg" />
            <div class="w-3/5">
                <x-text-input id="title" class="block w-full" type="title" name="title" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

        </div>
        <div class="flex items-center mb-6">
            <x-input-label for="sustainability" :value="__('Sustainability')" class="mr-4 w-1/5 text-lg" />

            <div class="w-3/5">
                <x-input-select name="sustainability" :options="$sustainabilities" nameOption="number" valueOption="id" />
                <x-input-error :messages="$errors->get('sustainability')" class="mt-2" />
            </div>
        </div>
        <div class="mb-2">
            <img src="{{ Storage::url($sdgImage->image) }}" alt="">
        </div>
        <div class="flex items-center mb-6">
            <x-input-label for="image" :value="__('Image')" class="mr-4 w-1/5 text-lg" />

            <div class="w-3/5">
                <input type="file" name="image" id="image">

                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>
        </div>
        <div class="flex">
            <x-primary-button type="submit">
                Submit
            </x-primary-button>
            <a href="{{ route('homesdgImage.create') }}" class="btn bg-red-600 hover:bg-red-800 ml-4">
                Cancel
            </a>
        </div>
    </form>
</x-app-layout>
