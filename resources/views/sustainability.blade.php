<x-guest-layout>
    <div class="bg-light py-16 lg:py-24 mt-24 lg:mt-32">
        <div class="container grid lg:grid-cols-2 gap-12 px-4">
            <div>
                <div class="mb-4 font-serif text-4xl text-primary">
                    Sustainability
                </div>
                <div class="text-body text-justify">
                    The Sustainable Development Goals are the blueprint to achieve a better and more sustainable future
                    for
                    all.
                    They address the global challenges we face, including poverty, inequality, climate change,
                    environmental
                    degradation, peace and justice.
                </div>
            </div>
            <div class="flex flex-col justify-center">
                <img src="/images/sustainability.png" alt="Sustainable Development Goals">
            </div>
        </div>
    </div>
    <div class="section ">
        <div class="max-w-7xl m-auto">
            <div class="flex flex-wrap lg:flex-nowrap gap-8 lg:gap-16" x-data="{ open: 'all' }">
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
        </div>
    </div>
</x-guest-layout>
