<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-1 focus:ring-red-500 focus:outline-none']) }}>
    {{ $slot }}
</button>
