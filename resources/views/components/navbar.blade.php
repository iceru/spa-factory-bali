<nav class="nav__wrapper nav__{{ $type }} py-6 px-4 lg:px-0 z-10 absolute top-0 w-screen left-0 bg-light">
    <div class="container flex justify-between items-center">
        <div class="nav__logo ">
            <a href="/">
                @if ($type === 'index' or $type === 'about' or $type === 'auth' or $type === 'article')
                    <img loading="lazy" src="/images/logo.png" class="h-16 lg:h-20 object-contain brightness-0 invert"
                        alt="Spa Factory Bali">
                @else
                    <img loading="lazy" src="/images/logo.png" class="h-16 lg:h-20 object-contain" alt="Spa Factory Bali">
                @endif
            </a>
        </div>
        <ul class="nav__menu-list items-center text-primary hidden lg:flex">
            <li class="{{ $type === 'index' ? 'active' : '' }}">
                <a href="/">Home</a>
            </li>
            <li class="{{ $type === 'about' ? 'active' : '' }}">
                <a href="/about-us">About Us</a>
            </li>
            <li class="{{ $type === 'sustain.index' ? 'active' : '' }}">
                <a href="/sustainability">Sustainability</a>
            </li>
            <li class="{{ $type === 'client.index' ? 'active' : '' }}">
                <a href="/clientele">
                    Clientele
                </a>
            </li>
            <li class="{{ $type === 'article' ? 'active' : '' }}">
                <a href="/e-library">E-Library</a>
            </li>
            <li class="{{ $type === 'contact.index' ? 'active' : '' }}">
                <a href="/contact-us">Contact Us</a>
            </li>
        </ul>
        @if ($type === 'index' or $type === 'about' or $type === 'auth' or $type === 'article')
            <div class="hamburger lg:hidden">
                <img loading="lazy" src="/images/hamburger.png" alt="Menu" />
            </div>
        @else
            <div class="hamburger lg:hidden">
                <img loading="lazy" src="/images/hamburger-green.png" alt="Menu" />
            </div>
        @endif
    </div>

    <script>
        const onMouseUp = e => {
            if (!$('.sidemobile__wrapper').is(e.target) &&
                $('.sidemobile__wrapper').has(e.target).length === 0) {
                $('.sidemobile__wrapper').removeClass('active')
            }
        }

        $('.hamburger').on('click', () => {
            $('.sidemobile__wrapper').toggleClass('active').promise().done(() => {
                if ($('.sidemobile__wrapper').hasClass('active')) {
                    $(document).on('mouseup', onMouseUp)
                } else {
                    $(document).off('mouseup', onMouseUp)
                }
            })
        })
    </script>
</nav>
