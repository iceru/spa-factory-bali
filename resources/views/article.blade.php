<x-guest-layout>
    @foreach ($banner as $item)
        <div class="relative h-[75vh] max-h-[750px]">
            <div class="h-full">
                <img src="{{ Storage::url($item->image) }}" class="w-full h-full object-cover" alt="">
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
                        <img src="/images/read-more.png" alt="Arrow Right" class="ml-2">
                    </div>
                </a>
            </div>
        </div>
    @endforeach
    <div class="bg-linear py-14 mb-20">
        <div class="container px-4 lg:px-0">
            <div class="flex flex-wrap lg:flex-nowrap gap-4">
                @foreach ($featured->slice(0, 1) as $item)
                    <div class="text-white lg:w-[55%]">
                        <a href="{{ route('article.detail', $item->slug) }}">
                            <img src="{{ Storage::url($item->image) }}" class="mb-6" alt="{{ $item->title }}">
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
                                <img src="/images/read-more.png" alt="Arrow Right" class="ml-2">
                            </div>
                        </a>
                    </div>
                @endforeach
                <div class="grid gap-4 lg:w-[45%]">
                    @foreach ($featured->slice(1, 3) as $item)
                        <div href="{{ route('article.detail', $item->slug) }}"
                            class="text-white relative block h-[40vh]">
                            <div class="absolute h-full w-full">
                                <img src="{{ Storage::url($item->image) }}" class="h-full w-full object-cover"
                                    alt="{{ $item->title }}">
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
                                        <img src="/images/read-more.png" alt="Arrow Right" class="ml-2">
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
        <div class="absolute right-0 bottom-0">
            <img src="/images/bg-flower-green.png" class="w-[80%] ml-auto" alt="">
        </div>
        <div class="text-3xl font-serif text-primary mb-8">
            Latest Post
        </div>
        @foreach ($latest as $item)
            <div class="flex items-center flex-wrap mb-8">
                <div class="w-full lg:w-1/3 mb-6 lg:mb-0">
                    <a href="{{ route('article.detail', $item->slug) }}">
                        <img src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}">
                    </a>

                </div>
                <div class="w-full lg:w-2/3 lg:pl-6">
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
                            <img src="/images/arrow-green.png" alt="Arrow Right" class="ml-2">
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

</x-guest-layout>
