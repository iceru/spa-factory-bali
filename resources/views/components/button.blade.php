<button {!! $attributes->merge([
    'class' =>
        'bg-transparent cursor-pointer text-white inline-block border-2 border-white px-6 py-1.5 hover:bg-white hover:text-black transition duration-300',
]) !!}> {{ $slot }} </button>
