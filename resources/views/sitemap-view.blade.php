<x-guest-layout>
    <div class="p-10 pl-4 pt-40 container">
        <div class="font-serif text-primary text-3xl mb-8">
            Sitemap
        </div>
        <ul class="list-disc text-lg font-serif pl-4 text-body grid gap-4">
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/about-us">About Us</a>
            </li>
            <li>
                <a href="/sustainability">Sustainability</a>
            </li>
            <li>
                <a href="/clientele">
                    Clientele
                </a>
            </li>
            <li>
                <a href="/e-library" class="mb-4 block">E-Library</a>
                <ul class="list-disc grid gap-4">
                    @foreach ($articles as $article)
                        <li>
                            <a href="/e-library">{{ $article->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="/contact-us">Contact Us</a>
            </li>
        </ul>
    </div>
</x-guest-layout>
