<a href="{{ $link }}" {!! $attributes->merge([
    'class' =>
        'bg-transparent cursor-pointer text-white inline-block border border-white px-4 py-2 hover:bg-white hover:text-black transition duration-300',
]) !!}>
    {{ $slot }}
</a>
