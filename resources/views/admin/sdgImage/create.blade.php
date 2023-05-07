<x-app-layout>
    <div class="font-bold text-2xl text-secondary">
        Input Sustainability Images
    </div>
    @if ($message = Session::get('success'))
        <div class="w-full mt-4 bg-green-100 border border-green-400 p-4 rounded-md text-green-700">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="my-6 w-full border-b border-gray-200"></div>
    <form action="{{ route('sdgImage.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

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
        <div class="flex items-center mb-6">
            <x-input-label for="image" :value="__('Image')" class="mr-4 w-1/5 text-lg" />

            <div class="w-3/5">
                <input type="file" name="image" id="image">

                <x-input-error :messages="$errors->get('image')" class="mt-2" />
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
            Sustainability Images Data
        </div>
        <div class="my-6 w-full border-b border-gray-200"></div>
        <table class="table-auto border-collapse border">
            <thead>
                <tr>
                    <th class="p-3 border">No</th>
                    <th class="p-3 border">Title</th>
                    <th class="p-3 border">SDG</th>
                    <th class="p-3 border">Image</th>
                    <th class="p-3 border">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sdgImages as $slider)
                    <tr>
                        <td class="p-3 border">{{ $loop->iteration }}</td>
                        <td class="p-3 border">{{ $slider->title }}</td>
                        <td class="p-3 border">SDG - {{ $slider->sustainability->number }}</td>
                        <td class="p-3 border"><img width="250"
                                src="{{ Storage::url('/sustainability-images/' . $slider->image) }}" />
                        <td class="p-3 border">
                            <a href="{{ route('sdgImage.edit', $slider->id) }}">
                                <x-primary-button class="text-sm mb-3">Edit</x-primary-button>
                            </a>
                            <form action="{{ route('sdgImage.delete', $slider->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <x-primary-button
                                    class="!bg-red-500 hover:!bg-red-700 focus:!bg-red:700 active:!bg-red-700 text-sm"
                                    onclick="return confirm('Item and related data will be deleted. Are you sure?');"
                                    type="submit">Delete
                                </x-primary-button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-slot>
</x-app-layout>
