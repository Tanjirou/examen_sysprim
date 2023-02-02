<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-success text-uppercase text-white text-center']) }}>
    {{ $slot }}
</button>
