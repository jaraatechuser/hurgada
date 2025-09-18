<?php

namespace App\Livewire;

use Livewire\Component;

class Comments extends Component
{
    public string $modelType;
    public int $modelId;
    public string $content = '';
    public array $items = [];

    public function mount(string $modelType, int $modelId): void
    {
        $this->modelType = $modelType;
        $this->modelId = $modelId;
        $this->items = [];
    }

    public function add(): void
    {
        $this->validate(['content' => ['required','string','max:500']]);
        $this->items[] = [
            'user' => auth()->user()->name ?? 'Guest',
            'content' => $this->content,
            'time' => now()->toDateTimeString(),
        ];
        $this->content = '';
    }

    public function render()
    {
        return <<<'HTML'
        <div class="space-y-4">
            <div class="space-y-3">
                @foreach($items as $c)
                    <div class="p-3 rounded-xl bg-white shadow">
                        <div class="text-sm font-medium text-pink-700">{{ $c['user'] }}</div>
                        <div class="text-sm text-pink-900/70">{{ $c['content'] }}</div>
                        <div class="text-xs text-pink-900/50">{{ $c['time'] }}</div>
                    </div>
                @endforeach
            </div>
            <form wire:submit.prevent="add" class="flex gap-2">
                <input wire:model.defer="content" class="flex-1 p-3 rounded-xl border" placeholder="Add a comment" />
                <button class="px-4 py-2 rounded-xl bg-rose-500 text-white">Post</button>
            </form>
        </div>
        HTML;
    }
}
