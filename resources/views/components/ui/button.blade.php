@props(['href' => null, 'type' => 'button', 'variant' => 'primary', 'size' => 'md'])
@php
   = 'inline-flex items-center justify-center rounded-full font-medium transition focus:outline-none focus:ring-2 focus:ring-offset-2';
   = [
    'sm' => 'px-3 py-1.5 text-sm',
    'md' => 'px-4 py-2 text-sm',
    'lg' => 'px-6 py-3 text-base',
  ];
   = [
    'primary' => 'bg-pink-500 text-white hover:bg-pink-600 focus:ring-pink-300',
    'secondary' => 'bg-white text-pink-700 border border-pink-200 hover:bg-pink-50 focus:ring-pink-200',
    'ghost' => 'text-pink-700 hover:bg-pink-50',
  ];
   = .' '.([] ?? ['md']).' '.([] ?? ['primary']);
@endphp
@if()
  <a href="{{  }}" {{ ->merge(['class' => ]) }}>{{  }}</a>
@else
  <button type="{{  }}" {{ ->merge(['class' => ]) }}>{{  }}</button>
@endif
