<div class="flex flex-col space-y-4">
    @foreach ($categories as $category)
        <a href="{{ route('posts.category', $category->slug) }}">
            <div
                class="shadow-xl p-2 rounded-md font-semibold text-white
                {{-- Подсветим текущую категорию --}}
                @isset($currentCategory)
                    @if ($category->id === $currentCategory->id)
                        bg-orange-500
                    @else
                        bg-slate-600 
                    @endif
                @endisset

                @empty($currentCategory)
                    bg-slate-600
                @endempty
            ">
                {{ $category->emoji }} {{ $category->name }}
            </div>
        </a>
    @endforeach
</div>
