<x-guest-layout>
    @section('title')
        Contact Us - Spa Factory Bali™
    @endsection
    <div class="bg-light py-16 pt-44">
        <div class="container px-4 grid lg:flex gap-12 items-center">
            <div>
                <div class="mb-4 font-serif text-4xl text-primary" data-aos="fade-right">
                    Contact Us
                </div>
                <div class="text-body text-justify lg:w-[75%]" data-aos="fade-right" data-aos-delay="400">
                    Get in touch with us for any questions or concerns - we're here to help!
                </div>
            </div>
            <div data-aos="fade-left" class="lg:w-[50%]">
                <img loading="lazy" src='/images/contact/gedung.jpg' alt="Contact Us" />
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="grid lg:grid-cols-2">
                <div class="mb-12 lg:mb-0">
                    <div class="font-serif text-primary text-3xl mb-4" data-aos="fade-right" data-aos-delay="400">
                        Spa Factory Bali
                    </div>
                    <div class="mb-4 flex justify-between" data-aos="fade-right" data-aos-delay="800">
                        <div class="flex">
                            <div class="mr-2.5 mt-1.5">
                                <img loading="lazy" src="/images/contact/icon-home.png" alt="Icon Address">
                            </div>
                            <div>
                                Jl. Pura Pengulapan, No 3 <br>
                                Ungasan 80361, <br>
                                Bali - Indonesia
                            </div>
                        </div>
                        <div>
                            <div class="flex">
                                <div class="mr-2.5 mt-1.5">
                                    <img loading="lazy" src="/images/contact/icon-phone.png" alt="Icon Phone">
                                </div>
                                <div>
                                    <a href="tel:+6281238003803" class="hover:text-primary">
                                        +62 361 4480255
                                    </a> <br>
                                    <a href="tel:+6285100198213" class="hover:text-primary">
                                        +62 81 238 003 803
                                    </a>
                                </div>
                            </div>
                            <div class="flex mt-2">
                                <div class="mr-2.5 mt-1.5">
                                    <img loading="lazy" src="/images/contact/icon-mail.png" alt="Icon Email">
                                </div>
                                <div>
                                    <a href="mailto:sales@spafactorybali.biz" class="hover:text-primary">
                                        sales@spafactorybali.biz
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="width: 100%" data-aos="fade-right" data-aos-delay="1200">
                        <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Spa%20Factory%20Bali,%20Jl.%20Pura%20Pengulapan,%20Ungasan,%20Badung%20Regency,%20Bali+(Spa%20Factory%20Bali)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                            <a href="https://www.maps.ie/distance-area-calculator.html">measure acres/hectares on
                                map
                            </a>
                        </iframe>
                    </div>
                </div>
                <div class="lg:pl-10">
                    <div class="font-serif text-3xl text-primary mb-6" data-aos="fade-left" data-aos-delay="400">
                        Contact Us
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="w-full mt-4 bg-green-100 border border-green-400 p-4 rounded-md text-green-700">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="w-full mt-4 bg-red-100 border border-red-400 p-4 rounded-md text-red-700">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <form action="{{ route('contact.store') }}" method="POST" data-aos="fade-down"
                        data-aos-delay="800">
                        @csrf
                        <x-text-input
                            class="bg-transparent border-0 border-b mb-6 !border-primary rounded-none pl-0 w-full outline-none"
                            placeholder="Full Name" name="name" />
                        <x-text-input
                            class="bg-transparent border-0 border-b mb-6 !border-primary rounded-none pl-0 w-full outline-none"
                            placeholder="Email" name="email" type="email" />
                        <x-text-input
                            class="bg-transparent border-0 border-b mb-6 !border-primary rounded-none pl-0 w-full outline-none"
                            placeholder="Phone Number" name="number" type="tel" />
                        <textarea class="bg-transparent border-0 border-b !border-primary w-full pl-0 outline-none mb-6" rows="6"
                            placeholder="Messages" name="message"></textarea>
                        <x-button
                            class="text-primary !border-primary !border font-semibold hover:bg-primary hover:text-white"
                            type="submit">
                            Send</x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
