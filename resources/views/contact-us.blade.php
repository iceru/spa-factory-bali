<x-guest-layout>
    <div class="bg-light py-16 mt-24">
        <div class="container px-4 grid lg:flex gap-12 items-center">
            <div>
                <div class="mb-4 font-serif text-4xl text-primary">
                    Contact Us
                </div>
                <div class="text-body text-justify">
                    Get in touch with us for any questions or concerns - we're here to help!
                </div>
            </div>
            <div>
                <img src='/images/contact-us.png' alt="Contact Us" />
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="grid lg:grid-cols-2">
                <div class="mb-12 lg:mb-0">
                    <div class="font-serif text-primary text-3xl mb-4">
                        Spa Factory Bali
                    </div>
                    <div class="mb-4 flex justify-between">
                        <div class="flex">
                            <div class="mr-2.5 mt-1.5">
                                <img src="/images/contact/icon-home.png" alt="">
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
                                    <img src="/images/contact/icon-phone.png" alt="">
                                </div>
                                <div>
                                    <a href="tel:+6281238003803" class="hover:text-primary">
                                        +62 81 238 003 803
                                    </a> <br>
                                    <a href="tel:+6285100198213" class="hover:text-primary">
                                        +62 85 100 198 213
                                    </a>
                                </div>
                            </div>
                            <div class="flex mt-2">
                                <div class="mr-2.5 mt-1.5">
                                    <img src="/images/contact/icon-mail.png" alt="">
                                </div>
                                <div>
                                    <a href="mailto:sales@spafactorybali.biz" class="hover:text-primary">
                                        sales@spafactorybali.biz
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="width: 100%">
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
                    <div class="font-serif text-3xl text-primary mb-6">
                        Contact Us
                    </div>
                    <div>
                        <x-text-input
                            class="bg-transparent border-0 border-b mb-6 border-primary rounded-none pl-0 w-full outline-none"
                            placeholder="Nama" name="name" />
                        <x-text-input
                            class="bg-transparent border-0 border-b mb-6 border-primary rounded-none pl-0 w-full outline-none"
                            placeholder="Email" name="email" type="email" />
                        <x-text-input
                            class="bg-transparent border-0 border-b mb-6 border-primary rounded-none pl-0 w-full outline-none"
                            placeholder="Phone" name="phone" type="tel" />
                        <textarea class="bg-transparent border-0 border-b border-primary w-full pl-0 outline-none mb-6" rows="6"
                            placeholder="Pesan"></textarea>
                        <x-button
                            class="text-primary border-primary !border font-semibold hover:bg-primary hover:text-white">
                            Kirim</x-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
