<x-app-layout>
    <div class="font-bold text-2xl text-secondary">
        Edit Sliders
    </div>
    <div class="my-6 w-full border-b border-gray-200"></div>
    <form action={{ route('homeslider.update', $homeslider->id) }} method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" value="{{ $homeslider->id }}">
        <div class="mb-2">
            <img src="{{ Storage::url($homeslider->image) }}" class="max-w-[250px]" alt="">
        </div>
        <div class="flex items-center mb-6">
            <x-input-label for="image" :value="__('Image')" class="mr-4 w-1/5 text-lg" />

            <div class="w-3/5">
                <input type="file" name="image" id="image">

                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>
        </div>
        <div class="flex items-center mb-6">
            <x-input-label for="order" :value="__('Order')" class="mr-4 w-1/5 text-lg" />

            <div class="w-3/5">
                <x-input-select name="order" :options="$orders" nameOption="name" valueOption="value"
                    selectedOption="$homeslider->order" />
                <x-input-error :messages="$errors->get('order')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center mb-6">
            <x-input-label for="description" :value="__('Link')" class="mr-4 w-1/5 text-lg" />
            <div class="w-3/5">
                <x-text-input id="link" class="block w-full" type="link" name="link"
                    value="{{ $homeslider->link }}" />
                <x-input-error :messages="$errors->get('link')" class="mt-2" />
            </div>

        </div>

        <div class="flex">
            <x-primary-button type="submit">
                Submit
            </x-primary-button>
            <a href="{{ route('homeslider.create') }}" class="btn bg-red-600 hover:bg-red-800 ml-4">
                Cancel
            </a>
        </div>
    </form>
</x-app-layout>
