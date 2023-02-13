<div class="flex flex-col space-y-4">
    @foreach ($categories as $category)
        <a href="{{ route('posts.category', $category->slug) }}">
            <div
                class="bg-slate-600 shadow-xl p-2 rounded-md font-semibold text-white
        @isset($currentCategory)
            @if ($category->id === $currentCategory->id)
                bg-orange-500

            @endif
        @endisset
    ">
                {{ $category->emoji }} {{ $category->name }}
            </div>
        </a>
    @endforeach
</div>
