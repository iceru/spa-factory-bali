<x-guest-layout>
    <div class="pt-40 pb-8 mb-8 bg-light">
        <div class="container px-4">
            <div class="text-center font-serif text-4xl text-primary mb-4">
                {{ $article->title }}
            </div>
            <div class="mb-4 text-center">
                <span class="font-bold">{{ $article->author }}</span> -
                {{ \Carbon\Carbon::create($article->created_at)->toFormattedDateString() }}
            </div>
            {{-- <div class="text-center lg:text-lg lg:w-3/4 m-auto">
                {!! $article->subtext !!}
            </div> --}}
        </div>
    </div>

    <div class="container mb-12 flex flex-wrap px-4">
        <div class="w-full lg:w-2/3">
            <div class="mb-4">
                <img src="{{ Storage::url($article->image) }}" class="w-full" alt="{{ $article->title }}">
            </div>
            <div class="">
                {!! $article->text !!}
            </div>
        </div>
        <div class="w-full lg:w-1/3 mt-12 lg:mt-0 lg:pl-8">
            <div class="sticky top-4">
                <div class="font-serif text-primary text-3xl mb-6">
                    More to Read
                </div>
                @foreach ($more as $item)
                    <div class="flex gap-4 mb-4 border-b border-gray-300 pb-4 ">
                        <div class="w-1/5 mt-1.5">
                            <a href="/e-library/{{ $item->slug }}">
                                <img src="{{ Storage::url($item->image) }}" class="h-16 w-16 object-cover rounded"
                                    alt="{{ $item->title }}">
                            </a>
                        </div>
                        <div class="w-4/5">
                            <a href="/e-library/{{ $item->slug }}">
                                <div class="font-serif text-primary text-lg mb-1 ">
                                    {{ $item->title }}
                                </div>
                            </a>
                            <div class="text-sm article__subtext">
                                {!! $item->subtext !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-guest-layout>
