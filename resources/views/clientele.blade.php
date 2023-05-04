<x-guest-layout>
    @section('title')
        Clientele - Spa Factory Bali™
    @endsection
    <div class="bg-light py-16 pt-44">
        <div class="container grid lg:grid-cols-2 gap-12 items-center px-4">
            <div>
                <div class="mb-4 font-serif text-4xl text-primary" data-aos="fade-right">
                    Our Clients
                </div>
                <div class="text-body
                    text-justify" data-aos="fade-right" data-aos-delay="400">
                    Since its establishment, SPA Factory Bali have woven a wide array of top notch clients. We
                    actualized their ideas, incorporated them with our current R&D knowledge, and make them alive.
                </div>
            </div>
            <div class="grid grid-cols-3 gap-2 lg:gap-4">
                <div class="mt-6">
                    @foreach ($clients->slice(0, 2) as $key => $client)
                        <div class="even:bg-secondary odd:bg-primary flex justify-center items-center p-2 lg:p-4 mb-2 h-28 md:h-48 lg:h-40"
                            data-aos="{{ $key === 0 ? 'fade-down' : 'fade-up' }}"
                            data-aos-delay="{{ ($key + 1) * 300 }}">
                            <img loading="lazy" src="{{ Storage::url($client->logo) }}"
                                class=" {{ $client->name !== 'Boemi Botanicals' ? 'brightness-0 invert' : '' }}"
                                alt="{{ $client->name }}">
                        </div>
                    @endforeach
                </div>
                <div>
                    @foreach ($clients->slice(2, 2) as $key => $client)
                        <div class="odd:bg-secondary even:bg-primary flex justify-center items-center p-4 mb-4 h-28 md:h-48 lg:h-40"
                            data-aos="{{ $key === 2 ? 'fade-down' : 'fade-up' }}"
                            data-aos-delay="{{ ($key + 1) * 300 }}">
                            <img loading="lazy" src="{{ Storage::url($client->logo) }}"
                                class="{{ $client->name !== 'Boemi Botanicals' ? 'brightness-0 invert' : '' }}"
                                alt="{{ $client->name }}">
                        </div>
                    @endforeach
                </div>
                <div class="mt-6">
                    @foreach ($clients->slice(4, 6) as $key => $client)
                        <div class="even:bg-secondary odd:bg-primary flex justify-center items-center p-2 lg:p-4 mb-2 h-28 md:h-48 lg:h-40"
                            data-aos="{{ $key === 4 ? 'fade-down' : 'fade-up' }}"
                            data-aos-delay="{{ ($key + 1) * 300 }}">
                            <img loading="lazy" src="{{ Storage::url($client->logo) }}"
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
                <div class="font-serif text-primary mb-2 text-2xl" data-aos="fade-right">
                    Product Catalog
                </div>
                <div class="text-body text-justify" data-aos="fade-right" data-aos-delay="400">
                    From retail, hotel amenities, to beauty skincare, we developed our clients ideas and created these
                    wonder of products.
                </div>
            </div>
            <div class="flex flex-wrap lg:flex-nowrap gap-8">
                <ul
                    class="w-full lg:w-1/4 clientele__catalog sticky top-0 flex lg:block overflow-auto whitespace-nowrap lg:whitespace-normal">
                    <li class="mr-6 lg:mr-0 client__tab" id="tab-hotel-amenities" data-aos="fade-down">
                        Hotel Amenities
                        <div class="line" data-aos="fade-right" data-aos-delay="400"></div>
                    </li>
                    <li class="mr-6 lg:mr-0 client__tab" id="tab-professional-retail-spa-products" data-aos="fade-down"
                        data-aos-delay="400">
                        Professional & Retail Spa Products
                        <div class="line" data-aos="fade-right" data-aos-delay="800"></div>
                    </li>
                    <li class="mr-6 lg:mr-0 client__tab" id="tab-beauty-skincare" data-aos="fade-right"
                        data-aos-delay="800">
                        Beauty Skincare
                        <div class="line" data-aos="fade-right" data-aos-delay="1200"></div>
                    </li>
                </ul>
                <div class="w-full lg:w-3/4 ">
                    <div class=" grid grid-cols-3 gap-4 client__content" id="hotel-amenities" data-aos="fade-left"
                        data-aos-delay="400">
                        @foreach ($hotel as $item)
                            <div class="client__item block"
                                id="{{ strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $item->name))) }}">
                                <div class="client__image">
                                    @foreach ((array) json_decode($item->images)[0] as $image)
                                        <a href="{{ Storage::url('client-images/' . $image) }}"
                                            class="product-image block absolute lef-t0 top-0 w-full h-full z-10">
                                            <img src="{{ Storage::url('client-images/' . $image) }}"
                                                alt="{{ $item->name }}">
                                            <div
                                                class="absolute bg-black bg-opacity-0 hover:bg-opacity-20 transition top-0 left-0 w-full h-full">
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                                <a href="{{ $item->link }}" target="_blank"
                                    class="mt-1 text-sm text-body hover:text-primary hover:font-semibold transition client__text">
                                    {{ $item->name }}
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class=" grid grid-cols-3 gap-6 client__content" id="professional-retail-spa-products"
                        data-aos="fade-left" data-aos-delay="400">
                        @foreach ($spa as $item)
                            <div class="client__item block"
                                id="{{ strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $item->name))) }}">
                                <div class="client__image">
                                    @foreach ((array) json_decode($item->images)[0] as $image)
                                        <a href="{{ Storage::url('client-images/' . $image) }}" class="product-image">
                                            <img src="{{ Storage::url('client-images/' . $image) }}"
                                                alt="{{ $item->name }}"></a>
                                    @endforeach
                                </div>
                                <a href="{{ $item->link }}" target="_blank"
                                    class="mt-1 text-sm text-body hover:text-primary hover:font-semibold transition client__text">
                                    {{ $item->name }}
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class=" grid grid-cols-3 gap-4 client__content" id="beauty-skincare" data-aos="fade-left"
                        data-aos-delay="400">
                        @foreach ($beauty as $item)
                            <div class="client__item block"
                                id="{{ strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $item->name))) }}">
                                <div class="client__image">
                                    @foreach ((array) json_decode($item->images)[0] as $image)
                                        <a href="{{ Storage::url('client-images/' . $image) }}" class="product-image">
                                            <img src="{{ Storage::url('client-images/' . $image) }}"
                                                alt="{{ $item->name }}"></a>
                                    @endforeach
                                </div>
                                <a href="{{ $item->link }}" target="_blank"
                                    class="mt-1 text-sm text-body hover:text-primary hover:font-semibold transition client__text">
                                    {{ $item->name }}
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function getUrlVars() {
            var vars = [],
                hash;
            var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
            for (var i = 0; i < hashes.length; i++) {
                hash = hashes[i].split('=');
                vars.push(hash[0]);
                vars[hash[0]] = hash[1];
            }
            return vars;
        }
        $(document).ready(function() {
            const type = getUrlVars()["type"];
            const client = getUrlVars()["client"];
            $('.client__content').hide();

            $('.product-image').magnificPopup({
                type: 'image'
            });

            if (type) {
                $(`#${type}`).show();
                $(`#tab-${type}`).addClass('active');
                setTimeout(() => {
                    $('html, body').animate({
                        scrollTop: $(`#tab-${type}`).offset().top - 80
                    }, 500);
                }, 200);
            }
            if (client) {
                $(`#${client}`).addClass("active");
                setTimeout(function() {
                    $(`#${client}`).removeClass('active');
                }, 9000)
                setTimeout(() => {
                    $('html, body').animate({
                        scrollTop: $(`#${client}`).offset().top - 80
                    }, 500);
                }, 200);
            }
        })

        $('.client__tab').click(function() {
            $('.client__tab').removeClass('active');
            $('.client__content').hide();
            $(this).addClass('active');
            const activeTab = $(this).attr('id').replace("tab-", '#');
            $(activeTab).fadeIn();

            var currentUrl = window.location.href;
            var url = new URL(currentUrl);
            url.searchParams.set("type", $(this).attr('id').replace("tab-", '')); // setting your param
            history.pushState({}, "", url)

            return false;
        });
    </script>
</x-guest-layout>
