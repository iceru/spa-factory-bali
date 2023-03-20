<x-guest-layout>
    <div class="bg-light py-16 mt-32">
        <div class="container grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="mb-4 font-serif text-4xl text-primary">
                    Our Clients
                </div>
                <div class="text-body text-justify">
                    Since its establishment, SPA Factory Bali have woven a wide array of top notch clients. We
                    actualized their ideas, incorporated them with our current R&D knowledge, and make them alive.
                </div>
            </div>
            <div class="grid lg:grid-cols-3 gap-4">
                <div class="mt-6">
                    @foreach ($clients->slice(0, 2) as $client)
                        <div class="even:bg-secondary odd:bg-primary flex justify-center items-center p-4 mb-4">
                            <img src="{{ Storage::url($client->logo) }}"
                                class="{{ $client->name !== 'Boemi Botanicals' ? 'brightness-0 invert' : '' }}"
                                alt="{{ $client->name }}">
                        </div>
                    @endforeach
                </div>
                <div>
                    @foreach ($clients->slice(2, 4) as $client)
                        <div class="odd:bg-secondary even:bg-primary flex justify-center items-center p-4 mb-4">
                            <img src="{{ Storage::url($client->logo) }}"
                                class="{{ $client->name !== 'Boemi Botanicals' ? 'brightness-0 invert' : '' }}"
                                alt="{{ $client->name }}">
                        </div>
                    @endforeach
                </div>
                <div>
                    @foreach ($clients->slice(4, 6) as $client)
                        <div class="even:bg-secondary odd:bg-primary flex justify-center items-center p-4 mb-4">
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
            <div class="flex gap-8">
                <ul class="w-1/4 clientele__catalog">
                    <li class="active">
                        Hotel Amenities
                    </li>
                    <li>
                        Professional & Retail Spa Products
                    </li>
                    <li>
                        Beauty Skincare
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-guest-layout>
