  <!-- POST -->
  <a href="{{ route('posts.category.show', [$post->category->slug, $post->id, $post->slug]) }}">
      <div class="shadow-md rounded-xl group bg-white">
          <!-- Title -->
          <div class="p-2 bg-blue-200 font-medium rounded-t-xl group-hover:bg-amber-200 ">
              {{ $post->title }}
          </div>

          <!-- Before cut -->
          <div class="text-gray-500 text-sm p-2">
              {{ $post->before_cut }}...
          </div>

          <!-- Category and date -->
          <div class="flex justify-between text-xs text-gray-500 p-2">
              <div>
                  {{ $post->updated_at }}</div>
              <div>{{ $post->category->emoji }} {{ $post->category->name }}</div>
          </div>
      </div>
  </a>
