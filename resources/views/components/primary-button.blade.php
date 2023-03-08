<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'btn bg-primary border border-transparent  text-white hover:bg-secondary focus:bg-secondary active:bg-secondary']) }}>
    {{ $slot }}
</button>
