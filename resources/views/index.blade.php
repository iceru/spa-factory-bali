<x-guest-layout>
    @section('title')
        Spa Factory Bali™
    @endsection
    <header class="home__header pb-20 pt-36">
        <div class="home__cta flex flex-col px-4 py-10 lg:p-0 md:flex-row container items-center" data-aos="fade-right">
            <div class="home__cta-text text-white p-0 !pl-0 lg:p-10 mb-8 lg:mb-0 md:w-[45%] lg:pr-10">
                <div class="font-serif text-4xl mb-2" data-aos="fade-right">
                    Spa Factory Bali™
                </div>
                <h1 class="text-xl mb-4 lg:w-[80%]" data-aos="fade-right" data-aos-duration="700">
                    A Pioneer in Bali's contract manufacturing for natural cosmetics.
                </h1>
                <x-button-link link="/contact-us" data-aos="fade-right" data-aos-duration="1000">
                    Contact Us
                </x-button-link>
            </div>
            <div class="home__cta-img w-full md:w-[55%] lg:pl-16 md:pl-4 flex justify-end">
                <div id="home-sliders">
                    @foreach ($sliders as $slider)
                        <img src="{{ Storage::url($slider->image) }}" class="w-full" alt="Spa Factory Bali">
                    @endforeach
                </div>
            </div>
        </div>
    </header>
    <div class="py-8 bg-primary text-center text-white font-serif text-xl" data-aos="fade-down"
        data-aos-easing="ease-in-sine" data-aos-offset="-400">
        <div data-aos="fade-down" data-aos-delay="400" data-aos-offset="-400">
            Professional, Traceable, Sustainable-Focused, High Quality Bali Contract Manufacturer
        </div>
    </div>
    <div class="section container">
        <div class="text-center font-serif text-primary mb-6 text-4xl" data-aos="fade-down">
            Spa Factory Bali™
        </div>
        <p class="text-justify text-body m-0" data-aos="fade-down" data-aos-delay="400">
            Spa Factory Bali is a renowned, professional contract manufacturer in Bali with a production facility that
            complies with Good Manufacture Practice standards. As an established, constantly improving contract
            manufacturer, we develop unique, requested products for our clientele. We manufacture various products in
            the cosmetic category. This ranges from professional spa products, personal care, wellness products and
            beauty skincare. The service develops new formulas or modify pre-existing high-quality product base on each
            client’s requirements.
        </p>
    </div>
    <div class="section container grid md:grid-cols-2 items-center">
        <div class="text-justify text-body  md:pr-16 order-2 md:order-1" data-aos="fade-right" data-aos-delay="400"
            data-aos-offset="0">
            Spa Factory Bali is the optimal choice for a company who decides to launch a new product line and may not
            have the fundamental materials to produce it autogenously as it may incur in overpriced production or a lack
            of business foresight in understanding the risk. In this process, products are made over a mutually agreed
            period of time and feasible for businesses who want a steady, reliable source as a limited part of their
            manufacturing process.
        </div>
        <div class="mb-6 md:mb-0 order-1 md:order-2" data-aos="fade-left" data-aos-delay="400" data-aos-offset="0">
            <img loading="lazy" src="/images/home-about.png" alt="Proses Produksi Spa Factory Bali" />
        </div>
    </div>

    <div class="section bg-radial text-white relative" data-aos="fade-down" data-aos-duration="800">
        <div class="absolute top-1/2 transform -translate-y-1/2 left-4">
            <img loading="lazy" src="/images/bg-flower.png" class="w-[80%]" alt="Decoration Flower">
        </div>
        <div class="text-center mb-3 font-serif text-3xl" data-aos="fade-down" data-aos-delay="400">
            Our Products
        </div>
        <div class="text-center px-4 lg:w-3/5 m-auto mb-12" data-aos="fade-down" data-aos-delay="600">
            We are open to partner with brands/companies who are searching for a certified chemist to help with product
            development and production for:
        </div>
        <div class="grid md:grid-cols-3 gap-4 container lg:gap-12">
            @foreach ($products as $key => $product)
                <a href="/clientele?type={{ strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $product->title))) }}"
                    class="block group transition duration-300">
                    <div class="drop-shadow-xl" data-aos="fade-right" data-aos-delay="{{ ($key + 1) * 400 }}">
                        <img loading="lazy" src="{{ Storage::url($product->image) }}" class="w-full"
                            alt="{{ $product->title }}" />
                        <div class="bg-white bg-opacity-30 pt-4 pb-8 px-6 group-hover:bg-opacity-40 transition">
                            <div class="text-center font-bold text-lg mb-2">
                                {{ $product->title }}
                            </div>
                            <div class="text-center">
                                {!! $product->description !!}
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <div class="section container">
        <div class="flex flex-col items-center justify-between">
            <div class="text-center mb-8">
                <div class="text-primary font-serif text-3xl mb-4" data-aos="fade-down">
                    Certifications
                </div>
                <div class="text-body" data-aos="fade-down" data-aos-delay="400">
                    Spa Factory Bali has earned a Fully Certified GMP (Cosmetics Good Manufacturing Practice) under BPOM
                    (Indonesian Agency of Drug & Food Control), Halal under MUI (Indonesian Ulema Council) and ISO
                    9001:2015 for quality assurance. We are also a member of RSPO (Roundtable on Sustainable Palm Oil).
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="flex flex-col justify-center items-center" data-aos="fade-right" data-aos-delay="800">
                    <img loading="lazy" src="/images/bpom.png" class="h-40 w-full object-contain"
                        alt="mutu certification international" />
                    <div class="text-body text-sm text-center mt-2 leading-tight">
                        BPOM: B-PW. 03.01.44.441.03.21.01.1398 - 1403
                    </div>
                </div>
                <div class="flex justify-center" data-aos="fade-right" data-aos-delay="400">
                    <img loading="lazy" src="/images/halal.png" class="h-40 w-full object-contain"
                        alt="mutu certification international" />
                </div>

                <div class="flex justify-center" data-aos="fade-left" data-aos-delay="400">
                    <img loading="lazy" src="/images/SERT.png" class="h-40 w-full object-contain"
                        alt="mutu certification international" />
                </div>

                <div class="flex flex-col items-center justify-center" data-aos="fade-left" data-aos-delay="800">
                    <img loading="lazy" src="/images/rspo.png" class="h-40 w-full object-contain"
                        alt="mutu certification international" />
                    <div class="text-body text-sm text-center mt-1 leading-tight">
                        RSPO: 9-4991-23-000-00
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="section text-white bg-quote bg-no-repeat bg-cover">
        <div class="container grid md:grid-flow-col items-center gap-6">
            <div class="flex justify-center lg:block" data-aos="fade-right" data-aos-duration="400">
                <img loading="lazy" src="/images/home-quote-2.png" class="w-28" alt="Nature">
            </div>
            <div class="text-justify font-serif text-xl lg:text-2xl" data-aos="fade-right" data-aos-delay="400">
                Our ultimate resources, combined with an esteemed development team works collaboratively with our
                clients to manufacture existing formulations or to create new products that satisfy the customer and
                advance the competitive edge.
            </div>
        </div>
    </div>

    <div class="section container grid lg:grid-cols-2 gap-9">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 h-1/2" data-aos="fade-right">
            @foreach ($clients as $client)
                <a href="/clientele?type={{ strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $client->product->title))) }}&client={{ strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $client->name))) }}"
                    class="block odd:bg-secondary even:bg-primary hover:opacity-80 transition">
                    <div class=" flex justify-center items-center h-full ">
                        <img loading="lazy" src="{{ Storage::url($client->logo) }}" alt="{{ $client->name }}"
                            class="min-h-[164px] object-contain {{ $client->name !== 'Boemi Botanicals' ? 'brightness-0 invert' : '' }}">
                    </div>
                </a>
            @endforeach
        </div>
        <div>
            <div class="font-serif text-primary text-2xl mb-4" data-aos="fade-left">
                Partner with Brands in Creating Premium Natural Cosmetics
            </div>
            <div class="text-justify text-body" data-aos="fade-left" data-aos-duration="400">
                Integrating local wisdom & utilizing Indonesian active ingredients are our main focus, thus creating
                brilliant, natural synergies in every product that we created.
                <br><br>
                We partner with brands and create natural cosmetics that are clean, safe and effective, especially for
                customers who value eco-friendliness and wellness. From our roots in spa products, we are here to help
                you build your own proprietary natural formulas. Our manufacturing experience of over two decades are at
                your disposal. Simply bring your ideas and talk to us, and we will bring chemistry aptitude, resources
                and manufacturing process to bring your ideas to fruition.
            </div>

            <x-button-link link="/clientele"
                class="mt-4 border-primary text-primary hover:bg-primary hover:text-white" data-aos="fade-left"
                data-aos-duration="800">
                Learn More
            </x-button-link>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#home-sliders').slick();
        });
    </script>
</x-guest-layout>
