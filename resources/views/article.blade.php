<x-guest-layout>
    @foreach ($banner as $item)
        <div class="relative h-[75vh]">
            <div class="h-full">
                <img src="{{ Storage::url($item->image) }}" class="w-full h-full object-cover" alt="">
            </div>

            <div class="absolute bottom-0 w-full bg-gradient-to-t from-secondary h-1/2"></div>

            <div class="absolute bottom-8 text-white container left-1/2 transform -translate-x-1/2 px-4 lg:px-0">
                <div class="font-bold text-4xl mb-4">
                    {{ $item->title }}
                </div>
                <div class="mb-4">
                    {!! $item->text !!}
                </div>
                <a href="">
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
            <div class="grid lg:grid-cols-2">
                @foreach ($featured->slice(0, 1) as $item)
                    <div class="text-white">
                        <img src="{{ Storage::url($item->image) }}" class="mb-6" alt="{{ $item->title }}">
                        <div class="font-bold text-2xl mb-2">
                            {{ $item->title }}
                        </div>
                        <div class="mb-2 text-sm">
                            by <span class="font-bold">{{ $item->author }}</span> |
                            {{ \Carbon\Carbon::create($item->created_at)->toFormattedDateString() }}
                        </div>
                        <div>
                            {!! $item->text !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container pb-20 px-4 lg:px-0">
        <div class="text-3xl font-serif text-primary mb-8">
            Latest Post
        </div>
        @foreach ($latest as $item)
            <div class="flex items-center flex-wrap mb-8">
                <div class="w-full lg:w-1/3 mb-6 lg:mb-0">
                    <img src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}">
                </div>
                <div class="w-full lg:w-2/3 lg:pl-6">
                    <div class="font-bold text-2xl mb-2">
                        {{ $item->title }}
                    </div>
                    <div class="text-primary mb-2">
                        by <span class="font-bold">{{ $item->author }}</span> |
                        {{ \Carbon\Carbon::create($item->created_at)->toFormattedDateString() }}
                    </div>
                    <div class="text-body mb-2">
                        {!! $item->text !!}
                    </div>
                    <a href="">
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
