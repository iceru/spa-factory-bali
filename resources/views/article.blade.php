<x-guest-layout>
    @section('title')
        E-Library - Spa Factory Bali™
    @endsection
    @foreach ($banner as $item)
        <div class="relative h-[75vh] max-h-[750px]">
            <div class="h-full">
                <img loading="lazy" src="{{ Storage::url($item->image) }}" class="w-full h-full object-cover"
                    alt="">
            </div>

            <div class="absolute bottom-0 w-full bg-gradient-to-t from-secondary h-1/2"></div>

            <div class="absolute bottom-8 text-white container left-1/2 transform -translate-x-1/2 px-4 lg:px-0">
                <a href="{{ route('article.detail', $item->slug) }}">
                    <div class="font-bold text-4xl mb-4">
                        {{ $item->title }}
                    </div>
                </a>

                <div class="mb-4">
                    {!! $item->subtext !!}
                </div>
                <a href="{{ route('article.detail', $item->slug) }}">
                    <div class="flex items-center">
                        <div>
                            Read More
                        </div>
                        <img loading="lazy" src="/images/read-more.png" alt="Arrow Right" class="ml-2">
                    </div>
                </a>
            </div>
        </div>
    @endforeach
    <div class="bg-linear py-14 mb-20">
        <div class="container px-4 lg:px-0">
            <div class="flex flex-wrap lg:flex-nowrap gap-4">
                @foreach ($featured->slice(0, 1) as $item)
                    <div class="text-white w-full lg:w-[55%] mb-8 lg:mb-0">
                        <a href="{{ route('article.detail', $item->slug) }}">
                            <img loading="lazy" src="{{ Storage::url($item->image) }}" class="mb-6 w-full"
                                alt="{{ $item->title }}">
                        </a>

                        <a href="{{ route('article.detail', $item->slug) }}">
                            <div class="font-bold text-2xl mb-2">
                                {{ $item->title }}
                            </div>
                        </a>

                        <div class="mb-2 text-sm">
                            by <span class="font-bold">{{ $item->author }}</span> |
                            {{ \Carbon\Carbon::create($item->created_at)->toFormattedDateString() }}
                        </div>
                        <div class="mb-2 article__subtext">
                            {!! $item->subtext !!}
                        </div>
                        <a href="{{ route('article.detail', $item->slug) }}">
                            <div class="flex items-center">
                                <div>
                                    Read More
                                </div>
                                <img loading="lazy" src="/images/read-more.png" alt="Arrow Right" class="ml-2">
                            </div>
                        </a>
                    </div>
                @endforeach
                <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-1 lg:w-[45%]">
                    @foreach ($featured->slice(1, 3) as $item)
                        <div href="{{ route('article.detail', $item->slug) }}"
                            class="text-white relative block h-[40vh] md:h-[25vh] lg:h-[40vh] max-h-[320px]">
                            <div class="absolute h-full w-full">
                                <img loading="lazy" src="{{ Storage::url($item->image) }}"
                                    class="h-full w-full object-cover" alt="{{ $item->title }}">
                            </div>
                            <div class="absolute bg-black bg-opacity-50 top-0 left-0 w-full h-full"></div>
                            <div class="text-white relative z-10 p-4 h-full flex flex-col justify-end">
                                <a href="{{ route('article.detail', $item->slug) }}">
                                    <div class="font-bold text-2xl mb-2">
                                        {{ $item->title }}
                                    </div>
                                </a>

                                <div class="mb-2 text-sm">
                                    by <span class="font-bold">{{ $item->author }}</span> |
                                    {{ \Carbon\Carbon::create($item->created_at)->toFormattedDateString() }}
                                </div>
                                <div class="mb-2 article__subtext">
                                    {!! $item->subtext !!}
                                </div>
                                <a href="{{ route('article.detail', $item->slug) }}">
                                    <div class="flex items-center">
                                        <div>
                                            Read More
                                        </div>
                                        <img loading="lazy" src="/images/read-more.png" alt="Arrow Right"
                                            class="ml-2">
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-20 mb-10 px-4 lg:px-0 relative">
        <div class="absolute right-0 bottom-0 opacity-40">
            <img loading="lazy" src="/images/bg-flower-green.png" class="w-[80%] ml-auto" alt="">
        </div>
        <div class="text-3xl font-serif text-primary mb-8">
            Latest Post
        </div>
        @foreach ($latest as $item)
            <div class="flex items-center flex-wrap mb-8">
                <div class="w-full md:w-1/3 mb-6 md:mb-0">
                    <a href="{{ route('article.detail', $item->slug) }}">
                        <img loading="lazy" class="w-full object-cover h-[250px]"
                            src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}">
                    </a>

                </div>
                <div class="w-full md:w-2/3 md:pl-6">
                    <a href="{{ route('article.detail', $item->slug) }}">
                        <div class="font-bold text-2xl mb-2">
                            {{ $item->title }}
                        </div>
                    </a>

                    <div class="text-primary mb-2">
                        by <span class="font-bold">{{ $item->author }}</span> |
                        {{ \Carbon\Carbon::create($item->created_at)->toFormattedDateString() }}
                    </div>
                    <div class="text-body mb-2 article__subtext">
                        {!! $item->subtext !!}
                    </div>
                    <a href="{{ route('article.detail', $item->slug) }}">
                        <div class="flex items-center text-primary font-semibold">
                            <div>
                                Read More
                            </div>
                            <img loading="lazy" src="/images/arrow-green.png" alt="Arrow Right" class="ml-2">
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

</x-guest-layout>
