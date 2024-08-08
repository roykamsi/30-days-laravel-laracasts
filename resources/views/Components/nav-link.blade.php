<li>
    @props(['active' => false, 'type'])

    <a {{ $attributes  }}
        class="{{ $active ? 'bg-gray-700 py-2 px-4 rounded-md text-white' : '' }} text-gray-500 transition hover:text-gray-500/75"
        aria-current="{{ $active ? 'page' : 'false' }}">
        {{ $slot }}
    </a>
</li>
