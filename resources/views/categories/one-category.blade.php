@extends('layouts.site')

@section('title', 'Category')

@section('content')
    <!-- category -->
    <div class="w-full md:pr-12 mb-12">
        <div class="text-center">
            <div class="text-3xl mb-6">
                Category:

                <a href="{{ route('category', $category->slug) }}">
                    {{ $category->title }}
                </a>
            </div>
        </div>
        <div class="bg-white shadow-md mb-6 rounded-lg overflow-hidden">
            <a href="{{ route('category', $category->slug) }}">
                <div class="bg-cover bg-center h-56 p-4" style="background-image: url({{ $category->image }})">
                    <div class="flex justify-end">
                        <svg class="h-6 w-6 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"></path>
                        </svg>
                    </div>
                </div>
            </a>

            <div class="flex p-4 border-t border-gray-300 text-gray-700">
                <div class="flex-1 inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>

                    <p>
                        <a href="">
                            {{ $category->posts->count() }} Publications
                        </a>
                    </p>
                </div>
            </div>

            <div class="px-4 pt-3 pb-4 border-t border-gray-300 bg-gray-100">
                <div class="text-sm text-gray-600 tracking-wide">
                    {{ $category->description }}
                </div>
            </div>

            <div class="px-4 pt-3 pb-4 border-t border-gray-300 bg-white">
                <div id="comments" class="text-sm text-gray-600 tracking-wide">
                    <div class="grid grid-cols-3 gap-4 auto-rows-max">
                        @foreach($category->posts as $post)
                            @include('blog.post')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ category -->
@endsection
