@extends('layouts.app')

@section('content')
    <div class="flex space-x-4 items-start">
        <!-- Categories -->
        <div class="w-1/3 bg-gray-300 p-4 rounded-xl shadow-md">
            @include('components.categories')
        </div>

        <!-- Post -->
        <div class="w-2/3 flex flex-col space-y-4">
            <!-- Post -->
            <div class="text-xl font-semibol rounded-xl shadow-md py-2 px-4 bg-amber-300">
                {{ $post->title }}
            </div>
            <div class="text-gray-600 font-light px-4">
                {{ $post->body }}
            </div>
            <div class="text-xs text-gray-600 px-4">
                {{ $post->updated_at }}
            </div>
        </div>
    </div>
@endsection
