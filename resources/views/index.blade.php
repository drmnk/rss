@extends('layouts.app')

@section('content')
    <div class="flex space-x-4 items-start">
        <!-- Categories -->
        <div class="w-1/3 bg-gray-300 p-4 rounded-xl shadow-md">
            @include('components.categories')
        </div>

        <!-- Posts -->
        <div class="w-2/3 flex flex-col space-y-4">
            @each('components.post', $posts, 'post')
        </div>
    </div>
@endsection
