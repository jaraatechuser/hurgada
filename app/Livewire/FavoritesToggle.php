<?php

namespace App\Livewire;

use App\Models\Favorite;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FavoritesToggle extends Component
{
    public string $modelType;
    public int $modelId;
    public bool $isFavorited = false;

    public function mount(string $modelType, int $modelId): void
    {
        $this->modelType = $modelType;
        $this->modelId = $modelId;
        $this->isFavorited = $this->check();
    }

    protected function user(): ?Authenticatable
    {
        return Auth::user();
    }

    protected function check(): bool
    {
        $user = $this->user();
        if (!$user) return false;
        return Favorite::query()
            ->where('user_id', $user->getAuthIdentifier())
            ->where('favoritable_type', $this->modelType)
            ->where('favoritable_id', $this->modelId)
            ->exists();
    }

    public function toggle(): void
    {
        $user = $this->user();
        if (!$user) {
            $this->dispatch('toast', message: 'Please login to favorite');
            return;
        }
        $existing = Favorite::query()
            ->where('user_id', $user->getAuthIdentifier())
            ->where('favoritable_type', $this->modelType)
            ->where('favoritable_id', $this->modelId)
            ->first();
        if ($existing) {
            $existing->delete();
            $this->isFavorited = false;
        } else {
            Favorite::create([
                'user_id' => $user->getAuthIdentifier(),
                'favoritable_type' => $this->modelType,
                'favoritable_id' => $this->modelId,
            ]);
            $this->isFavorited = true;
        }
    }

    public function render()
    {
        return view('livewire.favorites-toggle');
    }
}
