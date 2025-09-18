<x-app-layout>
<div class="max-w-3xl mx-auto p-6">
  <h1 class="text-3xl font-semibold text-pink-600">Contact / Booking</h1>
  @if(session('status'))
    <div class="mt-4 p-3 rounded bg-green-50 text-green-700">{{ session('status') }}</div>
  @endif
  <form method="post" action="{{ route('contact.store') }}" class="mt-6 space-y-4">
    @csrf
    <input class="w-full p-3 rounded-xl border" name="name" placeholder="Your name" value="{{ old('name') }}">
    @error('name')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
    <input class="w-full p-3 rounded-xl border" name="email" type="email" placeholder="Email" value="{{ old('email') }}">
    @error('email')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
    <textarea class="w-full p-3 rounded-xl border" name="message" rows="5" placeholder="Your message">{{ old('message') }}</textarea>
    @error('message')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
    <button class="px-6 py-3 rounded-full bg-pink-500 text-white hover:bg-pink-600 transition">Send</button>
  </form>
</div>
</x-app-layout>
