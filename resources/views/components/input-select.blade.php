@props(['disabled' => false, 'options' => $options, 'valueOption' => 'value', 'nameOption' => 'name'])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-gray-200 border-2 focus:border-primary focus:ring-indigo-500 rounded-md px-3 py-2 w-full',
]) !!}>
    @foreach ($options as $option)
        <option value="{{ $option[$valueOption] }}">{{ $option[$nameOption] }}</option>
    @endforeach
</select>
