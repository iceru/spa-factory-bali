<x-guest-layout>
    <div class="bg-light py-16 mt-24">
        <div class="container grid lg:grid-cols-2 gap-12 items-center px-4">
            <div>
                <div class="mb-4 font-serif text-4xl text-primary">
                    Our Clients
                </div>
                <div class="text-body text-justify">
                    Since its establishment, SPA Factory Bali have woven a wide array of top notch clients. We
                    actualized their ideas, incorporated them with our current R&D knowledge, and make them alive.
                </div>
            </div>
            <div class="grid grid-cols-3 gap-2 lg:gap-4">
                <div class="mt-6">
                    @foreach ($clients->slice(0, 2) as $client)
                        <div
                            class="even:bg-secondary odd:bg-primary flex justify-center items-center p-2 lg:p-4 mb-2 h-40">
                            <img src="{{ Storage::url($client->logo) }}"
                                class="{{ $client->name !== 'Boemi Botanicals' ? 'brightness-0 invert' : '' }}"
                                alt="{{ $client->name }}">
                        </div>
                    @endforeach
                </div>
                <div>
                    @foreach ($clients->slice(2, 2) as $client)
                        <div class="odd:bg-secondary even:bg-primary flex justify-center items-center p-4 mb-4 h-40">
                            <img src="{{ Storage::url($client->logo) }}"
                                class="{{ $client->name !== 'Boemi Botanicals' ? 'brightness-0 invert' : '' }}"
                                alt="{{ $client->name }}">
                        </div>
                    @endforeach
                </div>
                <div class="mt-6">
                    @foreach ($clients->slice(4, 6) as $client)
                        <div
                            class="even:bg-secondary odd:bg-primary flex justify-center items-center p-2 lg:p-4 mb-2 h-40">
                            <img src="{{ Storage::url($client->logo) }}"
                                class="{{ $client->name !== 'Boemi Botanicals' ? 'brightness-0 invert' : '' }}"
                                alt="{{ $client->name }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="mb-8">
                <div class="font-serif text-primary mb-2 text-2xl">
                    Product Catalog
                </div>
                <div class="text-body text-justify">
                    From retail, hotel amenities, to beauty skincare, we developed our clients ideas and created these
                    wonder of products.
                </div>
            </div>
            <div class="flex flex-wrap lg:flex-nowrap gap-8" x-data="{ open: 'hotel' }">
                <ul
                    class="w-full lg:w-1/4 clientele__catalog sticky top-0 flex lg:block overflow-auto whitespace-nowrap lg:whitespace-normal">
                    <li x-on:click="open = 'hotel'" class="mr-6 lg:mr-0" :class="open == 'hotel' ? 'active' : ''">
                        Hotel Amenities
                    </li>
                    <li x-on:click="open = 'spa'" class="mr-6 lg:mr-0" :class="open == 'spa' ? 'active' : ''">
                        Professional & Retail Spa Products
                    </li>
                    <li x-on:click="open = 'beauty'" class="mr-6 lg:mr-0" :class="open == 'beauty' ? 'active' : ''">
                        Beauty Skincare
                    </li>
                </ul>
                <div class="w-full lg:w-3/4 ">
                    <div class="hotel grid grid-cols-3 gap-4" x-cloak x-show.important="open == 'hotel'">
                        @foreach ($hotel as $item)
                            <a href="{{ $item->link }}">
                                <div>
                                    @foreach ((array) json_decode($item->images)[0] as $image)
                                        <img src="{{ Storage::url('client-images/' . $image) }}" alt="">
                                    @endforeach
                                </div>
                                <div class="mt-2 text-body font-bold hover:text-primary transition">
                                    {{ $item->name }}
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="spa grid grid-cols-3 gap-4" x-cloak x-show.important="open == 'spa'">
                        @foreach ($spa as $item)
                            <a href="{{ $item->link }}">
                                <div>
                                    @foreach ((array) json_decode($item->images)[0] as $image)
                                        <img src="{{ Storage::url('client-images/' . $image) }}" alt="">
                                    @endforeach
                                </div>
                                <div class="mt-2 text-body font-bold hover:text-primary transition">
                                    {{ $item->name }}
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="beauty grid grid-cols-3 gap-4" x-cloak x-show.important="open == 'beauty'">
                        @foreach ($beauty as $item)
                            <a href="{{ $item->link }}">
                                <div>
                                    @foreach ((array) json_decode($item->images)[0] as $image)
                                        <img src="{{ Storage::url('client-images/' . $image) }}" alt="">
                                    @endforeach
                                </div>
                                <div class="mt-2 text-body font-bold hover:text-primary transition">
                                    {{ $item->name }}
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
