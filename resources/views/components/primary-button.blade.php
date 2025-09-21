<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-8 py-3 bg-gradient-to-r from-rose-400 to-pink-500 hover:from-rose-500 hover:to-pink-600 border border-transparent rounded-2xl font-medium text-sm text-white shadow-soft hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-rose-300 focus:ring-offset-2 transition-all duration-300 transform hover:scale-105 active:scale-95']) }}>
    {{ $slot }}
</button>
