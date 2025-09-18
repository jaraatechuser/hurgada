<div>
    <button wire:click="toggle" class="inline-flex items-center gap-2 px-4 py-2 rounded-full text-sm font-medium transition"
        :class="{ 'bg-rose-500 text-white': @js($isFavorited), 'bg-white text-rose-600 border border-rose-200 hover:bg-rose-50': !@js($isFavorited) }">
        <span x-data>{{ $isFavorited ? 'Saved' : 'Save' }}</span>
    </button>
</div>
