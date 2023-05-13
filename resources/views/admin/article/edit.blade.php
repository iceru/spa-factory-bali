<x-app-layout>
    <div class="font-bold text-2xl text-secondary">
        Edit Article - {{ $article->title }}
    </div>
    <div class="my-6 w-full border-b border-gray-200"></div>
    <form action={{ route('article.update', $article->id) }} method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" value="{{ $article->id }}">
        <div class="flex flex-wrap items-center mb-6">
            <x-input-label for="title" :value="__('Title')" class="w-full lg:w-1/5 text-lg pr-4" />

            <div class="w-full lg:w-4/5">
                <x-text-input id="title" class="block w-full" type="text" name="title" required
                    value="{{ $article->title }}" />

                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
        </div>
        <div class="flex flex-wrap items-center mb-6">
            <x-input-label for="subtext" :value="__('Sub Text')" class="w-full lg:w-1/5 text-lg pr-4" />

            <div class="w-full lg:w-4/5">
                <textarea name="subtext" id="subtext" cols="20" rows="10">{{ $article->subtext }}</textarea>
                <x-input-error :messages="$errors->get('subtext')" class="mt-2" />
            </div>
        </div>
        <div class="flex flex-wrap items-center mb-6">
            <x-input-label for="text" :value="__('Text')" class="w-full lg:w-1/5 text-lg pr-4" />

            <div class="w-full lg:w-4/5">
                <textarea name="text" id="text" cols="20" rows="10">{{ $article->text }}</textarea>
                <x-input-error :messages="$errors->get('text')" class="mt-2" />
            </div>
        </div>

        <div class="flex flex-wrap items-center mb-6">
            <x-input-label for="type" :value="__('Type')" class="w-full lg:w-1/5 text-lg pr-4" />

            <div class="w-full lg:w-4/5">
                <x-input-select name="type" :options="$options" nameOption="name" valueOption="value"
                    :selectedOption="$article->type" />
                <x-input-error :messages="$errors->get('type')" class="mt-2" />
            </div>
        </div>


        <div class="flex flex-wrap items-center mb-6">
            <x-input-label for="current_image" :value="__('Current Image')" class="w-full lg:w-1/5 text-lg pr-4" />

            <div class="w-full lg:w-4/5">
                <div>
                    <img loading="lazy" src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}">
                </div>
            </div>
        </div>

        <div class="flex flex-wrap items-center mb-6">
            <x-input-label for="image" :value="__('Image')" class="w-full lg:w-1/5 text-lg pr-4" />

            <div class="w-full lg:w-4/5">
                <input type="file" name="image" id="image">

                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>
        </div>
        <div class="flex flex-wrap items-center mb-6">
            <x-input-label for="created_at" :value="__('Created at')" class="w-full lg:w-1/5 text-lg pr-4" />

            <div class="w-full lg:w-4/5">
                <x-text-input id="datepicker" class="block w-full" type="created_at" name="created_at" required
                    value="{{ \Carbon\Carbon::create($article->created_at)->format('d-m-Y') }}" />

                <x-input-error :messages="$errors->get('created_at')" class="mt-2" />
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

    <script>
        $(function() {
            $("#datepicker").datepicker({
                dateFormat: "dd-mm-yy",
                changeMonth: true,
                changeYear: true,
            });
        });
    </script>
</x-app-layout>
