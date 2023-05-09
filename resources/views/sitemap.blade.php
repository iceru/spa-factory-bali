<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://spafactorybali.biz/</loc>
    </url>
    <url>
        <loc>>https://spafactorybali.biz/about-us</loc>
    </url>
    <url>
        <loc>>https://spafactorybali.biz/sustainability</loc>
    </url>
    <url>
        <loc>>https://spafactorybali.biz/clientele</loc>
    </url>
    <url>
        <loc>>https://spafactorybali.biz/e-library</loc>
    </url>
    <url>
        <loc>>https://spafactorybali.biz/contact-us</loc>
    </url>
    @foreach ($articles as $article)
        <url>
            <loc>>https://spafactorybali.biz/e-library/{{ $article->slug }}</loc>
        </url>
    @endforeach
</urlset>
