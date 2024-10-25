@props([
    'type',
    'id',
])

<input type="{{ $type }}"
       id="{{ $id }}"
       class="input input-bordered"
       {{ $attributes->merge(['class' => "input input-bordered"]) }}
/>
