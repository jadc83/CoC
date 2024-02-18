@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex
                items-center
                px-1 pt-1
                border-b-2 border-indigo-400
                text-sl font-medium
                leading-5
                text-green-600
                focus:outline-none focus:border-green-400 transition duration-150 ease-in-out'

            : 'inline-flex
                items-center
                px-1 pt-1
                border-b-2 border-transparent
                text-sl font-medium leading-5 text-white
                hover:text-green-700 hover:border-gray-300
                focus:outline-none focus:text-green-300 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
