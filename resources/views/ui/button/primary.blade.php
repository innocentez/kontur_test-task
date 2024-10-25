@props([
    'theme',
    'text',
])

<button {{ $attributes->merge(["class" => "btn text-white btn-$theme"]) }}>
    {{ $text }}
</button>
