@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-rose-800 mb-2 font-serif italic']) }}>
    {{ $value ?? $slot }}
</label>
