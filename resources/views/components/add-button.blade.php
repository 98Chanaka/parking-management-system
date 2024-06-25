<a href="{{ $attributes->get('href', '#') }}" {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-light-button dark:bg-dark-button border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-light-buttonhov hover:dark:bg-dark-buttonhov active:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
