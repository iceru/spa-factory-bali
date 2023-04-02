<x-app-layout>
    <div class="font-bold text-2xl text-secondary">
        Input E-Library Data
    </div>
    @if ($message = Session::get('error'))
        <div class="w-full mt-4 bg-red-100 border border-red-400 p-4 rounded-md text-red-700">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="w-full mt-4 bg-green-100 border border-green-400 p-4 rounded-md text-green-700">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="my-6 w-full border-b border-gray-200"></div>
    <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-wrap items-center mb-6">
            <x-input-label for="title" :value="__('Title')" class="mr-4 w-full lg:w-1/5 text-lg" />

            <div class="w-full lg:w-3/5">
                <x-text-input id="title" class="block w-full" type="text" name="title" required
                    value="{{ old('title') }}" />

                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
        </div>
        <div class="flex flex-wrap items-center mb-6">
            <x-input-label for="subtext" :value="__('Sub Text')" class="mr-4 w-full lg:w-1/5 text-lg" />

            <div class="w-full lg:w-3/5">
                <textarea name="subtext" id="subtext" cols="20" rows="10">{{ old('subtext') }}</textarea>
                <x-input-error :messages="$errors->get('subtext')" class="mt-2" />
            </div>
        </div>
        <div class="flex flex-wrap items-center mb-6">
            <x-input-label for="text" :value="__('Text')" class="mr-4 w-full lg:w-1/5 text-lg" />

            <div class="w-full lg:w-3/5">
                <textarea name="text" id="text" cols="20" rows="10">{{ old('text') }}</textarea>
                <x-input-error :messages="$errors->get('text')" class="mt-2" />
            </div>
        </div>

        <div class="flex flex-wrap items-center mb-6">
            <x-input-label for="type" :value="__('Type')" class="mr-4 w-full lg:w-1/5 text-lg" />

            <div class="w-full lg:w-3/5">
                <x-input-select name="type" :options="$options" nameOption="name" valueOption="value" />
                <x-input-error :messages="$errors->get('type')" class="mt-2" />
            </div>
        </div>


        <div class="flex flex-wrap items-center mb-6">
            <x-input-label for="image" :value="__('Image')" class="mr-4 w-full lg:w-1/5 text-lg" />

            <div class="w-full lg:w-3/5">
                <input type="file" name="image" id="image">

                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>
        </div>
        <div class="flex flex-wrap items-center mb-6">
            <x-input-label for="created_at" :value="__('Created at')" class="mr-4 w-full lg:w-1/5 text-lg" />

            <div class="w-full lg:w-3/5">
                <x-text-input id="datepicker" class="block w-full" type="created_at" name="created_at" required
                    value="{{ old('created_at') }}" />

                <x-input-error :messages="$errors->get('created_at')" class="mt-2" />
            </div>
        </div>
        <div>
            <x-primary-button type="submit">
                Submit
            </x-primary-button>
        </div>
    </form>

    <script>
        $(function() {
            $("#datepicker").datepicker({
                dateFormat: "dd-mm-yy",
                changeMonth: true,
                changeYear: true,
            });
        });
    </script>

    <x-slot name="table">
        <div class="font-bold text-2xl text-secondary">
            E-Library Data
        </div>
        <div class="my-6 w-full border-b border-gray-200"></div>
        <table class="table-auto border-collapse border">
            <thead>
                <tr>
                    <th class="p-3 border">Title</th>
                    <th class="p-3 border">Slug</th>
                    <th class="p-3 border">Image</th>
                    <th class="p-3 border">Sub Text</th>
                    <th class="p-3 border">Text</th>
                    <th class="p-3 border">Author</th>
                    <th class="p-3 border">Type</th>
                    <th class="p-3 border">Created at</th>
                    <th class="p-3 border">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td class="p-3 border">{{ $article->title }}</td>
                        <td class="p-3 border">{{ $article->slug }}</td>
                        <td class="p-3 border">
                            <img src="{{ Storage::url($article->image) }}" width="200" alt="{{ $article->title }}">
                        </td>
                        <td class="p-3 border">{!! $article->subtext !!}</td>
                        <td class="p-3 border">{!! substr($article->text, 0, 200) !!}</td>
                        <td class="p-3 border">
                            {{ $article->author }}
                        </td>
                        <td class="p-3 border">{{ Str::ucfirst($article->type) }}</td>
                        <td class="p-3 border">
                            {{ \Carbon\Carbon::create($article->created_at)->toFormattedDateString() }}</td>
                        <td class="p-3 border">
                            <a href="{{ route('article.edit', $article->id) }}">
                                <x-primary-button class="text-sm mb-3">Edit</x-primary-button>
                            </a>

                            <form action="{{ route('article.delete', $article->id) }}" method="POST">
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
