<x-guest-layout>
    <div class="about__header flex flex-col p-4 lg:px-0 md:py-8 justify-end" data-aos="fade-down">
        <div class="text-white container z-10 relative">
            <div class="lg:w-2/4">
                <p class="lg:text-lg" data-aos="fade-right" data-aos-delay="400">Our Message is Simple:</p>
                <div class="font-serif text-2xl lg:text-3xl" data-aos="fade-right" data-aos-delay="800">
                    We aim to be kind to the environment and respect all living beings – no testing on animals.
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container grid lg:grid-cols-2 gap-4">
            <div class="p-0 lg:p-6 lg:pl-0">
                <img loading="lazy" src="/images/about/about-1.jpg" alt="About Spa Factory Bali"
                    data-aos="fade-right" />
            </div>
            <div class="bg-diamond text-white flex flex-col justify-center p-8 " data-aos="fade-left">
                <div class="font-serif text-2xl mb-3" data-aos="fade-left" data-aos-delay="400">
                    About Spa Factory Bali
                </div>
                <p class="text-gray-300 text-justify" data-aos="fade-left" data-aos-delay="800">
                    We started out as a cottage industry within a small house in 2002 targeted for tourist attraction.
                    Back then, we only made simple products like scrub powder, massage oil and bath salt. We expanded
                    into a more advanced and innovated cosmetic manufacturer as we relocated to our new factory to
                    comply with Good Manufacture Practice standards and stay relevant to the industrial trend in 2015.
                    Currently, we choose to produce handcrafted natural cosmetics to open job opportunities and to
                    utilise local talents, employing more than 35 staff, the majority of which are women.
                </p>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container grid md:grid-cols-2 gap-4">
            <div class="flex flex-col justify-center p-0 md:p-4 pl-0 order-2 md:order-1">
                <div class="font-serif text-2xl mb-3 text-primary" data-aos="fade-right">
                    Empowering Women
                </div>
                <p class="text-justify text-body " data-aos="fade-right" data-aos-delay="400">
                    Spa Factory Bali is a company run by women who are determined to make a difference by empowering
                    women and supporting the local economy. Thus, we are employing many mothers with children who need
                    the income to support the family from the surrounding area. We support their determination to make a
                    living, hence, we facilitate them to bring their child with them to work.
                </p>
            </div>
            <div class="p-0 md:p-6 md:pr-0 order-1 md:order-2">
                <img loading="lazy" src="/images/about/about-2.png" class="w-full" alt="Empowering Women"
                    data-aos="fade-left" data-aos-delay="400" />
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container grid md:grid-cols-2 gap-4">
            <div class="p-0 md:p-6 md:pl-0">
                <img loading="lazy" src="/images/about/about-3.jpg" alt="About Spa Factory Bali"
                    data-aos="fade-right" />
            </div>
            <div class="bg-diamond text-white flex flex-col justify-center p-8 " data-aos="fade-left">
                <div class="font-serif text-2xl mb-3" data-aos="fade-left" data-aos-delay="400">
                    Learning Organisation
                </div>
                <p class="text-gray-300 text-justify" data-aos="fade-left" data-aos-delay="800">
                    Aiming to always proactively achieve incremental improvements to our everyday manufacturing process,
                    we proudly adapt Kaizen philosophy. We believe that it is important to create a culture of
                    continuous improvement where all employees are actively engaged in improving the company and stick
                    with its tremendous long-term value
                </p>
            </div>
        </div>
    </div>
    <div class="section bg-linear" data-aos="fade-down">
        <div class="container" x-data="{ open: '', modal: false }">
            <div class="font-serif text-white mb-4 text-2xl text-center" data-aos="fade-down" data-aos-delay="300">
                Transparent and Traceable Production Process
            </div>
            <div class="text-white text-center" data-aos="fade-down" data-aos-delay="600">
                In line with the trend of ‘Farm to Beauty’, Spa Factory Bali Provides transparency – traceability of
                production process and supply chain to ensure the purity and quality of active ingredients used.
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-4 mt-8 justify-between about__traceWrapper" data-aos="fade-down"
                data-aos-delay="900">
                <div class="z-10 about__process mb-12 text-center lg:mb-0 cursor-pointer"
                    :class="open == 'process1' ? 'active' : ''" @click="open = 'process1'; modal = true">
                    <div
                        class="lg:flex text-center lg:text-left text-white mb-4 font-serif items-center justify-center block whitespace-nowrap">
                        {{-- <div class="mb-2 lg:mb-0 flex justify-center lg:mr-3">
                            <img loading="lazy" src="/images/about/icon-leaf.png" class="h-6" alt="">
                        </div> --}}
                        Sacha Inci Plantation
                    </div>
                    <div>
                        <img loading="lazy" src="/images/about/Plantation1.jpg" alt=""
                            class="w-28 h-28 lg:w-40 lg:h-40 object-cover rounded-full about__process-image mx-auto">
                    </div>
                </div>
                <div class="z-10 about__process mb-12 lg:mb-0 cursor-pointer" id="process-2"
                    :class="open == 'process2' ? 'active' : ''" @click="open = 'process2'; modal = true">
                    <div
                        class="lg:flex text-center lg:text-left text-white mb-4 font-serif items-center justify-center block whitespace-nowrap">
                        {{-- <div class="mb-2 lg:mb-0 flex justify-center lg:mr-3">
                            <img loading="lazy" src="/images/about/icon-oil.png" class="h-6" alt="">
                        </div> --}}
                        Oil Extraction
                    </div>
                    <div>
                        <img loading="lazy" src="/images/about/oil-1.jpg" alt=""
                            class="w-28 h-28 lg:w-40 lg:h-40 object-cover rounded-full about__process-image mx-auto">
                    </div>
                </div>
                <div class="z-10 about__process process-3 cursor-pointer" :class="open == 'process3' ? 'active' : ''"
                    @click="open = 'process3'; modal = true">
                    <div
                        class="lg:flex text-center lg:text-left text-white mb-4 font-serif items-center justify-center block whitespace-nowrap">
                        {{-- <div class="mb-2 lg:mb-0 flex justify-center lg:mr-3">
                            <img loading="lazy" src="/images/about/icon-industry.png" class="h-6" alt="">
                        </div> --}}
                        Cosmetic Manufacturing
                    </div>
                    <div>
                        <img loading="lazy" src="/images/about/manufacture.jpg" alt=""
                            class="w-28 h-28 lg:w-40 lg:h-40 object-cover rounded-full about__process-image mx-auto">
                    </div>
                </div>
                <div class="z-10 about__process cursor-pointer" :class="open == 'process4' ? 'active' : ''"
                    @click="open = 'process4'; modal = true">
                    <div
                        class="lg:flex text-center lg:text-left text-white mb-4 font-serif items-center justify-center block whitespace-nowrap">
                        {{-- <div class="mb-3 flex justify-center lg:mr-3">
                            <img loading="lazy" src="/images/about/icon-lotion.png" class="h-6" alt="">
                        </div> --}}
                        Finished Product
                    </div>
                    <div>
                        <img loading="lazy" src="/images/about/finished.jpg" alt=""
                            class="w-28 h-28 lg:w-40 lg:h-40 object-cover rounded-full about__process-image mx-auto">
                    </div>
                </div>
                <div class="lastLine"></div>
                <div class="topLine"></div>
            </div>
            <div class="fixed top-0 left-0 w-screen h-screen bg-black bg-opacity-60 z-20" @click="modal = false"
                x-cloak x-show="modal"></div>
            <div x-cloak x-show="modal"
                class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[90vw] lg:w-[60vw] max-h-[90vh] overflow-auto h-auto bg-body p-10 rounded-xl z-20">
                <div class="absolute right-10 top-10 cursor-pointer z-10" @click="modal = false">
                    <img loading="lazy" src="/images/close-gri.png" alt="Close">
                </div>
                <div class="about__process-large relative" x-cloak x-show="open == 'process1'">
                    <div class="font-serif text-2xl mb-4 text-primary" data-aos="fade-right" data-aos-delay="400">
                        Sacha Inci Plantation
                    </div>
                    <div class="text-body mb-4" data-aos="fade-right" data-aos-delay="800">
                        <ul>
                            <li>
                                Originated from the Amazon rainforest in Peru, Sacha Inchi (Plukenetia volubilis) was
                                recently cultivated in Indonesia.
                            </li>
                            <li>
                                The plant reaches a height of 2 metres with heart-shaped leaves. It is a vine that needs
                                a support structure to produce seeds throughout the year.
                            </li>
                            <li>
                                The seeds of inchi have a high protein and oil content. The oil is rich in the essential
                                fatty acids omega-3 linolenic acid, omega-6 linolenic acid and omega-9. For cosmetics
                                purpose, the oil is suitable for deep moisturising and anti-aging treatment.
                            </li>
                            <li>
                                We work with a group of farmers in Tabanan, Bali who cultivate sacha inchi in their
                                garden organically.
                            </li>
                            <li>
                                The harvest of the ripen fruits are sun-dried and seeds are peeled from the pulp.
                            </li>
                        </ul>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="about__image-square">
                            <img loading="lazy" src="/images/about/Plantation1.jpg" alt="Sacha Inci Plantation">
                        </div>
                        <div class="grid gap-4">
                            <div class="about__image-half">
                                <img loading="lazy" src="/images/about/Plantation2.jpg" alt="Sacha Inci Plantation">
                            </div>
                            <div class="about__image-half">
                                <img loading="lazy" src="/images/about/Plantation3.jpg" alt="Sacha Inci Plantation">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about__process-large relative" x-cloak x-show="open == 'process2'">
                    <div class="font-serif text-2xl mb-4 text-primary" data-aos="fade-right" data-aos-delay="400">
                        Oil Extraction
                    </div>
                    <div class="text-body mb-4" data-aos="fade-right" data-aos-delay="800">
                        <ul>
                            <li>
                                Dried sancha seeds need to be processed before the extraction by cracking open the
                                shell.
                            </li>
                            <li>
                                The nuts are then lightly roasted to reach approximately under 60° C before pressing.
                            </li>
                            <li>
                                It is manually pressed using hydraulic pressing machines operated by Balinese ladies,
                                thus resulting in crude oil.
                            </li>
                            <li>
                                The oil needs to be rested and filtered to remove impurities.
                            </li>
                            <li>
                                We work with UD Restu Bali in Tabanan for the oil extraction process not only for Sancha
                                Inchi but also cold pressed Coconut oil (VCO), Moringa oil (Moringa oleifera), Candlenut
                                (Aleurites moluccanus) oil and our local walnut, Kenari (Canarium ovatum) oil.
                            </li>
                        </ul>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="about__image-square">
                            <img loading="lazy" src="/images/about/oil-1.jpg" alt="Oil Extraction">
                        </div>
                        <div class="grid gap-4">
                            <div class="about__image-half">
                                <img loading="lazy" src="/images/about/oil-2.jpg" alt="Oil Extraction">
                            </div>
                            <div class="about__image-half">
                                <img loading="lazy" src="/images/about/oil-3.jpg" alt="Oil Extraction">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about__process-large relative" x-cloak x-show="open == 'process3'">
                    <div class="font-serif text-2xl mb-4 text-primary" data-aos="fade-right" data-aos-delay="400">
                        Cosmetic Manufacturing
                    </div>
                    <div class="text-body mb-4" data-aos="fade-right" data-aos-delay="800">
                        <ul>
                            <li>
                                Sacha inchi oil is an essential active ingredient in many facial products such as Face
                                Serum, Daily Moisturiser, Night Cream and Mask.
                            </li>
                            <li>
                                Formulated with other rich vegetable oil, herbal extract and essential oil for deep
                                moisturising and anti-aging benefits. It well absorbed to restores and improve skin
                                texture without sticky feeling.
                            </li>
                            <li>
                                Handcrafted in our production facility by local women with high GMP standard.
                            </li>
                        </ul>
                    </div>
                    <div>
                        <img loading="lazy" src="/images/about/manufacture.jpg" alt="Cosmetic Manufacturing">
                    </div>
                </div>
                <div class="about__process-large relative" x-cloak x-show="open == 'process4'">
                    <div class="font-serif text-2xl mb-4 text-primary" data-aos="fade-right" data-aos-delay="400">
                        Finished Product
                    </div>
                    <div class="text-body mb-4" data-aos="fade-right" data-aos-delay="800">
                        <ul>
                            <li>
                                Sacha inchi is commonly used in facial products with regenerative benefit such as Face
                                Moisturiser and Face Serum.

                            </li>
                            <li>
                                Deep moisture the skin and well absorbed, without the heaviness and greasy feeling.
                            </li>
                            <li>
                                Handcrafted in our production facility by local women with high GMP standard.
                            </li>
                        </ul>
                    </div>
                    <div>
                        <img loading="lazy" src="/images/about/finished.jpg" alt="Finished Product">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container grid md:grid-cols-2 gap-4">
            <div class="flex flex-col justify-center p-0 md:p-4 pl-0 order-2 md:order-1">
                <div class="font-serif text-2xl mb-3 text-primary " data-aos="fade-right">
                    Following European Cosmetic Safety Guidance
                </div>
                <p class="text-justify text-body " data-aos-delay="400" data-aos="fade-right">
                    In-house R&D team with cosmetic competency and a formulator consultant in Netherland. We used only
                    natural ingredients and naturally derivative chemicals. Non-toxic, harmful chemicals and animal
                    derivative ingredients.
                </p>
            </div>
            <div class="p-0 md:p-6 md:pr-0 order-1 md:order-2">
                <img loading="lazy" src="/images/about/about-4.png" class="w-full"
                    alt="Following European Cosmetic Safety Guidance" data-aos="fade-left" data-aos-delay="400" />
            </div>
        </div>
    </div>
</x-guest-layout>
