@props([
    'isDropdown' => false,
    'text',
    'path',
])
<li>
    <a
        href="{{ route($path) }}"
        class="nav-link {{ active_route($path) }}"
    >
        {{ $text }}
    </a>
</li>
