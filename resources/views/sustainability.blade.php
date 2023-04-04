<x-guest-layout>
    <div class="bg-light py-16 lg:py-24 mt-24 lg:mt-32" x-data="{ open: false }">
        <div class="container grid lg:grid-cols-2 gap-12 px-4">
            <div>
                <div class="mb-4 font-serif text-4xl text-primary">
                    Sustainability
                </div>
                <div class="text-body text-justify mb-4">
                    The Sustainable Development Goals are the blueprint to achieve a better and more sustainable future
                    for
                    all.
                    They address the global challenges we face, including poverty, inequality, climate change,
                    environmental
                    degradation, peace and justice.
                </div>
                <x-button @click="open = true"
                    class="text-primary border-primary hover:bg-primary hover:text-white !border font-bold">Request
                    GRI Form
                </x-button>
            </div>
            <div class="flex flex-col justify-center">
                <img src="/images/sustainability.png" alt="Sustainable Development Goals">
            </div>
        </div>

        <div x-cloak x-show="open == true">
            <div class="fixed w-screen h-screen top-0 left-0 bg-black bg-opacity-40 z-30" @click="open = false"></div>
            <div
                class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-8 bg-body w-[50vw] rounded-lg shadow-lg z-40">
                <div class="flex justify-between items-center mb-6">
                    <div class="font-serif text-primary text-3xl">
                        Request GRI Form
                    </div>
                    <div class="cursor-pointer" @click="open = false">
                        <img src="/images/close-gri.png" alt="Close">
                    </div>
                </div>
                <form>
                    <x-text-input
                        class="mb-6 !border-b border-t-0 border-l-0 border-r-0 pl-0 !border-primary rounded-none bg-transparent w-full"
                        placeholder="Full Name" name="name" />
                    <x-text-input
                        class="mb-6 !border-b border-t-0 border-l-0 border-r-0 pl-0 !border-primary rounded-none bg-transparent w-full"
                        placeholder="Email" type="email" name="email" />
                    <x-text-input
                        class="mb-6 !border-b border-t-0 border-l-0 border-r-0 pl-0 !border-primary rounded-none bg-transparent w-full"
                        placeholder="Company" name="company" />
                    <x-text-input
                        class="mb-6 !border-b border-t-0 border-l-0 border-r-0 pl-0 !border-primary rounded-none bg-transparent w-full"
                        placeholder="Job Title" name="job_title" />
                    <textarea class="bg-transparent border-0 border-b !border-primary w-full pl-0 outline-none mb-6" rows="6"
                        placeholder="Usage for" name="usage"></textarea>
                    <x-button id="gri-submit"
                        class="text-primary border-primary hover:bg-primary hover:text-white !border">
                        Send
                    </x-button>
                </form>
            </div>
        </div>
    </div>


    <div class="section">
        <div class="container" x-data="{ open: 'all' }">
            <div class="flex flex-wrap lg:flex-nowrap gap-8 lg:gap-16">
                <div class="order-2 lg:order-1 w-full">
                    <div x-cloak x-show.important="open == 'all'">
                        <div class="font-serif text-3xl mb-4">
                            Sustainability in Spa Factory Bali : “Farm To Beauty”
                        </div>
                        <div class="text-body text-justify">
                            Spa Factory Bali have come to a realization that beauty products may be effective and
                            convenient
                            to
                            use, but we should also consider the implications of such innovations. As with most
                            consumables,
                            cosmetics also leave behind an environmental impact that we must consider to avoid.
                            <br> <br>
                            Sustainability means taking into account social, environmental and economical aspects
                            throughout
                            the
                            whole production chain of a product to ensure an altogether positive impact. When it comes
                            to
                            natural cosmetics and beauty products, sustainability does not only refer to the way
                            ingredients
                            are
                            sourced or how the product is produced, but also to the materials used during its production
                            and
                            post-production.
                            <br> <br>
                            “Farm to beauty” approach is an essential part of Spa Factory Bali Label criteria, which is
                            in
                            line
                            with the sustainable actions and strategies carried out from the blueprint. We aspire to
                            greatly
                            contribute to the transition towards the use of more sustainable ingredients and materials
                            for
                            the
                            production of natural and organic cosmetics.
                        </div>
                    </div>
                    @foreach ($sustains as $sustain)
                        <div class="flex w-full h-full relative" x-cloak
                            x-show.important="open == {{ $sustain->number }}">
                            <div class="sustain__sgd-item flex-col items-center justify-between font-bold p-6 gap-12
                        text-white cursor-pointer border-2 border-white hidden lg:flex"
                                style="background-color: {{ $sustain->bg_color }}">
                                <div class="text-3xl ml-0.5">
                                    {{ $sustain->number }}
                                </div>
                                <div class="text-lg flex items-center justify-center w-4 sustain__sgd-text">
                                    {{ $sustain->title }}
                                </div>
                            </div>
                            <div style="background-color: {{ $sustain->bg_color }}"
                                class="text-white py-14 px-4 lg:p-4 flex flex-col justify-center w-full">
                                <div class="absolute top-4 right-2 lg:right-12 lg:top-12 cursor-pointer"
                                    @click="open = 'all'">
                                    <img src="/images/x-icon.png" alt="X">
                                </div>
                                <div class="font-serif text-3xl mb-4">
                                    SGD {{ $sustain->number }} - {{ $sustain->title }}
                                </div>
                                <div class="text-white text-justify sustain__sgd-desc">
                                    {!! $sustain->description !!}
                                </div>
                                <div class="mt-4">
                                    <x-button>Gallery</x-button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="flex flex-col lg:flex-row justify-end order-1 lg:order-2">
                    @foreach ($sustains as $sustain)
                        <div class="sustain__sgd-item flex lg:flex-col items-center justify-start lg:justify-between font-bold p-6 gap-4 lg:gap-12 text-white cursor-pointer"
                            style="background-color: {{ $sustain->bg_color }}" @click="open = {{ $sustain->number }}"
                            x-cloak x-show.important="open != {{ $sustain->number }}">
                            <div class="text-3xl ml-0.5">
                                {{ $sustain->number }}
                            </div>
                            <div class="text-lg flex items-center justify-center lg:w-4 sustain__sgd-text">
                                {{ $sustain->title }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="mt-12" id="detail">
                <div x-cloak x-show.important="open == 'all'">
                    <img src="/images/sustain-all.png" class="w-full" alt="">
                </div>
                @foreach ($sustains as $sustain)
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4" x-cloak
                        x-show.important="open == {{ $sustain->number }}" :class="open == 12 ? 'hidden' : ''">
                        @foreach (json_decode($sustain->images) as $image)
                            <div>
                                <img src="{{ Storage::url('sustainability-images/' . $image) }}" alt="">
                            </div>
                        @endforeach
                    </div>
                @endforeach
                <div x-show="open == 12">

                    <div id="map" class="h-[70vh] mt-4"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const myCustomColour = '#588157'

        const markerHtmlStyles = `
        background-color: ${myCustomColour};
        width: 2rem;
        height: 2rem;
        display: block;
        left: -1.5rem;
        top: -1.5rem;
        position: relative;
        border-radius: 2rem 2rem 0;
        transform: rotate(45deg);
        border: 2px solid #FFFFFF`

        const customIcon = L.divIcon({
            className: "my-custom-pin",
            iconAnchor: [0, 16],
            labelAnchor: [-6, 0],
            popupAnchor: [0, -36],
            html: `<span style="${markerHtmlStyles}" />`
        })
        const map = L.map('map', {
            center: [-2.600029, 118.015776],
            zoom: 5,
        });

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        const acehMarker = L.marker([4.7082999072184055, 96.7747731617], {
            icon: customIcon
        }).addTo(map);
        const humbangMarker = L.marker([2.3671944001509573, 98.61259464718282], {
            icon: customIcon
        }).addTo(map);
        const solokMarker = L.marker([-0.9261140491974267, 100.79096528881126], {
            icon: customIcon
        }).addTo(map);
        const solok2 = L.marker([-0.998796271104017, 100.88368875855421], {
            icon: customIcon
        }).addTo(map);
        const solok3 = L.marker([-0.9907139211089883, 100.94373812322867], {
            icon: customIcon
        }).addTo(map);
        const sintangMarker = L.marker([0.05985835748876844, 111.49146412724187], {
            icon: customIcon
        }).addTo(map);
        const kidulMarker = L.marker([-7.9816017238180725, 110.63342654505128], {
            icon: customIcon
        }).addTo(map);
        const bantulMarker = L.marker([-7.887195532679497, 110.30801476723916], {
            icon: customIcon
        }).addTo(map);
        const keduMarker = L.marker([-7.259441921713689, 110.13192172645564], {
            icon: customIcon
        }).addTo(map);
        const tawangmanguMarker = L.marker([-7.664003170063631, 111.13580194296293], {
            icon: customIcon
        }).addTo(map);
        const tawangmangu2 = L.marker([-7.674362294232823, 111.15886048098295], {
            icon: customIcon
        }).addTo(map);
        const semarangMarker = L.marker([-7.006327874884746, 110.43526091798493], {
            icon: customIcon
        }).addTo(map);
        const garutMarker = L.marker([-7.2179817942713616, 107.90311664302058], {
            icon: customIcon
        }).addTo(map);
        const morowaliMarker = L.marker([-2.7838901948757715, 121.94855947127031], {
            icon: customIcon
        }).addTo(map);
        const banyuwangiMarker = L.marker([-8.221920525528311, 114.31777969717018], {
            icon: customIcon
        }).addTo(map);
        const karangasem = L.marker([-8.436163973666769, 115.60816166133505], {
            icon: customIcon
        }).addTo(map);
        const karangasem2 = L.marker([-8.336853929404592, 115.53839843305542], {
            icon: customIcon
        }).addTo(map);
        const amed = L.marker([-8.343459639877379, 115.64185926731695], {
            icon: customIcon
        }).addTo(map);
        const tabanan = L.marker([-8.387598885555217, 115.05746688392848], {
            icon: customIcon
        }).addTo(map);
        const tabanan2 = L.marker([-8.40288285920005, 114.98605575220621], {
            icon: customIcon
        }).addTo(map);
        const gianyar = L.marker([-8.41162883816791, 115.27078413309098], {
            icon: customIcon
        }).addTo(map);
        const klungkung = L.marker([-8.55526341492659, 115.42226953624753], {
            icon: customIcon
        }).addTo(map);
        const bangli = L.marker([-8.29864879846668, 115.34567904731064], {
            icon: customIcon
        }).addTo(map);
        const jimbaran = L.marker([-8.791203287408736, 115.1640978270128], {
            icon: customIcon
        }).addTo(map);

        const popupTemplate = (name, place, image, spacing) => {
            return `<div class="mb-2 text-center">${name} ${spacing ? '<br />' : ''} (${place})</div>
            <div class="flex gap-2 justify-center"><img class="h-20 mx-auto" src="/images/map/${image}"></div>`
        }

        acehMarker.bindPopup(popupTemplate('Nutmeg EO', 'Aceh', 'aceh.png', false));
        humbangMarker.bindPopup(popupTemplate('Benzoin EO', 'Humbang Hasundutan, North Sumatera', 'humbang.png', true));
        solokMarker.bindPopup(popupTemplate('Organic Ginger EO', 'Solok, West Sumatera', 'solok-ginger.png', true));
        solok2.bindPopup(popupTemplate('Organic Lemongrass EO', 'Solok, West Sumatera', 'solok-lemon.png', true));
        solok3.bindPopup(popupTemplate('Organic Citronella EO', 'Solok, West Sumatera', 'solok-citro.png', true));
        sintangMarker.bindPopup(popupTemplate('Illipe Butter', 'Sintang, West Kalimantan', 'sintang.png', true));
        kidulMarker.bindPopup(popupTemplate('Cajeput EO', 'Gunung Kidul, Yogyakarta', 'kidul.png', true));
        bantulMarker.bindPopup(popupTemplate('Coriander EO', 'Bantul, Yogyakarta', 'bantul.png', true));
        keduMarker.bindPopup(popupTemplate('Key Lime EO', 'Kedu, Central Java', 'kedu.png', true));
        tawangmanguMarker.bindPopup(popupTemplate('Rosemary EO', 'Tawangmangu, Central Java',
            'tawangmangu.png', true));
        tawangmangu2.bindPopup(popupTemplate('Palmarosa EO', 'Tawangmangu, Central Java',
            'tawangmangu-palmarosa.png', true));
        semarangMarker.bindPopup(popupTemplate('Rice Husk Paper', 'Semarang, Central Java', 'semarang.png', true));
        garutMarker.bindPopup(popupTemplate('Vetiver EO', 'Garut, West Java', 'garut.png', true));
        banyuwangiMarker.bindPopup(popupTemplate('Moringa Oil', 'Banyuwangi, East Java', 'banyuwangi.png', true));
        morowaliMarker.bindPopup(popupTemplate('Patchouli EO', 'Morowali Utara, Central Sulawesi', 'morowali.png', true));
        karangasem.bindPopup(popupTemplate('Calendula Extract', 'Karangasem, Bali', 'karangasem-calendula.png', true));
        karangasem2.bindPopup(popupTemplate('Aloe Vera Extract', 'Karangasem, Bali', 'karangasem.png', true));
        amed.bindPopup(popupTemplate('Sea Salt', 'Amed, Bali', 'amed.png', true));
        tabanan.bindPopup(popupTemplate('Cocoa Butter', 'Tabanan, Bali', 'tabanan.png', true));
        tabanan.bindPopup(popupTemplate('Cold Pressed Cocount Oil', 'Tabanan, Bali', 'tabanan-coconut.png', true));
        gianyar.bindPopup(popupTemplate('Piper Betle Extract', 'Gianyar, Bali', 'gianyar.png', true));
        klungkung.bindPopup(popupTemplate('Prickly Pear Extract', 'Klungkung, Bali', 'klungkung.png', true));
        bangli.bindPopup(popupTemplate('Bamboo Packaging', 'Bangli, Bali', 'bangli.png', true));
        jimbaran.bindPopup(popupTemplate('Coconut Leaf Box', 'Jimbaran, Bali', 'jimbaran.png', true));
    </script>

</x-guest-layout>
