@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'block w-full px-4 py-3 bg-white/80 backdrop-blur-sm border border-rose-200 rounded-2xl text-rose-900 placeholder-rose-400 focus:border-rose-400 focus:ring-2 focus:ring-rose-200 focus:outline-none transition-all duration-300 shadow-sm hover:shadow-md focus:shadow-lg disabled:bg-rose-50 disabled:text-rose-500 disabled:cursor-not-allowed']) }}>
