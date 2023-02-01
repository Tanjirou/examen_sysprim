@props(['active'])

@php
$classes = ($active ?? false)
            ? 'nav-link active font-weight-bolder fw-bold fs-4'
            : 'nav-link fw-bold fs-4';
@endphp

<li class="nav-item">
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>
