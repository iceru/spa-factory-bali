@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-gray-300 border-2 !outline-none rounded-md  px-3 py-2 focus:!shadow-none ',
]) !!}>
