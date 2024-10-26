@props([
    'text'
])

<label class="label">
    <span  {{ $attributes->merge(["class" => "label-text"]) }}>{{ $text }}</span>
</label>
