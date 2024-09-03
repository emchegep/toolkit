@props(['name'])

@php
    $defaults = [
        'name' => $name ,
        'id' => $name,
        'class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm',
        'value'=> old($name)
]
@endphp

<select {{ $attributes($defaults) }}>
    {{ $slot }}
</select>
