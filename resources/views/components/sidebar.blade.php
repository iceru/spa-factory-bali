<div class="p-6 bg-primary w-1/4 min-h-screen">
    <div class="flex gap-4 mb-8">
        <a href="/">
            <img loading="lazy" src="/images/logo-white.png" alt="Spa Factory Bali">
        </a>
        <div class="text-white">
            <div class="text-xl mb-1">
                {{ Auth::user()->name }}
            </div>
            <div class="mb-3">
                {{ date('d M Y') }}
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-button type="submit">
                    Logout
                </x-button>
            </form>
        </div>
    </div>
    <nav class="text-white sidebar__menu">
        <ul>
            <li>
                <a href="/admin">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="/admin/products">
                    Products
                </a>
            </li>
            <li>
                <a href="/admin/client">
                    Clients
                </a>
            </li>
            <li>
                <a href="/admin/e-library">
                    E-Library
                </a>
            </li>

            <li>
                <a href="/admin/sustainability">
                    Sustainability
                </a>
            </li>
            <li>
                <a href="/admin/homeslider">
                    Home Sliders
                </a>
            </li>
            <li>
                <a href="/admin/contact">
                    Contact Us
                </a>
            </li>
            <li>
                <a href="/profile">
                    My Profile
                </a>
            </li>
        </ul>
    </nav>
</div>
