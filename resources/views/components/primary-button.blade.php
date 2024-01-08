<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-1 focus:ring-blue-500 focus:outline-none']) }}>
    {{ $slot }}
</button>
