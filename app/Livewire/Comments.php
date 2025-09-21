<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Component;

class Comments extends Component
{
    public string $modelType;
    public int $modelId;
    public string $content = '';

    public function mount(string $modelType, int $modelId): void
    {
        $this->modelType = $modelType;
        $this->modelId = $modelId;
    }

    public function add(): void
    {
        $this->validate(['content' => ['required','string','max:500']]);
        
        Comment::create([
            'user_id' => auth()->id(),
            'commentable_type' => $this->modelType,
            'commentable_id' => $this->modelId,
            'content' => $this->content,
        ]);
        
        $this->content = '';
        
        // Dispatch event to show success message
        $this->dispatch('comment-added');
    }

    public function getCommentsProperty()
    {
        return Comment::where('commentable_type', $this->modelType)
            ->where('commentable_id', $this->modelId)
            ->with('user')
            ->latest()
            ->get();
    }

    public function render()
    {
        return <<<'HTML'
        <div class="space-y-4">
            <h3 class="text-lg font-semibold text-pink-700">Comments</h3>
            <div class="space-y-3">
                @if($this->comments->isEmpty())
                    <p class="text-sm text-pink-900/60">No comments yet. Be the first to comment!</p>
                @else
                    @foreach($this->comments as $comment)
                        <div class="p-3 rounded-xl bg-white shadow">
                            <div class="text-sm font-medium text-pink-700">
                                {{ $comment->user ? $comment->user->name : 'Guest' }}
                            </div>
                            <div class="text-sm text-pink-900/70">{{ $comment->content }}</div>
                            <div class="text-xs text-pink-900/50">{{ $comment->created_at->format('M j, Y g:i A') }}</div>
                        </div>
                    @endforeach
                @endif
            </div>
            <form wire:submit.prevent="add" class="flex gap-2">
                <input 
                    wire:model="content" 
                    class="flex-1 p-3 rounded-xl border border-gray-300 focus:border-pink-500 focus:ring-1 focus:ring-pink-500" 
                    placeholder="Add a comment..." 
                    required
                />
                <button type="submit" class="px-4 py-2 rounded-xl bg-rose-500 text-white hover:bg-rose-600 transition-colors">
                    Post
                </button>
            </form>
        </div>
        HTML;
    }
}
