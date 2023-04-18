<x-app-layout>
    <div class="font-bold text-2xl text-secondary">
        Input Sustainability
    </div>
    @if ($message = Session::get('success'))
        <div class="w-full mt-4 bg-green-100 border border-green-400 p-4 rounded-md text-green-700">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="my-6 w-full border-b border-gray-200"></div>
    <form action="{{ route('sustainability.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex items-center mb-6">
            <x-input-label for="title" :value="__('Title')" class="mr-4 w-1/5 text-lg" />

            <div class="w-3/5">
                <x-text-input id="title" class="block w-full" type="title" name="title" required
                    autocomplete="current-title" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center mb-6">
            <x-input-label for="number" :value="__('SDG Number')" class="mr-4 w-1/5 text-lg" />

            <div class="w-3/5">
                <x-text-input id="number" class="block w-full" type="number" name="number" required />
                <x-input-error :messages="$errors->get('number')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center mb-6">
            <x-input-label for="bg_color" :value="__('Background Color')" class="mr-4 w-1/5 text-lg" />

            <div class="w-3/5">
                <x-text-input id="bg_color" class="block w-full" type="bg_color" name="bg_color" required />
                <x-input-error :messages="$errors->get('bg_color')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center mb-6">
            <x-input-label for="description" :value="__('Description')" class="mr-4 w-1/5 text-lg" />

            <div class="w-3/5">
                <textarea name="description" id="description" cols="20" rows="10"></textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

        </div>


        <div class="flex items-center mb-6">
            <x-input-label for="images" :value="__('Images')" class="mr-4 w-1/5 text-lg" />

            <div class="w-3/5">
                <input type="file" name="images[]" id="images" multiple>

                <x-input-error :messages="$errors->get('images')" class="mt-2" />
            </div>
        </div>

        <div>
            <x-primary-button type="submit">
                Submit
            </x-primary-button>
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

    <x-slot name="table">
        <div class="font-bold text-2xl text-secondary">
            Sustainabilities Data
        </div>
        <div class="my-6 w-full border-b border-gray-200"></div>
        <table class="table-auto border-collapse border">
            <thead>
                <tr>
                    <th class="p-3 border">Title</th>
                    <th class="p-3 border">Number</th>
                    <th class="p-3 border">Background Color</th>
                    <th class="p-3 border">Description</th>
                    <th class="p-3 border">Image</th>
                    <th class="p-3 border">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sustainabilities as $sustainability)
                    <tr>
                        <td class="p-3 border">{{ $sustainability->title }}</td>
                        <td class="p-3 border">{{ $sustainability->number }}</td>
                        <td class="p-3 border">
                            <div class="h-10 w-10 rounded-lg mb-2"
                                style="background-color:{{ $sustainability->bg_color }}">
                            </div>
                            {{ $sustainability->bg_color }}
                        </td>
                        <td class="p-3 border">{!! $sustainability->description !!}</td>
                        <td class="p-3 border">
                            @foreach (json_decode($sustainability->images) as $image)
                                <img src="{{ Storage::url('/sustainability-images/' . $image) }}" class="mb-2"
                                    width="200" alt="{{ $sustainability->name }}">
                            @endforeach
                        </td>
                        <td class="p-3 border">
                            <a href="{{ route('sustainability.edit', $sustainability->id) }}">
                                <x-primary-button class="text-sm mb-3">Edit</x-primary-button>
                            </a>
                            <form action="{{ route('sustainability.delete', $sustainability->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <x-primary-button
                                    class="!bg-red-500 hover:!bg-red-700 focus:!bg-red:700 active:!bg-red-700 text-sm"
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
