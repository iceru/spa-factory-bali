<div class="p-6 bg-primary w-1/4 min-h-screen">
    <div class="flex gap-4 mb-8">
        <img src="/images/logo-white.png" alt="Spa Factory Bali">
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
                <a href="/dashboard">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="/admin/e-library">
                    E-Library
                </a>
            </li>
            <li>
                <a href="/admin/clients">
                    Clients
                </a>
            </li>
            <li>
                <a href="/admin/sustainability">
                    Sustainability
                </a>
            </li>
            <li>
                <a href="/admin/sliders">
                    Image Sliders
                </a>
            </li>
        </ul>
    </nav>
</div>
