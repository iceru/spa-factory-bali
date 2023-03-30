<x-guest-layout>
    <div class="mt-24 pt-16 pb-12 mb-8 bg-light">
        <div class="container">
            <div class="text-center font-serif text-4xl text-secondary mb-4">
                {{ $article->title }}
            </div>
            <div class="mb-4 text-center">
                <span class="font-bold">{{ $article->author }}</span> -
                {{ \Carbon\Carbon::create($article->created_at)->toFormattedDateString() }}
            </div>
            <div class="text-center text-lg w-3/4 m-auto">
                {!! $article->subtext !!}
            </div>
        </div>
    </div>

    <div class="container mb-12">
        <div class="mb-4">
            <img src="{{ Storage::url($article->image) }}" alt="">
        </div>
        <div class="text-lg">
            {!! $article->text !!}
        </div>
    </div>
</x-guest-layout>
