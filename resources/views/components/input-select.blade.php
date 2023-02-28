@props(['disabled' => false, 'options' => $options])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-gray-200 border-2 focus:border-primary focus:ring-indigo-500 rounded-md px-3 py-2 w-3/5',
]) !!}>
    @foreach ($options as $option)
        <option value="{{ $option['value'] }}">{{ $option['name'] }}</option>
    @endforeach
</select>
