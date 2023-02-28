@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-gray-300 border-2 focus:border-primary focus:ring-indigo-500 rounded-md  px-3 py-2',
]) !!}>
