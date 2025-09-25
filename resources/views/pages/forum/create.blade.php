<x-app-layout>
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h1 class="text-2xl font-bold text-rose-700">Start a new thread</h1>
        <div class="soft-card mt-4">
            <form action="{{ route('forum.store') }}" method="POST" class="space-y-4">
                @csrf
                @guest
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-rose-900 mb-1">Your name</label>
                        <input type="text" name="guest_name" class="w-full rounded-2xl border-rose-200 focus:border-rose-400 focus:ring-rose-300" placeholder="John Doe">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-rose-900 mb-1">Your email</label>
                        <input type="email" name="guest_email" class="w-full rounded-2xl border-rose-200 focus:border-rose-400 focus:ring-rose-300" placeholder="you@example.com">
                    </div>
                </div>
                @endguest
                <div>
                    <label class="block text-sm font-medium text-rose-900 mb-1">Category</label>
                    <select name="forum_category_id" class="w-full rounded-2xl border-rose-200 focus:border-rose-400 focus:ring-rose-300">
                        <option value="">Uncategorized</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-rose-900 mb-1">Title</label>
                    <input type="text" name="title" class="w-full rounded-2xl border-rose-200 focus:border-rose-400 focus:ring-rose-300" placeholder="What would you like to discuss?" required maxlength="150">
                </div>
                <div>
                    <label class="block text-sm font-medium text-rose-900 mb-1">Body</label>
                    <textarea name="body" rows="6" class="w-full rounded-2xl border-rose-200 focus:border-rose-400 focus:ring-rose-300" placeholder="Share details to kick off the conversation" required></textarea>
                </div>
                <div class="flex justify-end gap-3">
                    <a href="{{ route('forum.index') }}" class="text-rose-600 hover:text-rose-700">Cancel</a>
                    <button type="submit" class="inline-flex items-center rounded-full bg-rose-500 text-white px-5 py-2.5 shadow-soft hover:bg-rose-600 transition">Publish</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>


