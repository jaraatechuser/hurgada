@props(['href' => null, 'title' => null, 'subtitle' => null])
@php
   = 'block bg-white/90 backdrop-blur rounded-2xl shadow hover:shadow-lg transition p-5';
@endphp
@if()
  <a href="{{  }}" {{ ->merge(['class' => ]) }}>
    @if()<div class="font-semibold text-pink-700">{{  }}</div>@endif
    @if()<div class="text-sm text-pink-900/60">{{  }}</div>@endif
    <div class="mt-3">{{  }}</div>
  </a>
@else
  <div {{ ->merge(['class' => ]) }}>
    @if()<div class="font-semibold text-pink-700">{{  }}</div>@endif
    @if()<div class="text-sm text-pink-900/60">{{  }}</div>@endif
    <div class="mt-3">{{  }}</div>
  </div>
@endif
